<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\StudentProfile;
use App\CourseClass;
use App\Course;
use App\Installment;
use App\Library\TransactionId;
use App\PaymentTransaction;
use App\StudentFee;
use App\Library\SmsGateway;




class StudentsController extends Controller
{
    //

    public function loginindex(){
        return view('home.login');
    }

    public function login(Request $request){

        $this->validate($request, [
            'email' => 'required|email', 
            'password' => 'required',
        ]);

        $userauth = Auth::attempt(['email' => $request->email, 'password' => $request->password, 'type' => 1]);

      if($userauth)
      {
        if(Auth::user()->account_status)
        {
                return redirect()->route('student.dashboard');
          
        }
        else{
                Auth::logout();
                return back()->with('warning','Please Verify Your Email First To Login');
        }

      }  

      else{
         return back()->with('error','Invalid Login Details');
      }
       
    }

   


    public function registerindex(){
        return view('home.layout.create_account');
    }


    public function admissionIndex(){

        return view('home.admission');
    }

     public function storeStudent(Request $request){

      $validate =   $request->validate([
            'firstname' => 'required|string',
            'middlename' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|max:14',
            'mobile' => 'required|min:10|max:10',
            'dob' => 'required|max:10'
        ]);
     // dd($validate);

      $newotp = rand(111111,999999);
      

        $student = new User();
        $student->name = $request->firstname." ".$request->middlename." ". $request->lastname;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->mobile = $request->mobile;
        $student->is_admin = 0;
        $student->type = 1;
        $student->account_status = 0;
        $student->otp = $newotp;
        $student->dob = $request->dob;
        $student->save();

        $details = [
            'name' => $request->firstname,
            'otp' => Crypt::encryptString($newotp),
            'email' => $request->email,
        ];
       

         \Mail::to($request->email)->send(new \App\Mail\MyTestMail($details));

          return redirect()->route('home.student.login.index')->with('success','Account Created Successfully.Please Verify Email To Continue');

         

          
    }

    public function verifyemail(Request $request){

        $email = $request->email;
        $token = $decrypted = Crypt::decryptString($request->verification); 
        $user = User::where('email',$email)
                ->where('otp',$token)
                ->firstOrFail();
        $user->account_status = 1;
        $user->otp = rand(111111,999999);
        $user->save();        

        return redirect()->route('home.student.login.index')->with('success','Your Email Verified Please Login And Apply');

    }



    public function studentDashboardIndex(){

       $student= Auth::user();
       $student = StudentProfile::where('user_id',$student->id)->first();
       if(!$student)
       {
        return redirect()->route('student.admission')->with('success','Please Fill Admission Form And Apply.');
       }
       else{
        return redirect()->route('student.fees')->with('success','Form Submitted! Please Pay Fees');
       }



    }


    public function studentAdmission(){
      $profilestatus= 0;
        $userinfo = User::findOrFail(Auth::user()->id);
        $classes = CourseClass::all();
        $profilestatus = StudentProfile::where('user_id',Auth::user()->id)->first();
        if($profilestatus){
            return redirect()->route('student.admission.preview',Auth::user()->id)->with('success','You Already Applied.');
        }
        else{
           return view('home.admission',compact('userinfo','classes','profilestatus'));
        }
       
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.student.login.index')->with('success','Logout Successfully.');

    }

    public function admission(){
        return redirect()->route('student.register');
    }


    public function StorestudentAdmission(Request $request){

      $request->validate([
        'course_id' => 'required|numeric|min:0|not_in:0',
        'class_id' => 'required',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        
      ]);

      $student_id = Auth::user()->id;


       $file = NULL;

        if($request->image)
        {
        $filename = time().'.'.$request->image->extension();  
       
        $request->image->move(public_path('students'), $filename);
        $file = 'students/'.$filename;
        }

        $courseinfo = Course::where('id',$request->course_id)->first();

      $data = array(
        'user_id' => $student_id,
        'applicant_name' => $request->fullname,
        'father_name' => $request->fathername,
         'mother_name' => $request->mothername,
          'state_of_domicile' => $request->state,
           'dob' => $request->dob,
            'gender' => $request->gender,
             'category' => $request->category,
              'religion' => "N/A",
               'class_id' => $request->class_id,
                'course_id' => $request->course_id,
                 'student_address' => $request->address.",".$request->city.",".$request->pincode.",".$request->state,
                 'student_aadhar'=> $request->aadharno,
                 'parent_no' => $request->parentmobile,
                  'student_no' => $request->studentmobile,
                    'student_photo' => $file,
                    'admission_date' => date('d/m/Y'),
                    'pincode' => $request->pincode
      );

      $checkIfExist = Studentprofile::where('user_id',$student_id)->first();

      if(!$checkIfExist)
      {
       
        $initFees = StudentFee::create([
          'user_id' => $student_id,
          'total_amount' => $courseinfo->total_fees,
        ]);
         $stored = studentprofile::insert($data);
        if($stored)
        {
            $user = User::find($student_id);
         return redirect()->route('student.admission.preview',$student_id)->with('success','Form Submitted! Please Continue To Payment');
        }
        else{
             return back()->with('error','Please Check Errors!');
        }
      }

      else{
        return back()->with('success','You Already Submited Form! Please Wait For Approval');
      }



    }


    public function payStudentFees(Request $request,$id=null){


        $studentcourse = studentprofile::where('user_id',Auth::user()->id)->firstOrFail();
        $coursedetails = Course::findOrFail($studentcourse->course_id);
        $installments = Installment::where('course_id',$studentcourse->course_id)->get();
        $classdetails = CourseClass::where('id',$studentcourse->class_id)->firstOrFail();
      
      return view('home.feesdetails',compact('studentcourse','coursedetails','installments','classdetails'));

    }

    public function getInstallments(Request $request){
      $installmentamt = Installment::where('course_id',$request->course_id)->first();
      return $installmentamt;
    }

    public function checkStudentFees($id=null){

        $userid = Auth::user()->id;
        $studentcourse = studentprofile::where('user_id',$userid)->firstOrFail();
        $coursedetails = Course::findOrFail($studentcourse->course_id)->first();
        $classdetails = CourseClass::where('id',$studentcourse->class_id)->firstOrFail();
        $transactions = PaymentTransaction::where('user_id',$userid)
        ->where('payment_status',1)
        ->orderBy('payment_status','DESc')->get();
        // $paidfees = 
         return view('home.feeshistory',compact('studentcourse','coursedetails','transactions','classdetails'));

    }


    public function fetchInstallmentAmount(Request $request){

      $data = Installment::where('id',$request->id)->firstOrFail();
      return response()->json($data,200);

    }

    public function tnc(){
      return view ('home.tnc');
    }

    public function formpreview($id)
    {
      $profileinfo = studentprofile::where('user_id',$id)->firstOrFail();
        $userinfo = User::where('id',$id)->first();
        $courseinfo = Course::where('id',$profileinfo->course_id)->first(['id','course_name','board','total_fees']);
        $classinfo = CourseClass::where('id',$profileinfo->class_id)->first();
        $profilestatus = 1;

        return view('home.formpreview',compact('profileinfo','userinfo','courseinfo','classinfo','profilestatus'));


    }

    public function initOfflinePayment(Request $request,$id){

      $authuser = Auth::user()->id;

      if($authuser == $id){
        $request->validate([
          'payment_amount' => 'required|numeric|not_in:0|min:1',
          'file' => 'required|image|max:1024',
        ]);
        
        $initTransaction = new PaymentTransaction();
        $initTransactionID = new TransactionId();
        $txnID = $initTransactionID->TransactionId($authuser); 
        $filename = time().'.'.$request->file->extension();  
        $request->file->move(public_path('transactions'), $filename);
        $file = 'transactions/'.$filename;

        $initTransaction->user_id = $authuser;
        $initTransaction->payment_amount = number_format($request->payment_amount, 2, '.', '');
        $initTransaction->receipt_path = $file;
        $initTransaction->transaction_id = $txnID;
        $initTransaction->payment_method = 0;
         $initTransaction->payment_status = 5;
          $initTransaction->product_info = config('app.ADMISSION_FEES')."-RHT".$authuser;
        $isSaved = $initTransaction->save();

        if($isSaved)
        {
          return back()->with('success','Payment Receipt Submited Successfully.');
        }
        return back()->with('error','Unable To Process Payment');

        // Submit Transaction Receipts




      }
      else{
        return back()->with('error','Invalid Transaction!Please Try Again With Account');
      }

    }

    public function initOnlinePayment(Request $request,$id){


      $request->validate([

        'payment_amount' => 'required|numeric|min:1'

      ]);

      $authuser = Auth::user()->id;
    
      if($authuser == $id){

        // Inititalise Transation For PayU With Status Pending

       $request->session()->forget('txnid');

        $initTransaction = new PaymentTransaction();
        $initTransactionID = new TransactionId();
        $txnID = $initTransactionID->TransactionId($authuser);
        $initTransaction->user_id = $authuser;
        $initTransaction->payment_amount = number_format($request->payment_amount, 2, '.', '');
        $initTransaction->transaction_id = $txnID;
        $initTransaction->payment_method = 1;
        $initTransaction->product_info = config('app.ADMISSION_FEES')."-RHT".$authuser;
        $isSaved = $initTransaction->save();
        if($isSaved)
        {
          $request->session()->put('txnid', $txnID);
           return redirect()->route('payment.process',['txnid'=>$txnID]);
        }
        else{
          return back()->with('error','Invalid Transaction');
        }



        // Inititalise Transation Ended
      }


    }


     public function proccedTransaction(Request $request){
          $sessionTXN = $request->session()->get('txnid');
          $userID = Auth::user();
          $hash = '';
          $posted = array();

         if($sessionTXN){
          $request->session()->forget('txnid');
          $fetchTransaction  = PaymentTransaction::where('transaction_id',$sessionTXN)
                              ->where('user_id',$userID->id)
          ->firstOrFail();

          // Hash Sequence
          // $samplehash = config('app.PAYU_MERCHANT_LIVE').'|'.$sessionTXN.'|'.$fetchTransaction->payment_amount.'|'.$fetchTransaction->product_info.'|'.$userID->name.'|'.$userID->email.'|||||'."".'||||||'.config('app.PAYU_SALT_LIVE');

          $hashSequence = config('app.PAYU_MERCHANT_LIVE').'|'.$sessionTXN.'|'.$fetchTransaction->payment_amount.'|'.$fetchTransaction->product_info.'|'.$userID->name.'|'.$userID->email.'|||||'."".'||||||'.config('app.PAYU_SALT_LIVE');

          $paymenthash=hash('sha512', $hashSequence);

          return view('home.process',compact('paymenthash','fetchTransaction'));

         }
         else{
          return back()->with('error','Invalid Transaction.Please Inititalise Transaction Again');
         }
          
        return $requestID;
    }


    public function callbackTransaction(Request $request){

      $status = $_POST['status'];
      $email = $_POST['email'];
      $productinfo = $_POST['productinfo'];
      $firstname = $_POST['firstname'];
      $amount = $_POST['amount'];
      $txnid = $_POST['txnid'];
      $receiVedHash = $_POST['hash'];
      $cardnum = (empty($_POST['cardnum'])) ? "" : $_POST['cardnum']  ;
      $mode = $_POST['mode'];
      $payuMoneyId = $_POST['payuMoneyId'];

      $hashSequence  = config('app.PAYU_SALT_LIVE').'|'.$status.'||||||'.'|||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.config('app.PAYU_MERCHANT_LIVE');
      $generatedHash = hash("sha512", $hashSequence);

      if($receiVedHash == $generatedHash)
      {
        if($status == "success")
        {

        $invoice = PaymentTransaction::where('transaction_id',$txnid)
                  ->where('user_id',Auth::user()->id)
                  ->first();
        $invoice->payment_status = 1;
        $invoice->cardnum = $cardnum;
        $invoice->mode = $mode;
        $invoice->payment_approved_by = 1;
        $invoice->payuMoneyId = $payuMoneyId;
        $invoice->save();
        $paidFees = StudentFee::where('user_id',Auth::user()->id)->first();

        if($paidFees)
        { 
            $pendingAmt = $paidFees->paid_amount + $amount;
            $paidFees->paid_amount =  $pendingAmt;
            $paidFees->save();
            $data = array(
            'payment_amount' => $invoice->payment_amount,
            'mode' =>  $mode,
            'transaction_id' => $txnid,
            'pending' => ($pendingAmt < 0) ? (0) : ($pendingAmt),
            );


        } 

       //  $sendotp = new SmsGateway();
       // $status =  $sendotp->sendSMS(2,Auth::user()->mobile,'',$data);
        return redirect()->route('students.checkfees')->with('success','Fees Paid Successfully! . Thank You .Download Receipt From Below !');
                
        }
        else{   
          return redirect()->route('student.fees')->with('error','Payment Not Successful. Try Again');
        }
     
      }
      else{
         return redirect()->route('student.fees')->with('error','Invalid Payment... Try Again!');
      }

      return redirect()->route('student.fees')->with('error','Something Went Wrong.. Try Again!');

    }

    public function resetAdmission(){
      $student = StudentProfile::where('user_id',Auth::user()->id)->first();
      $student->delete();
      return redirect()->route('student.admission')->with('success','Form Reset Successfully.');
    }

    public function invoicePriview(Request $request){

        $id = "";

        $request->validate([
          'txn_id' => 'required|numeric'
        ]);

        if($request->id)
        {
           $id = $request->id;
        }
        else{
          $id = Auth::user()->id;
        }

        $invoice = PaymentTransaction::where('transaction_id',$request->txn_id)
        ->where('user_id',$id)
        ->where('payment_status',1)
        ->firstOrFail();
        $student = User::where('id',$id)->firstOrFail();
         return view('home.invoice',compact('invoice','student'));
     
    

    }

    public function sendotp(){
      return view('home.verifyotp',compact('status'));
    }

    public function verifyMobile(Request $request){

      // $request->validate([
      //   'mobile' => 'required|numeric|max:10|min:10',
      //   'otp' => 'request|numeric|min:4|max:6',
      // ]);

      $isVerified = User::where('id',Auth::user()->id)
                          ->where('otp',$request->otp)
                          ->first();
     if($isVerified){
      $isVerified->mobile_verified = 1;
      $isVerified->save();
      return redirect()->route('student.dashboard')->with('success','OTP Verified');

     } 
     else{
      return redirect()->back()->with('error','Incorrect OTP. Please Re-enter OTP');
     }                    


    }


    public function resendotp(){

       $sendotp = new SmsGateway();
            $sendotp->sendSMS(1,Auth::user()->mobile,Auth::user()->otp,'');
            return response()->json('success',200);

    }







}
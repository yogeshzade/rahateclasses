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
                return back()->with('warning','Your Account Is Not Activate');
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
            'fullname' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|max:14',
            'mobile' => 'required|min:10|max:10|unique:users',
            'captcha' => 'required|captcha',
        ]);
     // dd($validate);

      $newotp = rand(111111,999999);

        $student = new User();
        $student->name = $request->fullname;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->mobile = $request->mobile;
        $student->is_admin = 0;
        $student->type = 1;
        $student->account_status = 0;
        $student->otp = $newotp;
        $student->save();

        $details = [
            'name' => $request->firstname,
            'otp' => Crypt::encryptString($newotp),
            'email' => $request->email,
        ];


         \Mail::to($request->email)->send(new \App\Mail\MyTestMail($details));

          return redirect()->route('home.student.login.index')->with('success','Account Created Successfully.Please Verify Email To Process Next');

         

          
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
        $userinfo = User::findOrFail(Auth::user()->id);
        $classes = CourseClass::all();
        return view('home.admission',compact('userinfo','classes'));
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
        'course_id' => 'required',
        'class_id' => 'required',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
      ]);

      $student_id = Auth::user()->id;

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
      );

      $checkIfExist = Studentprofile::where('user_id',$student_id)->first();

      if(!$checkIfExist)
      {
        $stored = studentprofile::insert($data);
        if($stored)
        {
            $user = User::find($student_id);
         return redirect()->route('student.fees')->with('success','Form Submitted!');
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
      
      return view('home.feesdetails',compact('studentcourse','coursedetails','installments'));

    }







}

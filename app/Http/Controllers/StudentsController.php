<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\StudentProfile;




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


    }


    public function studentAdmission(){
        return view('home.admission');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.student.login.index')->with('success','Logout Successfully.');

    }







}

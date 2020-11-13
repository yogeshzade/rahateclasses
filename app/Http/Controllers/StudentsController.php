<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;



class StudentsController extends Controller
{
    //

    public function loginindex(){
    		return view('home.login');
    }

    public function login(Request $request){

        $this->validate($request, [
            'mobile' => 'required|max:10|min:10', 'password' => 'required',
        ]);
    

        if (Auth::attempt(['email' => $request->mobile, 'password' => $request->password, 'type' => 1])) {
            $user = Auth::getLastAttempted();
            if($user->account_status)
            {
                return "Logged In";
            }
            else{
                return redirect()->back()->with('error','Your Account is Disabled By Admin');
            }
        }
        else{
            return redirect()->back()->with('error','Invalid Credentials');
        }

    }

   


    public function registerindex(){
        return view('home.layout.create_account');
    }

     public function storeStudent(Request $request){

      $validate =   $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|max:14',
            'mobile' => 'required|min:10|max:10|unique:users',
            'captcha' => 'required|captcha',
        ]);
     // dd($validate);

      $newotp = rand(111111,999999);

        $student = new User();
        $student->name = $request->firstname . $request->firstname;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->mobile = $request->mobile;
        $student->is_admin = 0;
        $student->type = 1;
        $student->account_status = 2;
        $student->otp = $newotp;
        $student->save();

        $details = [
            'name' => $request->firstname,
            'otp' =>  $newotp,
        ];

         \Mail::to($request->email)->send(new \App\Mail\MyTestMail($details));

         return back()->with('success','Account Created Successfully.Please Verify Email To Process Next');




          
    }







}

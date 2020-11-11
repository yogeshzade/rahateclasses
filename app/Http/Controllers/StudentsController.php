<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        return view('home.register');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;
use App\Library\SmsGateway;

class IsMobileVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(Auth::check() && !Auth::user()->mobile_verified )
        {
            $sendotp = new SmsGateway();
            $sendotp->sendSMS(1,Auth::user()->mobile,Auth::user()->otp,'');
            return redirect()->route('student.sendotp');
        }
        else{
             return $next($request);
        }
       
    }
}

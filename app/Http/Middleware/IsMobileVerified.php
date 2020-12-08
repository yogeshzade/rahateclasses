<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

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
            return redirect()->route('student.sendotp');
        }
        else{
             return $next($request);
        }
       
    }
}

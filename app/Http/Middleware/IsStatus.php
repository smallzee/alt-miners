<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(@Auth::user()->status == 1) {
            return $next($request);
        }else{
            Auth::guard()->logout();
            return redirect('/account/login')->with('flash_error','Your account is not activated yet, verification link has been sent to your email address');
        }

    }
}

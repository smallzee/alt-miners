<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsKycVerified
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
        if (Auth::user()->kyc_status == 0){
            return redirect('user/kyc')->with('flash_error','Please we need your KYC before you can started trading on '.get_settings('web_title'));
        }elseif (Auth::user()->kyc_status == 1){
            return redirect('user/kyc')->with('flash_error','Your KYC still on processing, please wait for a while');
        }elseif (Auth::user()->kyc_status == 2){
            return redirect('user/kyc')->with('flash_error','Your KYC has been rejected, please provide us valid KYC');
        }else{
            return $next($request);
        }
    }
}

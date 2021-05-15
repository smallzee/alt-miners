<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Kyc_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $data['page_title'] = "Dashboard";

        return view('user.dashboard',$data);
    }


    public function logout()
    {
        Auth::guard()->logout();
        return redirect('account/login')->with('flash_info','You have logged out successfully');
    }

}

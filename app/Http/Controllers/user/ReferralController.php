<?php

namespace App\Http\Controllers\user;

use App\Deposit;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function referral(){
        $data['page_title'] = "Referral";

        $data['referral'] = User::where('referral_user_id',auth()->user()->id)->get();

        return view('user.referral',$data);
    }



}

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

        $data['referral'] = User::findOrFail(auth()->user()->id)->referrals;

        return view('user.referral',$data);
    }



}

<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
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

        return view('user.referral',$data);
    }
}

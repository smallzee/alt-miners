<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function deposit(){
        $data['page_title'] = "Deposit";

        return view('user.deposit',$data);
    }

}

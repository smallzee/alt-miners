<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
}

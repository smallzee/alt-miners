<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index(){
        $data['page_title'] = "Login";

        return view('admin.index',$data);
    }
}

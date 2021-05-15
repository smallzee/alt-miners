<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function users (){
        $data['page_title'] = "Users";

        $data['all_users'] = User::where(array('role_name'=>'user'))->orderBy('id','desc')->get();

        return view('admin.users',$data);

    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function dashboard(){
        $data['page_title'] = "Dashboard";
        return view('admin.dashboard',$data);
    }

    public function admin(){
        $data['page_title'] = "All Administrative";

        $data['all_users'] = User::where('role_id','>','1')->orderBy('id','desc')->get();

        return view('admin.admin',$data);
    }

    public function logout()
    {
        Auth::guard()->logout();
        return redirect('/admin')->with('flash_info','You have logged out successfully');
    }

}

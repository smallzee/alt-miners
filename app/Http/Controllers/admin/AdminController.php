<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Pricing;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $data['page_title'] = "Dashboard";

        $data['all_users'] = User::where('role_name','user')->count();
        $data['all_admin'] = User::where('role_id','>',1)->count();
        $data['total_cloud_pricing'] = Pricing::where('pricing_type',1)->count();
        $data['total_doge_pricing'] = Pricing::where('pricing_type',2)->count();

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

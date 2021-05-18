<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function profile(User $user){

        $data['user_data'] = $user;
        $data['page_title'] = ucwords($user->full_name).' - Dashboard';

        $data['mining'] = $user->mining;
        $data['referral'] = $user->referrals;
        $data['deposit'] = $user->deposits;
        $data['withdrawal'] = $user->withdrawals;


        return view('admin.profile',$data);
    }

    public function top_up_balance(Request $request){
        $validator = Validator::make($request->all(),[
            'balance'=>'required|numeric'
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('flash_error',$validator->errors()->first())->withInput();
        }

        $user_id = $request->user_id;

        $wallet = Wallet::where('user_id',$user_id)->first();
        $wallet->balance = $request->balance;
        $wallet->deposit = $request->deposit;

        if ($wallet->save()){
            return redirect()->back()->with('flash_info','User account balance has been updated successfully');
        }
    }
}

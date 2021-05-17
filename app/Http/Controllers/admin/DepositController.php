<?php

namespace App\Http\Controllers\admin;

use App\Deposit;
use App\Http\Controllers\Controller;
use App\Mail\SendDepositTransaction;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class DepositController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function deposit(){
        $data['page_title'] = "All User Deposited";

        $data['all_deposit_data'] = Deposit::orderBy('id','desc')->get();

        return view('admin.deposit',$data);
    }

    public function deposit_details(Deposit $deposit){
        $data['page_title'] = "Deposit Transaction Details";

        $data['deposit_details'] = $deposit;

        return view('admin.deposit-details',$data);
    }

    public function deposit_confirmation(Request $request){
        $validator = Validator::make($request->all(),[
            'status'=>'required'
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('flash_error',$validator->errors()->first())->withInput();
        }

        $id = $request->id;
        $amount = $request->amount;
        $status = $request->status;
        $full_name = $request->full_name;
        $email_address = $request->email_address;
        $ref = $request->reference;
        $user_id = $request->user_id;

        $deposit = Deposit::findOrFail($id);

        if ($status == 'completed'){
            $total_deposit = balance('deposit',$user_id) + $amount;
            $wallet = Wallet::where('user_id',$user_id)->first();
            $wallet->deposit = $total_deposit;
            $wallet->save();
        }


        $deposit->status = $status;

        if ($deposit->save()){
            Mail::to($email_address)->send(new SendDepositTransaction($full_name,$ref,$status,$total_deposit,$amount,"Deposit"));

            return redirect()->back()->with('flash_info', "User transaction ".$status);
        }

    }
}

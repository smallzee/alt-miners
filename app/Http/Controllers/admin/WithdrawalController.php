<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendDepositTransaction;
use App\Wallet;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class WithdrawalController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function withdrawal(){
        $data['page_title'] = "All Users Withdrawal";

        $data['withdrawal'] = Withdrawal::orderBy('id','desc')->get();

        return view('admin.withdrawal',$data);
    }

    public function edit_withdrawal($id){

        $data['page_title'] = "Withdrawal Transactions";

        $data['withdrawal'] = Withdrawal::findOrFail($id);

        return view('admin.edit-withdrawal',$data);
    }

    public function withdrawal_confirmation(Request $request){

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

        $withdrawal = Withdrawal::findOrFail($id);

        if ($status == 'rejected'){
            $total_deposit = balance('balance',$user_id) + $amount;

            $wallet = Wallet::where('user_id',$user_id)->first();
            $wallet->balance = $total_deposit;
            $wallet->save();

        }else{
            $total_deposit = 0;
        }

        $withdrawal->status = $status;

        if ($withdrawal->save()){
            Mail::to($email_address)->send(new SendDepositTransaction($full_name,$ref,$status,$total_deposit,$amount,"Withdrawal"));

            return redirect()->back()->with('flash_info', "User transaction ".$status);
        }
    }

    public function delete_withdrawal(Request $request){
        $validator = Validator::make($request->all(),[
            'id'=>'required'
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('flash_error',$validator->errors()->first())->withInput();
        }

        $id = $request->id;

        for ($i =0; $i < count($id); $i++){
            $withdrawal = Withdrawal::findOrFail($id[$i]);
            $withdrawal->delete();
        }

        return redirect()->back()->with('flash_info','Withdrawal has been deleted');
    }
}

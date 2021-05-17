<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Mail\SendWithdrawalMail;
use App\User;
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
        $data['page_title'] = "Withdrawal";

        return view('user.withdrawal',$data);
    }

    public function withdrawal_history(){
        $data['page_title'] = "Withdrawal History";

        $data['withdrawals'] = User::findOrFail(auth()->user()->id)->withdrawals;


        return view('user.withdrawal-history',$data);
    }

    public function create_withdrawal(Request $request){
        $validator = Validator::make($request->all(),[
            'amount'=>'required|numeric|min:3'
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('flash_error',$validator->errors()->first())->withInput();
        }

        $user_id = auth()->user()->id;

        $balance = balance('balance');
        $amount = $request->amount;

        if ($amount > $balance){
            return redirect()->back()->with('flash_error','Insufficient fund in your account balance')->withInput();
        }

        $email_address = auth()->user()->email_address;
        $reference = uniqid().$user_id;
        $wallet_address = auth()->user()->wallet_address;

        if ($wallet_address == ""){
            return redirect()->back()->with('flash_error','Please go to profile and set enter your BTC wallet address');
        }

        $withdrawal = new Withdrawal();
        $withdrawal->amount = $amount;
        $withdrawal->amount_btc = get_btc_live_amount($amount);
        $withdrawal->user_id = $user_id;
        $withdrawal->reference = $reference;
        $withdrawal->wallet_address = $wallet_address;

        $m = $balance - $amount;

        $wallet = Wallet::where('user_id',$user_id)->first();
        $wallet->balance = $m;
        $wallet->withdrawal = balance('withdrawal') + $amount;

        if ($withdrawal->save() and $wallet->save()){
            Mail::to(get_settings('official_email'))->queue(new SendWithdrawalMail($reference,$email_address,$amount,$wallet_address));

            return redirect()->back()->with('flash_success','Your withdrawal has been on processing, please wait...');
        }


    }
}

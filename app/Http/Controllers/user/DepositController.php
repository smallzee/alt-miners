<?php

namespace App\Http\Controllers\user;

use App\Deposit;
use App\Http\Controllers\Controller;
use App\Mail\SendDepositMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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

    public function create_deposit(Request $request){
        $validator = Validator::make($request->all(),[
            'currency'=>'required',
            'amount'=>'required|numeric'
        ]);

        if ($validator->fails()){
            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('alert_error',$msg)->withInput();
        }

        if ($request->amount == 0){
            return redirect()->back()->with('alert_error','Invalid amount entered')->withInput();
        }

        $currency = $request->currency;
        if ($currency == "btc"){
            $wallet_address = get_settings('bitcoin_wallet');
        }else if ($currency == "usdt"){
            $wallet_address = get_settings('usdt_wallet');
        }else if ($currency == "litcoin"){
            $wallet_address = get_settings('litcoin_wallet');
        }else if ($currency == "eth"){
            $wallet_address = get_settings('ethereum_wallet');
        }else if ($currency == "dogecoin"){
            $wallet_address = get_settings('dogecoin_wallet');
        }

        $payment_data = array(
            'amount'=>$request->amount,
            'wallet_address'=>$wallet_address,
            'currency'=>$currency
        );

        Session::put('payment_data',$payment_data);

        return redirect('user/payment');
    }

    public function payment (){
        $payment_data = Session::get('payment_data');

        if (!isset($payment_data)){
            return redirect('user/dashboard')->with('alert_error',"Unable to access payment page");
        }

        $data['page_title'] = "Payment";
        $data['payment_data'] = $payment_data;

        return view('user.payment',$data);

    }

    public function create_new_payment(Request $request){
        $validator = Validator::make($request->all(),[
            'image'=>'required|mimes:jpg,png,jpeg:max:1024'
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('alert_error',$validator->errors()->first())->withInput();
        }

        if ($request->hasFile('image')){
            $file_name = time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/images/'),$file_name);
        }

        $ref = uniqid().auth()->user()->id;
        $amount = $request->amount;
        $currency = $request->currency;
        $email_address = auth()->user()->email_address;
        $payment_method = $request->currency;


        $deposit = auth()->user()->deposits()->create([
            'image' => $file_name,
            'currency' => $currency,
            'amount' => $amount,
            'reference' => $ref
        ]);

        if ($deposit){

            Mail::to(get_settings('official_email'))->queue(new SendDepositMail($email_address,$payment_method,$ref,$amount));

            Session::forget('payment_data');

            return redirect('user/deposit')->with('alert_success','Your payment has been on processing, please wait for confirmation');
        }

    }

}

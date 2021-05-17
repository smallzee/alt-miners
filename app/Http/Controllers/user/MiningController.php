<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Mining;
use App\Pricing;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MiningController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mining($slug){

        if (!in_array($slug,array('buy-haspower','dogecoin'))){
            abort(404);
        }

        if ($slug == "buy-haspower"){
            $pricing_type = 1;
        }else{
            $pricing_type = 2;
        }

        $data['page_title'] = ucwords($slug);

        $data['pricing'] = Pricing::where('pricing_type',$pricing_type)->orderBy('min_amount')->get(array('id','name','min_amount','max_amount','daily_return','duration'));


        return view('user.mining',$data);
    }

    public function my_orders(){
        $data['page_title'] = "My Orders";

        $data['mining'] = User::findOrFail(auth()->user()->id)->mining;

        return view('user.my-orders',$data);
    }

    public function create_mining(Request $request){

       $validator = Validator::make($request->all(),[
           'plan'=>'required|numeric',
           'amount'=>'required|numeric'
       ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();
        }

        $deposit = balance('deposit');
        $plan_id = $request->plan;

        $pricing = Pricing::findOrFail($plan_id);

        if (!in_array($request->amount, range($pricing->min_amount, $pricing->max_amount))){
            return redirect()->back()->with("alert_error","The minimum amount and the maximum amount of the plan you selected should be between $".number_format($pricing->min_amount)." - $".number_format($pricing->max_amount));
        }

        if ($deposit < $pricing->min_amount || $deposit < $pricing->max_amount){
            return redirect()->back()->with("alert_error","Your deposit amount should be between $".number_format($pricing->min_amount)." - $".number_format($pricing->max_amount));
        }

       $plan_name = $pricing->name;
       $daily_return_percentage = $pricing->daily_return;
       $reference = uniqid('txn').auth()->user()->id;
       $duration = time()+ 60 * 60 * 24 * $pricing->duration;
       $amount = $request->amount;
       $type = $request->type;


       $mining = new Mining();
       $mining->plan_name = $plan_name;
       $mining->amount = $amount;
       $mining->daily_return_percentage = $daily_return_percentage;
       $mining->type = $type;
       $mining->reference = $reference;
       $mining->duration = $duration;
       $mining->user_id = auth()->user()->id;

       if ($mining->save()){

           $balance = $deposit - $amount;

           $w = Wallet::where('user_id',auth()->user()->id)->first();
           $w->deposit = $balance;
           $w->save();

           return redirect('user/my-orders')->with('alert_success','Your investment has been successful, you may check your daily profit here');

       }

    }
}

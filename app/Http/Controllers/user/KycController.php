<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Kyc_type;
use App\Mail\SendKycMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class KycController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function kyc(){

        $data['page_title'] = "KYC";

        $data['kyc_type'] = Kyc_type::orderBy('name')->get(['id','name']);

        if (Auth::user()->kyc_status == 3){
            return redirect()->intended('user/dashboard');
        }else{
            return view('user.kyc',$data);
        }
    }

    public function upload_kyc(Request $request){



        $validator = Validator::make($request->all(),[
            'kyc_type'=>'required|numeric',
            'kyc_image'=>'required|mimes:jpg,jpeg,png|max:1024'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();
        }


        if ($request->hasFile('kyc_image')){
            $file_name = time().$request->file('kyc_image')->getClientOriginalName();
            $request->file('kyc_image')->move(public_path('assets/images/'),$file_name);
        }

        $user = User::findOrFail(auth()->user()->id);
        $user->kyc_status = 1;
        $user->kyc_type = $request->kyc_type;
        $user->kyc_image = $file_name;

        if ($user->save()) {

            $full_name = auth()->user()->full_name;
            $email_address = auth()->user()->email_address;
            $kyc_type = ucwords(get_kyc_type($request->kyc_type, 'name'));

            Mail::to(get_settings('official_email'))->queue(new SendKycMail($full_name, $email_address, $kyc_type));

            return redirect()->back()->with('flash_info',"Your KYC has been submitted, please wait for verification");
        }

    }
}

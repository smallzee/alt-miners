<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Kyc_Type;
use App\Mail\SendKycFeedBack;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class KycController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function kyc(){
        $data['page_title'] = "All KYC Type";

        $data['all_kyc_type'] = Kyc_Type::orderBy('id','desc')->get();

        return view('admin.kyc',$data);
    }

    public function create_new_kyc_type(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required|unique:kyc_type|max:20|min:3'
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('flash_error',$validator->errors()->first())->withInput();
        }

        $kyc = new Kyc_Type();
        $kyc->name = $request->name;

        if ($kyc->save()){
            return redirect()->back()->with('flash_info','New Kyc has been added successfully');
        }
    }

    public function kyc_users($kyc_status){
        $data['page_title'] = kyc_status($kyc_status)." KYC  Users";

        $data['all_users'] = User::where(array('kyc_status'=>$kyc_status))->orderBy('id','desc')->get();
        return view('admin.kyc-users',$data);
    }

    public function view_user_kyc($user_id){

        $user_data = User::findOrFail($user_id);

        $data['page_title'] = ucwords($user_data->full_name)." - KYC";
        $data['user_data'] = $user_data;

        return view('admin.view-user-kyc',$data);
    }

    public function confirm_user_kyc(Request $request){

        $validator = Validator::make($request->all(), [
            'kyc_status'=>'required|numeric',
            'comment'=>'required'
        ]);

        if ($validator->fails()){
            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();
        }

        $full_name = $request->full_name;
        $email_address = $request->email_address;
        $kyc_status = kyc_status($request->kyc_status)." - KYC";
        $comment = $request->comment;

        $user = User::findOrFail($request->id);
        $user->kyc_status = $request->kyc_status;
        $user->save();

        Mail::to($email_address)->queue(new SendKycFeedBack($full_name,$comment,$kyc_status));

        return redirect()->back()->with('flash_info','User KYC has been '.kyc_status($request->kyc_status));

    }

    public function edit_kyc($id){
        $data['page_title'] = "Edit KYC Type";

        $data['kyc'] = Kyc_Type::findOrFail($id);

        return view('admin.edit-kyc',$data);
    }

    public function edit_kyc_type(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>'required|max:20|min:3'
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('flash_error',$validator->errors()->first())->withInput();
        }

        $kyc = Kyc_Type::findOrFail($request->id);
        $kyc->name = $request->name;

        if ($kyc->save()){
            return redirect()->back()->with('flash_info','Kyc has been updated successfully');
        }

    }
}

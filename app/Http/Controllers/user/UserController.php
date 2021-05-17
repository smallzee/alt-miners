<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Kyc_type;
use App\Mail\SendSupportMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $data['page_title'] = "Dashboard";

        return view('user.dashboard',$data);
    }

    public function contact_support(){
        $data['page_title'] = "Contact Support";

        return view('user.contact-support',$data);
    }

    public function create_contact_support(Request $request){
        $validator = Validator::make($request->all(),[
            'subject'=>'required',
            'message'=>'required'
        ]);

        if ($validator->fails()){
            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();
        }

        $name = \auth()->user()->full_name;
        $email_address = \auth()->user()->email_address;
        $message = $request->message;
        $subject = $request->subject;

        Mail::to(get_settings('official_email'))->queue( new SendSupportMail($name,$email_address,$message,$subject));

        return redirect()->back()->with('flash_success','Thanks for contacting us, we will get back to you shortly');
    }

    public function change_password(){
        $data['page_title'] = "Change Password";
        return view('user.change-password',$data);
    }

    public function update_change_password(Request $request){
        $validator = Validator::make($request->all(),[
            'old_password'=>'required|min:3',
            'new_password'=>'required|min:3',
            'confirm_new_password'=>'required|min:3'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();
        }

        $old_password = Hash::make($request->old_password);


        if ($old_password != \auth()->user()->password ){
            return redirect()->back()->with('flash_error','Invalid old password entered, please check and try again')->withInput();
        }

        if ($request->confirm_new_password != $request->new_password){
            return redirect()->back()->with('flash_error','Confirm new password did not match new password')->withInput();
        }

        $user = User::findOrFail(\auth()->user()->id);
        $user->password = Hash::make($request->new_password);

        if ($user->save()){
            return redirect()->back()->with('flash_success','Your password has been changed successfully');
        }
    }

    public function my_orders(){
        $data['page_title'] = "My Orders";

        return view('user.my-orders',$data);
    }

    public function profile(){
        $data['page_title'] = "Update Profile";
        return view('user.profile',$data);
    }

    public function update_profile(Request $request){
        $validator = Validator::make($request->all(),[
            'full_name'=>'required|min:3|max:150',
            'phone_number'=>'required|numeric|min:10',
            'address'=>'required',
            'city'=>'required',
            'country'=>'required|numeric',
            'wallet_address'=>'required'
        ]);


        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();
        }

       
        $user = User::find(auth()->user()->id);
        $user->full_name = $request->full_name;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country_id = $request->country;
        $user->wallet_address = $request->wallet_address;

        if ($user->save()){
            return redirect()->back()->with('flash_success','Your profile has been updated successfully');
        }
    }

    public function logout()
    {
        Auth::guard()->logout();
        return redirect('account/login')->with('flash_info','You have logged out successfully');
    }

}

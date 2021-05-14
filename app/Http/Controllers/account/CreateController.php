<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use App\Mail\SendWelcomeMail;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data['page_title'] = "Create Account";

        if (Auth::user()){
            return redirect()->intended('user/dashboard');
        }else{
            return view('account.create',$data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(),[
            'email_address'=>'required|unique:users|max:150|min:8',
            'full_name'=>'required|max:150|min:3',
            'country'=>'required|numeric',
            'password'=>'required|min:3'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }


        $user = new User();
        $user->email_address = $request->email_address;
        $user->full_name = $request->full_name;
        $user->password = Hash::make($request->password);
        $user->country_id = $request->country;

        if ($user->save()){
            $user_id = $user->id;

            $w = new Wallet();
            $w->user_id = $user_id;
            $w->save();

            Mail::to($request->email_address)->queue(new SendWelcomeMail($request->full_name,$request->password,$request->email_address,get_country($request->country,'country_name')));

            return redirect()->back()->with('flash_info','Account created successfully');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

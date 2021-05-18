<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mining;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MiningController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mining(){
        $data['page_title'] = "All Mining";
        $data['mining'] = Mining::orderBy('id','desc')->get();
        return view('admin.mining',$data);
    }

    public function view_mining(Mining $mining){
        $data['page_title'] = "Mining Transaction";

        $data['mining'] = $mining;

        return view('admin.view-mining',$data);
    }

    public function delete_mining(Request $request){
        $validator = Validator::make($request->all(),[
            'id'=>'required'
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('flash_error',$validator->errors()->first())->withInput();
        }

        $mining_id = $request->id;

        for ($i =0; $i < count($mining_id); $i++){
            $mining = Mining::findOrFail($mining_id[$i]);
            $mining->delete();
        }

        return redirect()->back()->with('flash_info','Mining has been deleted successfully');
    }
}

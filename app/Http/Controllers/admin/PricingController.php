<?php

namespace App\Http\Controllers\admin;

use App\Pricing;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PricingController extends Controller
{
    //

    public function cloud_pricing(){
        $data['page_title'] = "Cloud Pricing";

        $data['cloud_pricing'] = Pricing::where('type',1)->orderBy('id','desc')->get();

        return view('admin.cloud-pricing',$data);
    }

    public function add_pricing(){
        $data['page_title'] = "Add Pricing";
        return view('admin.add-pricing',$data);
    }

    public function create_new_cloud_pricing(Request $request){

        $validator = Validator::make($request->all(),[
            'name'=>'required|unique:cloud_pricing|max:50|min:3',
            'description'=>'required',
            'daily_return'=>'required|numeric',
            'duration'=>'required|numeric',
            'minimum_amount'=>'required|numeric',
            'maximum_amount'=>'required|numeric',
            'pricing_type'=>'required|numeric'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        $pricing = new Pricing();
        $pricing->name = $request->name;
        $pricing->description = $request->description;
        $pricing->daily_return = $request->daily_return;
        $pricing->duration = $request->duration;
        $pricing->min_amount = $request->minimum_amount;
        $pricing->max_amount = $request->maximum_amount;
        $pricing->type = $request->pricing_type;

        if ($pricing->save()){
            return redirect()->back()->with('flash_info','Pricing has been added successful');
        }
    }
}

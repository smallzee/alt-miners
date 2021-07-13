<?php

namespace App\Http\Controllers;

use App\Mining;
use App\Pricing;
use App\Wallet;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //

    public function index(){
        $data['page_title'] = "";
        return view('index',$data);
    }

    public function about(){
        $data['page_title'] = "About Us";
        return view('about',$data);
    }

    public function gallery(){
        $data['page_title'] = "Gallery";
        return view('gallery',$data);
    }

    public function faq(){
        $data['page_title'] = "FAQ";
        return view('faq',$data);
    }

    public function contact(){
        $data['page_title'] = "Contact";

        return view('contact',$data);
    }

    public function cloud_pricing(){
        $data['page_title'] = "Cloud Pricing";
        $data['cloud_pricing'] = Pricing::where('pricing_type',1)->orderBy('min_amount')->get();

        return view('cloud-pricing',$data);
    }

    public function doge_pricing(){
        $data['page_title'] = "Doge Pricing";
        $data['doge_pricing'] = Pricing::where('pricing_type',2)->orderBy('min_amount')->get();

        return view('doge-pricing',$data);
    }

    public function webhook_daily_profit(){


        $mining = Mining::where('is_active',1)->get();

        foreach ($mining as $value){

            $mine = Mining::find($value->id);
            $profit = $value->amount / 100 * $value->daily_return_percentage;
            $mine->daily_profit = $mine->daily_profit + $profit;
            $mine->save();

            if (time() >= $value->duration){
                $mine->is_active = 0;
                $mine->save();

                $mine->user->wallet->balance = $mine->user->wallet->balance + $value->daily_profit + $value->amount;
                $mine->user->wallet->save();
            }

        }

    }
}

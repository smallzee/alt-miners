<?php

namespace App\Http\Controllers;

use App\Pricing;
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
}

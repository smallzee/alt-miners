<?php

namespace App\Http\Controllers;

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
}

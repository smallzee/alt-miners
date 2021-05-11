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
}

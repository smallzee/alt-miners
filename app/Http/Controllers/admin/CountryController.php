<?php

namespace App\Http\Controllers\admin;

use App\Countries;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('admin');
    }


    public function country(){
        $data['page_title'] = "All Countries";
        $data['all_country'] = Countries::orderBy('country_name')->get();

        return view('admin.country',$data);
    }
}

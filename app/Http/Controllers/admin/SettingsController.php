<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function settings(){
        $data['page_title'] = "Settings";


        $all_settings = Settings::distinct()->get(array('id','settings_type','settings_descr','settings_key','settings_value'));

        $all_settings_array = array();
        $old_key = "";

        foreach ($all_settings as $all_setting){
            $old_key = $all_setting['settings_type'];

            $all_settings_array[$old_key][] = array(
                'id'=>$all_setting['id'],
                'key' => $all_setting['settings_key'],
                'value' => $all_setting['settings_value'],
                'descr' => $all_setting['settings_descr']
            );
        }

        $data['all_key'] = array_keys($all_settings_array);
        $data['all_settings_array'] = $all_settings_array;


        return view('admin.settings', $data);
    }

    public function update_settings(Request $request){

        $all_settings_data = $request->except('_token');

        foreach ($all_settings_data as $key => $value){
            $settings = Settings::find($key);
            $settings->settings_value = $value;
            $settings->save();
        }

        return redirect()->back()->with('flash_info','Settings has been updated successfully')->withInput();
    }

}

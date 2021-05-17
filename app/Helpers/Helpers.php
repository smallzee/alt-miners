<?php

define( 'TIMEBEFORE_NOW','Just now' );
define( 'TIMEBEFORE_MINUTE','{num} minute ago' );
define( 'TIMEBEFORE_MINUTES','{num} minutes ago' );
define( 'TIMEBEFORE_HOUR', '{num} hour ago' );
define( 'TIMEBEFORE_HOURS', '{num} hours ago' );
define( 'TIMEBEFORE_YESTERDAY', 'yesterday' );
define( 'TIMEBEFORE_FORMAT',  '%e %b' );
define( 'TIMEBEFORE_FORMAT_YEAR', '%e %b, %Y' );

define( 'TIMEBEFORE_DAYS',    '{num} days ago' );
define( 'TIMEBEFORE_WEEK',    '{num} week ago' );
define( 'TIMEBEFORE_WEEKS',   '{num} weeks ago' );
define( 'TIMEBEFORE_MONTH',   '{num} month ago' );
define( 'TIMEBEFORE_MONTHS',  '{num} months ago' );

date_default_timezone_set("Africa/Lagos");

function time_ago($time){
    $out    = ''; // what we will print out
    $now    = time(); // current time
    $diff   = $now - $time; // difference between the current and the provided dates

    if( $diff < 60 ) // it happened now
        return TIMEBEFORE_NOW;

    elseif( $diff < 3600 ) // it happened X minutes ago
        return str_replace( '{num}', ( $out = round( $diff / 60 ) ), $out == 1 ? TIMEBEFORE_MINUTE : TIMEBEFORE_MINUTES );

    elseif( $diff < 3600 * 24 ) // it happened X hours ago
        return str_replace( '{num}', ( $out = round( $diff / 3600 ) ), $out == 1 ? TIMEBEFORE_HOUR : TIMEBEFORE_HOURS );

    elseif( $diff < 3600 * 24 * 2 ) // it happened yesterday
        return TIMEBEFORE_YESTERDAY;

    elseif( $diff < 3600 * 24 * 7 )
        return str_replace( '{num}', round( $diff / ( 3600 * 24 ) ), TIMEBEFORE_DAYS );

    elseif( $diff < 3600 * 24 * 7 * 4 )
        return str_replace( '{num}', ( $out = round( $diff / ( 3600 * 24 * 7 ) ) ), $out == 1 ? TIMEBEFORE_WEEK : TIMEBEFORE_WEEKS );

    elseif( $diff < 3600 * 24 * 7 * 4 * 12 )
        return str_replace( '{num}', ( $out = round( $diff / ( 3600 * 24 * 7 * 4 ) ) ), $out == 1 ? TIMEBEFORE_MONTH : TIMEBEFORE_MONTHS );


    else // falling back on a usual date format as it happened later than yesterday
        return strftime( date( 'Y', $time ) == date( 'Y' ) ? TIMEBEFORE_FORMAT : TIMEBEFORE_FORMAT_YEAR, $time );
}


function get_settings($setting_key){
    $setting_data = \App\Settings::where("settings_key",$setting_key)->first();
    return $setting_data->settings_value;
}

function page_title($page_title = ""){
    if ($page_title == ""){
        return get_settings('web_title');
    }else{
        return $page_title.' - '.get_settings('web_title');
    }
}

function image_url($src){
    return url('assets/images/'.$src);
}

function get_all_countries(){
    $data = \App\Countries::orderBy('country_name')->get();
    return $data;
}

function get_country($id,$value){
    $data = \App\Countries::where('id',$id)->first();
    return $data[$value];
}

function role($id){
    $data = \App\Role::where("id",$id)->first();
    return $data['name'];
}

function status($status){
    if ($status == 1){
        return "Active";
    }else{
        return "In-active";
    }
}

function get_kyc_type($id){
    $data = \App\Kyc_Type::where('id',$id)->first();
    return  $data['name'];
}

function kyc_status($status){
    if ($status == 1){
        return "Processing";
    }elseif ($status == 2){
        return "Rejected";
    }elseif ($status == 3){
        return "Approved";
    }
}

function get_all_kyc_user($kyc_status){
    $data = \App\User::where('kyc_status',$kyc_status)->count();
    return $data;
}

function get_btc_live_amount($amount){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://blockchain.info/tobtc?currency=USD&value=".$amount,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            "accept: application/json",
            "cache-control: no-cache"
        ],
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    return $response;
}

function balance($value,$is_user = FALSE){
    if ($is_user ==  FALSE){
        $user_id = auth()->user()->id;
    }else{
        $user_id = $is_user;
    }

    $data = \App\Wallet::where('user_id',$user_id)->first();
    return $data[$value];
}

function user_details($id,$value){
    $data = \App\User::where('id',$id)->first();
    return $data[$value];
}

function get_plan($id,$value){
    $data = \App\Pricing::where('id',$id)->first();
    return $data[$value];
}
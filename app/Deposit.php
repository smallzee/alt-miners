<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    //
    protected $table = "deposit";


    protected $guarded = [];

    function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}

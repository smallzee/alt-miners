<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mining extends Model
{
    //

    protected $table = "mining";

    function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}

<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function deposits(){
        return $this->hasMany(Deposit::class,'user_id','id');
    }


    function referrals(){
        return $this->hasMany(User::class,'referral_user_id','id')->orderBy('id','DESC');
    }

    function withdrawals(){
        return $this->hasMany(Withdrawal::class,'user_id','id')->orderBy('id','DESC');
    }

    function mining(){
        return $this->hasMany(Mining::class,'user_id','id')->orderBy('id','desc');
    }


    function wallet(){
        return $this->hasOne(Wallet::class,'user_id','id');
    }

}

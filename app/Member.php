<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use Notifiable;
    //
    protected $fillable = ['level','username','password','credit','name','phone','status','latest_use','latest_login','latest_ip','online','useradd','helper','useradddetail'];

    // protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function helperset()
    {
        return $this->hasOne(Helperset::class, 'member_id', 'id');
    }

    public function playset()
    {
        return $this->hasOne(Playset::class, 'member_id', 'id');
    }
    public function ratepaygov()
    {
        return $this->hasOne(Ratepaygov::class, 'member_id', 'id');
    }
    public function ratepay()
    {
        return $this->hasOne(Ratepay::class, 'member_id', 'id');
    }
    public function openclose()
    {
        return $this->hasOne(Opencloselot::class, 'member_id','id');
    }
    public function keep()
    {
        return $this->hasOne(Keep::class, 'member_id','id');
    }
    public function userbet()
    {
        return $this->belongTo(Userbet::class, 'id','member_id');
    }

    public function userbetmem()
    {
        return $this->hasOne(Userbet::class, 'member_id','id');
    }

}

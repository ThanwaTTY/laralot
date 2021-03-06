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

    public function limite_pay()
    {
        return $this->hasOne(Userbet::class, 'member_id','id');
    }

    public function limite()
    {
        return $this->hasOne(Userbet::class, 'member_id','id');
    }

    public function getParents()
    {
        return static::whereIn('id', explode(' ',$this->useradddetail) )
                        ->orderBy('level','desc')
                        ->get();        
    }

    public function limit()
    {
        return $this->hasOne(Limite::class, 'member_id');
    }
    
    public function getLimit()
    {
        return Limite::where('member_id',$this->id)->latest()->first();
    }

    public function getLatepaygov()
    {
        return Ratepaygov::where('member_id', $this->id)->first();
    }

    public function getKeep()
    {
        return Keep::where('member_id', $this->id)->first();
    }

    public function bet_result()
    {
        return $this->belongTo(Bet_result::class, 'id','member_id');
    }

    public function userbet_result()
    {
        return $this->hasOne(Bet_result::class, 'member_id','id');
    }
}

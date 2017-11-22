<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use Notifiable;
    //
    protected $fillable = ['level','username','password','credit','name','phone','status','latest_use','latest_login','latest_ip','online','useradd','helper'];

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
        return $this->hasOne(Helperset::class, 'helper_id', 'id');
    }

}

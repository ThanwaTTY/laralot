<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userbet extends Model
{
    protected $fillable = [
        'member_id', 'lotto_id', 'bet_num','cal_num','type','amount','useradd'
    ];

    public function member()
    {
        return  $this->hasOne(Member::class, 'id', 'member_id');
    }

    public function members()
    {
        return $this->belongTo(Member::class, 'member_id','id');
    }
}

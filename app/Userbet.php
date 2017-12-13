<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userbet extends Model
{
    protected $fillable = [
        'member_id', 'lotto_id', 'bet_num','cal_num','type','amount'
    ];

    public function member()
    {
        return  $this->hasOne(Member::class, 'id', 'member_id');
    }
}

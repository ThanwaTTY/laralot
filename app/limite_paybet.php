<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Limite_paybet extends Model
{
    protected $fillable = [
        'member_id', 'lotto_id', 'bet_num','type','limite_amount'
    ];

    public function members()
    {
        return $this->belongTo(Member::class, 'member_id','id');
    }
}

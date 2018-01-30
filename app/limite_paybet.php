<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class limite_paybet extends Model
{
    protected $fillable = [
        'member_id', 'lotto_id', 'bet_num','type','limite_amount'
    ];
}

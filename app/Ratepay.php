<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratepay extends Model
{
    protected $fillable = ['ratepay_id','lot_id','payout_1','com_1','payout_2','com_2','payout_3','com_3','payout_4','com_4','payout_5','com_5','payout_6','com_6','payout_7','com_7','payout_8','com_8'];

    public function member()
    {
        return $this->belongTo(Member::class, 'ratepay_id','id');
    }
}
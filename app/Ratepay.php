<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratepay extends Model
{
    protected $fillable = ['ratepay_id','lotgov_id','payoutg_1','comg_1','payoutg_2','comg_2','payoutg_3','comg_3','payoutg_4','comg_4','payoutg_5','comg_5','payoutg_6','comg_6','payoutg_7','comg_7','payoutg_8','comg_8',
                                        'lot_id','payout_1','com_1','payout_2','com_2','payout_3','com_3','payout_4','com_4','payout_5','com_5','payout_6','com_6','payout_7','com_7','payout_8','com_8'];

    public function member()
    {
        return $this->belongTo(Member::class, 'ratepay_id','id');
    }
}
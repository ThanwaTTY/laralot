<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratepaygov extends Model
{
    protected $fillable =['member_id','lotgov_id','payoutg_1','comg_1','payoutg_2','comg_2','payoutg_3','comg_3','payoutg_4','comg_4','payoutg_5','comg_5','payoutg_6','comg_6','payoutg_7','comg_7','payoutg_8','comg_8'];

    public function member()
    {
        return $this->belongTo(Member::class, 'member_id','id');
    }
}

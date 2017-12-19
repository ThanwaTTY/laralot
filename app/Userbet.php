<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userbet extends Model
{
    protected $fillable = [
        'member_id', 'ticket_id', 'latepay','date_time','pay','com_mem','agent_amount'
        ,'agent_keep','agent_com','company_amount','company_com','company_keep'
        ,'note','useradd','bet_num','cal_num','type','amount'
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

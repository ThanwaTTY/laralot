<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userbet extends Model
{
    protected $fillable = [
        'member_id', 'ticket_id', 'latepay','date_time','pay'
        ,'note','useradd','bet_num','cal_num','type',
        
        'amount_1','keep_1','com_1',
        'amount_2','keep_2','com_2',
        'amount_3','keep_3','com_3',
        'amount_4','keep_4','com_4',
        'amount_5','keep_5','com_5',
        'amount_6','keep_6','com_6',
        'amount_7','keep_7','com_7',
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

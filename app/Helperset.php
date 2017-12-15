<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helperset extends Model
{
    protected $fillable = ['listplay','member','listkeep','winlose','transfer','manage','cancelplay','member_id'];


        public function member()
        {
            return $this->belongTo(Member::class, 'member_id', 'id');
        }


}


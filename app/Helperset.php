<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helperset extends Model
{
    protected $fillable = ['listplay','member','listkeep','winlose','transfer','manage','cancelplay','helper_id'];


public function member()
{
    return $this->belongTo(Member::class, 'helper_id', 'id');
}


}


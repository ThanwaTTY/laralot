<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opencloselot extends Model
{
    protected $fillable = ['member_id','govlot','tkslot','setlot','loaslot','malalot','setabroad','vnlot','typebet','lotgovuse','lotgov3','lotuse','lot3'];

    public function member()
    {
        return $this->belongTo(Member::class, 'member_id','id');
    }
}

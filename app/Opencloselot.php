<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opencloselot extends Model
{
    protected $fillable = ['openclose_id','govlot','tkslot','setlot','loaslot','malalot','setabroad','vnlot','typebet','lotgovuse','lotgov3','lotuse','lot3'];

    public function member()
    {
        return $this->belongTo(Member::class, 'openclose_id','id');
    }
}

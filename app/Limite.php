<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Limite extends Model
{
    protected $fillable = [
        'member_id', 'lotto_id','top3','bottom3','tod3','top2','bottom2','tod2','top1','bottom1'
    ];

}

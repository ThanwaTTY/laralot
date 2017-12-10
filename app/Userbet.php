<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userbet extends Model
{
     protected $fillable = [
        'userbet_id', 'num', 'top','bottom','tod'
    ];

}

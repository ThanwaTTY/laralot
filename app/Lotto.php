<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lotto extends Model
{
    protected $fillable = ['name','day','type','day_on','day_off'];

}

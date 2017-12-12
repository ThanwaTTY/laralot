<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keep extends Model
{
    protected $fillable = [
        'keep_id', 'keep', 'keepset','keepover'
    ];

}

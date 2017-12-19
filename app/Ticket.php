<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'member_id', 'lotto_id', 'balance'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keep extends Model
{
    protected $fillable = [
        'member_id', 'keep', 'keepset','keepover'
    ];

    public function member()
    {
        return $this->belongTo(Member::class, 'member_id', 'id');
    }

}

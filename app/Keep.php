<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keep extends Model
{
    protected $fillable = [
        'member_id', 'keep', 'keepset','keepset1','keepset2','keepset3','keepset4','keepset5','keepset6','keepover'
    ];

    public function member()
    {
        return $this->belongTo(Member::class, 'member_id', 'id');
    }

}

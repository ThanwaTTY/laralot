<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playset extends Model
{
       protected $fillable = ['member_id','min_1','max_1','max_per_num1',
                                          'min_2','max_2','max_per_num2',
                                          'min_3','max_3','max_per_num3',
                                          'min_4','max_4','max_per_num4',
                                          'min_5','max_5','max_per_num5',
                                          'min_6','max_6','max_per_num6',
                                          'min_7','max_7','max_per_num7',
                                          'min_8','max_8','max_per_num8'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{

    protected $guarded = [];

    public function bet_details()
    {
        return $this->hasMany(BetDetail::class);
    }

    public static function placeBet($lotto_id, $data)
    {
        $bet = static::create([
            'lotto_id'=>$lotto_id
        ]);

        foreach ($data as $postData) {
            if ($postData['up'] > 0) {
                 $bet->bet_details()->create([
                    'number' => $postData['number'],
                    'type'  => 'up3',
                    'amount'   => $postData['up']
                 ]);
            }

            if ($postData['down'] > 0) {
                 $bet->bet_details()->create([
                    'number' => $postData['number'],
                    'type'  => 'down3',
                    'amount'   => $postData['down']
                 ]);
            }

            if ($postData['tode'] > 0) {
                 $bet->bet_details()->create([
                    'number' => $postData['number'],
                    'type'  => 'tode3',
                    'amount'   => $postData['tode']
                 ]);
            }
        }

        return $bet;
    }
}

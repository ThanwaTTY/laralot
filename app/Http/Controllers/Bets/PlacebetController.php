<?php

namespace App\Http\Controllers\Bets;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bet;
use App\BetDetail;

class PlacebetController extends Controller
{
    public function store($lotto_id)
    {
        return Bet::placeBet($lotto_id, request('betData'));
    }
}

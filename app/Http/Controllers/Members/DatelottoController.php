<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lotto;

class DatelottoController extends Controller
{
    public function create()
    {
        return view('datelotto.createdate');
    }

    public function store(Request $request)
    {
       Lotto::create([
           'namelotto' =>request('namelotto'),
           'day_on' =>request('dayon'),
           'day_off' => request('dayoff')
       ]);
    }
}

<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lotto;
use Carbon\Carbon;

class DatelottoController extends Controller
{
    public function create()
    {
        return view('datelotto.createdate');
    }

    public function store(Request $request)
    {

        //dd($request->all());
        $dt = Carbon::now();
        $datenow = $dt->format('Y-m-d h:i:s');  

        $lotto = Lotto::create([
            'name' => request('name'),
            'type' => '1',
            'day' => $datenow,
            'day_on' => request('day_on'),
            'day_off' => request('day_off')
        ]);
        return redirect('/datelotto/create');
    }
}

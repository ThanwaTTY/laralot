<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userbet;

class UserbetController extends Controller
{
    public function index()
    {
        return view('play.bet.index');
    }

    public function store(Request $request)
    {
        $id = auth()->user()->id;
        $data_request = $request->all();
        $nums = $request->num;
        foreach ($nums as $key => $num) {
             if($num){
                 $add[$key]=$num;
                $userbets = Userbet::create([
                    'userbet_id' => $id,
                    'num' => $request->num[$key],
                    'top' => $request->top[$key],
                    'bottom' => $request->bottom[$key],
                    'tod' => $request->tod[$key]
                ]);
            }
        }

        return response()->json(['userbet_id'=>$id, 'data_request'=>$data_request, 'add'=>$add, 'userbets'=>$userbets]);
    }
}

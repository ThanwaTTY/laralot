<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Limite_paybet;
use App\Lotto;
use Carbon\Carbon;

class LimiteController extends Controller
{
   public function index(){
    return view('listlottery.settingof.index');
   }

   public function store(Request $request){

    $id = auth()->user()->id;
    $dt = Carbon::now();
    $datenow = $dt->format('Y-m-d h:i:s');  
    $data_request = $request->all();
    $nums = $request->num;
    $top = $request->top;
    $bottom = $request->bottom;
    $lottos = Lotto::where('day_on','<=',$datenow)->where('day_off','>=',$datenow)->first();
   
    $type = $this->checktype($nums);

        if($top){
            Limite_paybet::create([
                'member_id' => $id,
                'lotto_id' => $lottos->id,
                'bet_num' => $nums,
                'type' => "top".$type,
                'limite_amount' => $top,
            ]);
        }
        if($bottom){
            Limite_paybet::create([
                'member_id' => $id,
                'lotto_id' => $lottos->id,
                'bet_num' => $nums,
                'type' => "bottom".$type,
                'limite_amount' => $bottom,
            ]);
        }

    return response()->json([
        'nums' => $nums,
        'type' => $type,
        'top' => $top,
        'bottom' => $bottom,
        'data_request'=>$data_request,
        ]);
   }

   protected function checktype($nums){
    $datacheck = strlen($nums);
    return $datacheck;
   }
   
}

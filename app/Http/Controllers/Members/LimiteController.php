<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Limite_paybet;
use App\Limite;
use App\Lotto;
use Carbon\Carbon;

class LimiteController extends Controller
{
   public function index(){
     $id = auth()->user()->id;
     $limiteShow = Limite::where('member_id', $id)->latest()->first();
     echo auth()->user()->username."<BR>".$id;
    //  dd($limiteShow);
    return view('listlottery.settingof.index', compact('limiteShow'));
   }

   public function store(Request $request){

    $id = auth()->user()->id;
    $dt = Carbon::now();
    $datenow = $dt->format('Y-m-d h:i:s');  
    $data_request = $request->all();
    $nums = $request->num;
    $top3 = $request->top3;
    $bottom3 = $request->bottom3;
    $tod3 = $request->tod3;
    $top2 = $request->top2;
    $bottom2 = $request->bottom2;
    $tod2 = $request->tod2;
    $top1 = $request->top1;
    $bottom1 = $request->bottom1;

    $lottos = Lotto::where('day_on','<=',$datenow)->where('day_off','>=',$datenow)->first();
   
    $type = $this->checktype($nums);

            
        if($top3){
            Limite_paybet::create([
                'member_id' => $id,
                'lotto_id' => $lottos->id,
                'bet_num' => $nums,
                'type' => "top3",
                'limite_amount' => $top3,
            ]);
        }
        if($bottom3){
            Limite_paybet::create([
                'member_id' => $id,
                'lotto_id' => $lottos->id,
                'bet_num' => $nums,
                'type' => "bottom3",
                'limite_amount' => $bottom3,
            ]);
        }
        if($tod3){
            Limite_paybet::create([
                'member_id' => $id,
                'lotto_id' => $lottos->id,
                'bet_num' => $nums,
                'type' => "tod3",
                'limite_amount' => $tod3,
            ]);
        }
        if($top2){
            Limite_paybet::create([
                'member_id' => $id,
                'lotto_id' => $lottos->id,
                'bet_num' => $nums,
                'type' => "top2",
                'limite_amount' => $top2,
            ]);
        }
        if($bottom2){
            Limite_paybet::create([
                'member_id' => $id,
                'lotto_id' => $lottos->id,
                'bet_num' => $nums,
                'type' => "bottom2",
                'limite_amount' => $bottom2,
            ]);
        }
        if($tod2){
            Limite_paybet::create([
                'member_id' => $id,
                'lotto_id' => $lottos->id,
                'bet_num' => $nums,
                'type' => "tod2",
                'limite_amount' => $tod2,
            ]);
        }
        if($top1){
            Limite_paybet::create([
                'member_id' => $id,
                'lotto_id' => $lottos->id,
                'bet_num' => $nums,
                'type' => "top1",
                'limite_amount' => $top1,
            ]);
        }
        if($bottom1){
            Limite_paybet::create([
                'member_id' => $id,
                'lotto_id' => $lottos->id,
                'bet_num' => $nums,
                'type' => "bottom1",
                'limite_amount' => $bottom1,
            ]);
        }

    return response()->json([
        'nums' => $nums,
        'type' => $type,
        'top3' => $top3,
        'bottom3' => $bottom3,
        'top2' => $top2,
        'bottom2' => $bottom2,
        'data_request'=>$data_request,
        ]);
   }

   protected function checktype($nums){
    $datacheck = strlen($nums);
    return $datacheck;
   }
   
   public function limite(Request $request){

    $id = auth()->user()->id;
    $dt = Carbon::now();
    $datenow = $dt->format('Y-m-d h:i:s');  
    $data_request = $request->all();

    $lottos = Lotto::where('day_on','<=',$datenow)->where('day_off','>=',$datenow)->first();

    Limite::create([
        'member_id' => $id,
        'lotto_id' => $lottos->id,
        'top3' => $request->limitetop3,
        'bottom3' => $request->limitebottom3,
        'tod3' => $request->limitetod3,
        'top2' => $request->limitetop2,
        'bottom2' => $request->limitebottom2,
        'tod2' => $request->limitetod2,
        'top1' => $request->limitetop1,
        'bottom1' => $request->limitebottom1,
    ]);

    return response()->json([
        'data_request'=>$data_request,
        ]);

   }
}

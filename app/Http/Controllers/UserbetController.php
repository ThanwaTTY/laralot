<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userbet;
use App\Member;
use App\Lotto;

class UserbetController extends Controller
{
    public function index()
    {
       
        return view('play.bet.index');
    }

    public function store(Request $request)
    {
        $id = auth()->user()->id;
        $useradd = auth()->user()->useradd;
       // $useradds = Member::where('useradd', $useradd)->first();
        // dd($useradds);
       
        $data_request = $request->all();
        $nums = $request->num;
        foreach ($nums as $key => $num) {
                if($num){
                    $type = $this->checktype($num);
                        if($request->top[$key]){
                            $userbet_top = $this->createTop($id,$request->num,$request->top,$key,$type,$useradd);
                        }

                        if($request->bottom[$key]){
                            $userbet_bottom = $this->createBottom($id,$request->num,$request->bottom,$key,$type,$useradd);
                        }
                        if($request->tod[$key]){
                            $userbet_tod = $this->createTod($id,$request->num,$request->tod,$key,$type,$useradd);
                        }
                    //}
                }
               
        }
       
        //return response()->json(['userbet_id'=>$id, 'data_request'=>$data_request, 'add'=>$add, 'userbets'=>$userbets]);
        return response()->json([
            'data_request'=>$data_request, 
            //'userbet_top'=>$userbet_top, 
            // 'userbet_bottom'=>$userbet_bottom, 
            // 'userbet_tod'=>$userbet_tod,
            'type'=>$request->num[0],
            'type_count'=>$type
            ]);
    }

    protected function checktype($num){
         $datacheck = strlen($num);
         return $datacheck;
    }

    protected function createTop($id,$num,$top,$key,$type,$useradd){
            $userbets = Userbet::create([
                'member_id' => $id,
                'useradd' => $useradd,
                'bet_num' => $num[$key],
                'type' => "top".$type,
                'amount' => $top[$key]
            ]); 
        return $userbets;
    }
    
    protected function createBottom($id,$num,$bottom,$key,$type,$useradd){
            $userbets = Userbet::create([
                'member_id' => $id,
                'useradd' => $useradd,
                'bet_num' => $num[$key],
                'type' => "bottom".$type,
                'amount' => $bottom[$key]
            ]); 
        return $userbets;
    }

    protected function createTod($id,$num,$tod,$key,$type,$useradd){
            $userbets = Userbet::create([
                'member_id' => $id,
                'useradd' => $useradd,
                'bet_num' => $num[$key],
                'type' => "tod".$type,
                'amount' => $tod[$key]
            ]); 
        return $userbets;
    }
}

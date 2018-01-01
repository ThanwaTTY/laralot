<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Userbet;
use App\Member;
use App\Ratepaygov;
use App\Keep;
use App\Ticket;
use App\Lotto;


class BetController extends Controller
{
    public function listlotpoint()
    {
        //  response()->json([request('id')=>$id]);
        $id = request('id');
        //return $id;
        // dd($id);
        echo "<li>".$id."</li>";
        return view('listlottery.listlotpoint.index');
    }

    public function listlotpoint2()
    {
        $loginId = auth()->user()->id;
        $loginUseradd = auth()->user()->useradd;
        $id = request('id');
        $lotto = Lotto::find($id);
        $tickets = Ticket::where('lotto_id',$id)->get();
        $buytop3 = 0;
        $buytop2 = 0;
        $buytop1 = 0;
        $buybottom1 = 0;
        $buybottom2 = 0;
        $buybottom3 = 0;
        $buytod2 = 0;
        $buytod3 = 0;
        /////////////////////////////////////////////////////////////////////////////
        $comtop3 = 0;
        $combottom3 = 0;
        $comtod3 = 0;
        $comtop2 = 0;
        $combottom2 = 0;
        $comtod2 = 0;
        $comtop1 = 0;
        $combottom1 = 0;
        ////////////////////////////////////////////////////////////////////////////
        $taketop3 = 0;
        $takebottom3 = 0;
        $taketod3 = 0;
        $taketop2 = 0;
        $takebottom2 = 0;
        $taketod2 = 0;
        $taketop1 = 0;
        $takebottom1 = 0;
        $levellogin = Member::where('id',$loginId)->first();
       
        

        foreach ($tickets as $key => $ticket) {
            
            $usebets[$key] = Userbet::where('ticket_id',$ticket->id)->get();
            foreach ($usebets[$key] as $key => $usebet) {
                if($levellogin->level == 6){
                    if($usebet->type=="top3"){
                        $buytop3 += $usebet->amount_6;
                        $comtop3 += number_format(($usebet->amount_6*($usebet->com_6/100)),2);     
                        $taketop3 =  $buytop3-$comtop3;
                    }if($usebet->type=="top2"){
                        $buytop2 += $usebet->amount_6;
                        $comtop2 += number_format(($usebet->amount_6*($usebet->com_6/100)),2);
                        $taketop2 =  $buytop2-$comtop2;
                    }if($usebet->type=="top1"){
                        $buytop1 += $usebet->amount_6;
                        $comtop1 += number_format(($usebet->amount_6*($usebet->com_6/100)),2);
                        $taketop1 =  $buytop1-$comtop1;
                    }if($usebet->type=="bottom3"){
                        $buybottom3 += $usebet->amount_6;
                        $combottom3 += number_format(($usebet->amount_6*($usebet->com_6/100)),2);
                        $takebottom3 =  $buybottom3-$combottom3;
                    }if($usebet->type=="bottom2"){
                        $buybottom2 += $usebet->amount_6;
                        $combottom2 += number_format(($usebet->amount_6*($usebet->com_6/100)),2);
                        $takebottom2 =  $buybottom2-$combottom2;
                    }if($usebet->type=="bottom1"){
                        $buybottom1 += $usebet->amount_6;
                        $combottom1 += number_format(($usebet->amount_6*($usebet->com_6/100)),2);
                        $takebottom1 =  $buybottom1-$combottom1;
                    }if($usebet->type=="tod2"){
                        $buytod2 += $usebet->amount_6;
                        $comtod2 += number_format(($usebet->amount_6*($usebet->com_6/100)),2);
                        $taketod2 =  $buytod2-$comtod2;
                    }if($usebet->type=="tod3"){
                        $buytod3 += $usebet->amount_6;
                        $comtod3 += number_format(($usebet->amount_6*($usebet->com_6/100)),2);
                        $taketod3 =  $buytod3-$comtod3;
                    }  
                }elseif($levellogin->level == 5){
                    if($usebet->type=="top3"){
                        $buytop3 += $usebet->amount_5;
                        $comtop3 += number_format(($usebet->amount_5*($usebet->com_5/100)),2); 
                        $taketop3 =  $buytop3-$comtop3;     
                    }if($usebet->type=="top2"){
                        $buytop2 += $usebet->amount_5;
                        $comtop2 += number_format(($usebet->amount_5*($usebet->com_5/100)),2);
                        $taketop2 =  $buytop2-$comtop2;
                    }if($usebet->type=="top1"){
                        $buytop1 += $usebet->amount_5;
                        $comtop1 += number_format(($usebet->amount_5*($usebet->com_5/100)),2);
                        $taketop1 =  $buytop1-$comtop1;
                    }if($usebet->type=="bottom3"){
                        $buybottom3 += $usebet->amount_5;
                        $combottom3 += number_format(($usebet->amount_5*($usebet->com_5/100)),2);
                        $takebottom3 =  $buybottom3-$combottom3;
                    }if($usebet->type=="bottom2"){
                        $buybottom2 += $usebet->amount_5;
                        $combottom2 += number_format(($usebet->amount_5*($usebet->com_5/100)),2);
                        $takebottom2 =  $buybottom2-$combottom2;
                    }if($usebet->type=="bottom1"){
                        $buybottom1 += $usebet->amount_5;
                        $combottom1 += number_format(($usebet->amount_5*($usebet->com_5/100)),2);
                        $takebottom1 =  $buybottom1-$combottom1;
                    }if($usebet->type=="tod2"){
                        $buytod2 += $usebet->amount_5;
                        $comtod2 += number_format(($usebet->amount_5*($usebet->com_5/100)),2);
                        $taketod2 =  $buytod2-$comtod2;
                    }if($usebet->type=="tod3"){
                        $buytod3 += $usebet->amount_5;
                        $comtod3 += number_format(($usebet->amount_5*($usebet->com_5/100)),2);
                        $taketod3 =  $buytod3-$comtod3;
                    }  
                }elseif($levellogin->level == 4){
                    if($usebet->type=="top3"){
                        $buytop3 += $usebet->amount_4;
                        $comtop3 += number_format(($usebet->amount_4*($usebet->com_4/100)),2);     
                        $taketop3 =  $buytop3-$comtop3; 
                    }if($usebet->type=="top2"){
                        $buytop2 += $usebet->amount_4;
                        $comtop2 += number_format(($usebet->amount_4*($usebet->com_4/100)),2); 
                        $taketop2 =  $buytop2-$comtop2;
                    }if($usebet->type=="top1"){
                        $buytop1 += $usebet->amount_4;
                        $comtop1 += number_format(($usebet->amount_4*($usebet->com_4/100)),2); 
                        $taketop1 =  $buytop1-$comtop1;
                    }if($usebet->type=="bottom3"){
                        $buybottom3 += $usebet->amount_4;
                        $combottom3 += number_format(($usebet->amount_4*($usebet->com_4/100)),2);
                        $takebottom3 =  $buybottom3-$combottom3; 
                    }if($usebet->type=="bottom2"){
                        $buybottom2 += $usebet->amount_4;
                        $combottom2 += number_format(($usebet->amount_4*($usebet->com_4/100)),2);
                        $takebottom2 =  $buybottom2-$combottom2;  
                    }if($usebet->type=="bottom1"){
                        $buybottom1 += $usebet->amount_4;
                        $combottom1 += number_format(($usebet->amount_4*($usebet->com_4/100)),2); 
                        $takebottom1 =  $buybottom1-$combottom1;  
                    }if($usebet->type=="tod2"){
                        $buytod2 += $usebet->amount_4;
                        $comtod2 += number_format(($usebet->amount_4*($usebet->com_4/100)),2); 
                        $taketod2 =  $buytod2-$comtod2;  
                    }if($usebet->type=="tod3"){
                        $buytod3 += $usebet->amount_4;
                        $comtod3 += number_format(($usebet->amount_4*($usebet->com_4/100)),2); 
                        $taketod3 =  $buytod3-$comtod3; 
                    }  
                }elseif($levellogin->level == 3){
                    if($usebet->type=="top3"){
                        $buytop3 += $usebet->amount_3;
                        $comtop3 += number_format(($usebet->amount_3*($usebet->com_3/100)),2); 
                        $taketop3 =  $buytop3-$comtop3;     
                    }if($usebet->type=="top2"){
                        $buytop2 += $usebet->amount_3;
                        $comtop2 += number_format(($usebet->amount_3*($usebet->com_3/100)),2);
                        $taketop2 =  $buytop2-$comtop2;
                    }if($usebet->type=="top1"){
                        $buytop1 += $usebet->amount_3;
                        $comtop1 += number_format(($usebet->amount_3*($usebet->com_3/100)),2);
                        $taketop1 =  $buytop1-$comtop1;
                    }if($usebet->type=="bottom3"){
                        $buybottom3 += $usebet->amount_3;
                        $combottom3 += number_format(($usebet->amount_3*($usebet->com_3/100)),2);
                        $takebottom3 =  $buybottom3-$combottom3;
                    }if($usebet->type=="bottom2"){
                        $buybottom2 += $usebet->amount_3;
                        $combottom2 += number_format(($usebet->amount_3*($usebet->com_3/100)),2);
                        $takebottom2 =  $buybottom2-$combottom2;
                    }if($usebet->type=="bottom1"){
                        $buybottom1 += $usebet->amount_3;
                        $combottom1 += number_format(($usebet->amount_3*($usebet->com_3/100)),2);
                        $takebottom1 =  $buybottom1-$combottom1;
                    }if($usebet->type=="tod2"){
                        $buytod2 += $usebet->amount_3;
                        $comtod2 += number_format(($usebet->amount_3*($usebet->com_3/100)),2);
                        $taketod2 =  $buytod2-$comtod2;
                    }if($usebet->type=="tod3"){
                        $buytod3 += $usebet->amount_3;
                        $comtod3 += number_format(($usebet->amount_3*($usebet->com_3/100)),2);
                        $taketod3 =  $buytod3-$comtod3;
                    }  
                }elseif($levellogin->level == 2){
                    if($usebet->type=="top3"){
                        $buytop3 += $usebet->amount_2;
                        $comtop3 += number_format(($usebet->amount_2*($usebet->com_2/100)),2);    
                        $taketop3 =  $buytop3-$comtop3;  
                    }if($usebet->type=="top2"){
                        $buytop2 += $usebet->amount_2;
                        $comtop2 += number_format(($usebet->amount_2*($usebet->com_2/100)),2);
                        $taketop2 =  $buytop2-$comtop2;
                    }if($usebet->type=="top1"){
                        $buytop1 += $usebet->amount_2;
                        $comtop1 += number_format(($usebet->amount_2*($usebet->com_2/100)),2);
                        $taketop1 =  $buytop1-$comtop1;
                    }if($usebet->type=="bottom3"){
                        $buybottom3 += $usebet->amount_2;
                        $combottom3 += number_format(($usebet->amount_2*($usebet->com_2/100)),2);
                        $takebottom3 =  $buybottom3-$combottom3;
                    }if($usebet->type=="bottom2"){
                        $buybottom2 += $usebet->amount_2;
                        $combottom2 += number_format(($usebet->amount_2*($usebet->com_2/100)),2);
                        $takebottom2 =  $buybottom2-$combottom2;
                    }if($usebet->type=="bottom1"){
                        $buybottom1 += $usebet->amount_2;
                        $combottom1 += number_format(($usebet->amount_2*($usebet->com_2/100)),2);
                        $takebottom1 =  $buybottom1-$combottom1;
                    }if($usebet->type=="tod2"){
                        $buytod2 += $usebet->amount_2;
                        $comtod2 += number_format(($usebet->amount_2*($usebet->com_2/100)),2);
                        $taketod2 =  $buytod2-$comtod2;
                    }if($usebet->type=="tod3"){
                        $buytod3 += $usebet->amount_2;
                        $comtod3 += number_format(($usebet->amount_2*($usebet->com_2/100)),2);
                        $taketod3 =  $buytod3-$comtod3;
                    }  
                }elseif($levellogin->level == 1){
                    if($usebet->type=="top3"){
                        $buytop3 += $usebet->amount_1;
                        $comtop3 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);  
                        $taketop3 =  $buytop3-$comtop3;    
                    }if($usebet->type=="top2"){
                        $buytop2 += $usebet->amount_1;
                        $comtop2 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                        $taketop2 =  $buytop2-$comtop2;
                    }if($usebet->type=="top1"){
                        $buytop1 += $usebet->amount_1;
                        $comtop1 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                        $taketop1 =  $buytop1-$comtop1;
                    }if($usebet->type=="bottom3"){
                        $buybottom3 += $usebet->amount_1;
                        $combottom3 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                        $takebottom3 =  $buybottom3-$combottom3;
                    }if($usebet->type=="bottom2"){
                        $buybottom2 += $usebet->amount_1;
                        $combottom2 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                        $takebottom2 =  $buybottom2-$combottom2;
                    }if($usebet->type=="bottom1"){
                        $buybottom1 += $usebet->amount_1;
                        $combottom1 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                        $takebottom1 =  $buybottom1-$combottom1;
                    }if($usebet->type=="tod2"){
                        $buytod2 += $usebet->amount_1;
                        $comtod2 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                        $taketod2 =  $buytod2-$comtod2;
                    }if($usebet->type=="tod3"){
                        $buytod3 += $usebet->amount_1;
                        $comtod3 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                        $taketod3 =  $buytod3-$comtod3;
                    }  
                }                          
            }

        }

        return response()->json([
            'lotto'=>$lotto,
            'tickets'=>$tickets,
            'usebets'=>$usebets,
            'buytop3'=>number_format($buytop3,2),
            'buybottom3'=>number_format($buybottom3,2),
            'buytod3' => number_format($buytod3,2),  
            'buytop2'=>number_format($buytop2,2),
            'buybottom2'=>number_format($buybottom2,2),
            'buytod2' => number_format($buytod2,2),
            'buytop1'=>number_format($buytop1,2),
            'buybottom1'=>number_format($buybottom1,2),
            'comtop3' => number_format($comtop3,2),
            'combottom3' =>number_format($combottom3,2),
            'comtod3' =>number_format($comtod3,2),
            'comtop2' =>number_format($comtop2,2),
            'combottom2' =>number_format($combottom2,2),
            'comtod2' =>number_format($comtod2,2),
            'comtop1' =>number_format($comtop1,2),
            'combottom1' =>number_format($combottom1,2),
            'taketop3' =>number_format($taketop3,2),
            'takebottom3' =>number_format($takebottom3,2),
            'taketod3' =>number_format($taketod3,2),
            'taketop2' =>number_format($taketop2,2),
            'takebottom2' =>number_format($taketop2,2),
            'taketod2' =>number_format($taketod2,2),
            'taketop1' =>number_format($taketop1,2),
            'takebottom1' =>number_format($takebottom1,2),
            
            
        ]);
    }




    public function listlotuser()
    {
        $id = auth()->user()->id;
        
        return view('listlottery.listlotuser.index');
    }

    public function listlotuser2()
    {
        $id = auth()->user()->id;
        $idlotto = request("id");
        $lotto = Lotto::find($idlotto);
        $tickets = Ticket::where('lotto_id',$idlotto)->get();

        foreach ($tickets as $key => $ticket) {
            $usebets[$key] = Userbet::where('ticket_id', $ticket->id)
                                        ->with('member')
                                        ->select(DB::Raw('SUM(amount_7) as sum_amount,SUM(amount_7) as sum_amount, member_id'))
                                        ->groupBy('member_id')
                                        ->get();
            $usebet_s[$key] = Userbet::where('ticket_id', $ticket->id)->get();
            // $userbets = Userbet::where('useradd', $id)->with('member')->select(DB::Raw('SUM(amount) as sum_amount, member_id'))
            // ->orderBy('bet_num', 'desc')
            // ->groupBy('member_id')
            // ->get();
            
        }
        $usersum[$key] = 0;
        foreach ($usebet_s as $key => $usebet_com) {
            $comtop3[$key] =0;
            $combottom3[$key] =0;
            $comtod3[$key] =0;
            $comtop2[$key] =0;
            $combottom2[$key] =0;
            $comtod2[$key] =0;
            $comtop1[$key] =0;
            $combottom1[$key] =0;
            $usercom_s[$key] =0;
            foreach ($usebet_com as $loop => $usebet_c) {
                if($usebet_c->type=="top3"){
                    $comtop3[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                }if($usebet_c->type=="bottom3"){
                    $combottom3[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                }if($usebet_c->type=="tod3"){
                    $comtod3[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                }if($usebet_c->type=="top2"){
                    $comtop2[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                }if($usebet_c->type=="bottom2"){
                    $combottom2[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                }if($usebet_c->type=="tod2"){
                    $comtod2[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                }if($usebet_c->type=="top1"){
                    $comtop1[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                }if($usebet_c->type=="bottom1"){
                    $combottom1[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                }
            }

            $usercom_s[$key] = number_format($comtop3[$key]+$combottom3[$key]+$comtod3[$key]+$comtop2[$key]+$combottom2[$key]+$comtod2[$key]+$comtop1[$key]+$combottom1[$key],2);

        }

        $usersum[$key] = $usebet_s[$key]+$usercom_s[$key];

        foreach ($usebets as $key => $usebet) {
            foreach ($usebet as $loop => $value) {
             $member_name[] = $value->member->username;
            }
        }

        
        return response()->json([
            'id'=>$id,
            'lotto'=>$lotto,
            'tickets'=>$tickets,
            'usebets'=>$usebets,
            'member_name'=>$member_name,
            'usebet_s'=>$usebet_s,
            'usercom_s'=>$usercom_s,
            'usersum'=>$usersum
        ]);
    }
   
}

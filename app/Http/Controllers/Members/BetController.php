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
        // echo "<li>".$id."</li>";
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
        ////////////////////////////////////////////////////////////////////////////
        $paytop3 = 0;
        $paybottom3 = 0;
        $paytod3 = 0;
        $paytop2 = 0;
        $paybottom2 = 0;
        $paytod2 = 0;
        $paytop1 = 0;
        $paybottom1 = 0;
        ////////////////////////////////////////////////////////////////////////////
        $sumbuy = 0;
        $sumcom =0;
        $sumtake =0;
        $sumpay =0;
        $levellogin = Member::where('id',$loginId)->first();
       
        

        foreach ($tickets as $key => $ticket) {
            
            $usebets[$key] = Userbet::where('ticket_id',$ticket->id)->get();
            // return response()->json(['usebet'=>$usebet->pay]);
            foreach ($usebets[$key] as $key => $usebet) {
                $useradddetails = explode(" ", $usebet   ->useradddetail);
                
                foreach ($useradddetails as $key => $useradddetail) {
                    if($useradddetail==$loginId){
                        if($levellogin->level == 6){
                            if($usebet->type=="top3"){
                                $buytop3 += $usebet->amount_6;
                                $comtop3 += number_format(($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2)-($usebet->amount_7*($usebet->com_7/100));     
                                $comtop3one = number_format(($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);     
                                $taketop3 =  $buytop3+$comtop3;
                                $paytop3 += (($usebet->amount_7*$usebet->pay_7)-($usebet->amount_7)+$usebet->amount_7*$usebet->com_7/100)-((($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->pay_6)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->com_6/100)));
                            }if($usebet->type=="top2"){
                                $buytop2 += $usebet->amount_6;
                                $comtop2 += number_format(($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2)-($usebet->amount_7*($usebet->com_7/100));
                                $taketop2 =  $buytop2+$comtop2;
                                $paytop2 += (($usebet->amount_7*$usebet->pay_7)-($usebet->amount_7)+$usebet->amount_7*$usebet->com_7/100)-((($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->pay_6)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->com_6/100)));
                            }if($usebet->type=="top1"){
                                $buytop1 += $usebet->amount_6;
                                $comtop1 += number_format(($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2)-($usebet->amount_7*($usebet->com_7/100));
                                $taketop1 =  $buytop1+$comtop1;
                                $paytop1 += (($usebet->amount_7*$usebet->pay_7)-($usebet->amount_7)+$usebet->amount_7*$usebet->com_7/100)-((($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->pay_6)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->com_6/100)));
                            }if($usebet->type=="bottom3"){
                                $buybottom3 += $usebet->amount_6;
                                $combottom3 += number_format(($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2)-($usebet->amount_7*($usebet->com_7/100));
                                $takebottom3 =  $buybottom3+$combottom3;
                                $paybottom3 += (($usebet->amount_7*$usebet->pay_7)-($usebet->amount_7)+$usebet->amount_7*$usebet->com_7/100)-((($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->pay_6)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->com_6/100)));
                            }if($usebet->type=="bottom2"){
                                $buybottom2 += $usebet->amount_6;
                                $combottom2 += number_format(($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2)-($usebet->amount_7*($usebet->com_7/100));
                                $takebottom2 =  $buybottom2+$combottom2;
                                $paybottom2 += (($usebet->amount_7*$usebet->pay_7)-($usebet->amount_7)+$usebet->amount_7*$usebet->com_7/100)-((($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->pay_6)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->com_6/100)));
                            }if($usebet->type=="bottom1"){
                                $buybottom1 += $usebet->amount_6;
                                $combottom1 += number_format(($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2)-($usebet->amount_7*($usebet->com_7/100));
                                $takebottom1 =  $buybottom1+$combottom1;
                                $paybottom1 += (($usebet->amount_7*$usebet->pay_7)-($usebet->amount_7)+$usebet->amount_7*$usebet->com_7/100)-((($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->pay_6)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->com_6/100)));
                            }if($usebet->type=="tod2"){
                                $buytod2 += $usebet->amount_6;
                                $comtod2 += number_format(($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2)-($usebet->amount_7*($usebet->com_7/100));
                                $taketod2 =  $buytod2+$comtod2;
                                $paytod2 += (($usebet->amount_7*$usebet->pay_7)-($usebet->amount_7)+$usebet->amount_7*$usebet->com_7/100)-((($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->pay_6)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->com_6/100)));
                            }if($usebet->type=="tod3"){
                                $buytod3 += $usebet->amount_6;
                                $comtod3 += number_format(($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2)-($usebet->amount_7*($usebet->com_7/100));
                                $taketod3 =  $buytod3+$comtod3;
                                $paytod3 += (($usebet->amount_7*$usebet->pay_7)-($usebet->amount_7)+$usebet->amount_7*$usebet->com_7/100)-((($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->pay_6)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)-(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4+$usebet->amount_5)*$usebet->com_6/100)));
                            }  
                        }elseif($levellogin->level == 5){
                            if($usebet->type=="top3"){
                                $buytop3 += $usebet->amount_5;
                                if($usebet->amount_6 != 0){
                                    $comtop3 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4)*$usebet->com_5/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);   
                                    }elseif($usebet->amount_7 != 0){
                                        $comtop3 += number_format(($usebet->amount_7-$usebet->amount_5)*$usebet->com_5/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                        
                                    }
                                $taketop3 =  $buytop3-$comtop3;     
                                $paytop3 += ($usebet->amount_5*$usebet->pay)-($usebet->amount_5-($usebet->amount_5*($usebet->com_5/100)));
                            }if($usebet->type=="top2"){
                                $buytop2 += $usebet->amount_5;
                                if($usebet->amount_6 != 0){
                                    $comtop2 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4)*$usebet->com_5/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);   
                                    }elseif($usebet->amount_7 != 0){
                                        $comtop2 += number_format(($usebet->amount_7-$usebet->amount_5)*$usebet->com_5/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                    }
                                $taketop2 =  $buytop2-$comtop2;
                                $paytop2 += ($usebet->amount_5*$usebet->pay)-($usebet->amount_5-($usebet->amount_5*($usebet->com_5/100)));
                            }if($usebet->type=="top1"){
                                $buytop1 += $usebet->amount_5;
                                if($usebet->amount_6 != 0){
                                    $comtop1 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4)*$usebet->com_5/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);   
                                    }elseif($usebet->amount_7 != 0){
                                        $comtop1 += number_format(($usebet->amount_7-$usebet->amount_5)*$usebet->com_5/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                    }
                                $taketop1 =  $buytop1-$comtop1;
                                $paytop1 += ($usebet->amount_5*$usebet->pay)-($usebet->amount_5-($usebet->amount_5*($usebet->com_5/100)));
                            }if($usebet->type=="bottom3"){
                                $buybottom3 += $usebet->amount_5;
                                if($usebet->amount_6 != 0){
                                    $combottom3 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4)*$usebet->com_5/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);   
                                    }elseif($usebet->amount_7 != 0){
                                        $combottom3 += number_format(($usebet->amount_7-$usebet->amount_5)*$usebet->com_5/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                    }
                                $takebottom3 =  $buybottom3-$combottom3;
                                $paybottom3 += ($usebet->amount_5*$usebet->pay)-($usebet->amount_5-($usebet->amount_5*($usebet->com_5/100)));
                            }if($usebet->type=="bottom2"){
                                $buybottom2 += $usebet->amount_5;
                                if($usebet->amount_6 != 0){
                                    $combottom2 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4)*$usebet->com_5/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);   
                                    }elseif($usebet->amount_7 != 0){
                                        $combottom2 += number_format(($usebet->amount_7-$usebet->amount_5)*$usebet->com_5/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                    }
                                $takebottom2 =  $buybottom2-$combottom2;
                                $paybottom2 += ($usebet->amount_5*$usebet->pay)-($usebet->amount_5-($usebet->amount_5*($usebet->com_5/100)));
                            }if($usebet->type=="bottom1"){
                                $buybottom1 += $usebet->amount_5;
                                if($usebet->amount_6 != 0){
                                    $combottom1 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4)*$usebet->com_5/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);   
                                    }elseif($usebet->amount_7 != 0){
                                        $combottom1 += number_format(($usebet->amount_7-$usebet->amount_5)*$usebet->com_5/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                    }
                                $takebottom1 =  $buybottom1-$combottom1;
                                $paybottom1 += ($usebet->amount_5*$usebet->pay)-($usebet->amount_5-($usebet->amount_5*($usebet->com_5/100)));
                            }if($usebet->type=="tod2"){
                                $buytod2 += $usebet->amount_5;
                                if($usebet->amount_6 != 0){
                                    $comtod2 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4)*$usebet->com_5/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);   
                                    }elseif($usebet->amount_7 != 0){
                                        $comtod2 += number_format(($usebet->amount_7-$usebet->amount_5)*$usebet->com_5/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                    }
                                $taketod2 =  $buytod2-$comtod2;
                                $paytod2 += ($usebet->amount_5*$usebet->pay)-($usebet->amount_5-($usebet->amount_5*($usebet->com_5/100)));
                            }if($usebet->type=="tod3"){
                                $buytod3 += $usebet->amount_5;
                                if($usebet->amount_6 != 0){
                                    $comtod3 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3+$usebet->amount_4)*$usebet->com_5/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);   
                                    }elseif($usebet->amount_7 != 0){
                                        $comtod3 += number_format(($usebet->amount_7-$usebet->amount_5)*$usebet->com_5/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                    }
                                $taketod3 =  $buytod3-$comtod3;
                                $paytod3 += ($usebet->amount_5*$usebet->pay)-($usebet->amount_5-($usebet->amount_5*($usebet->com_5/100)));
                            }  
                        }elseif($levellogin->level == 4){
                            if($usebet->type=="top3"){
                                $buytop3 += $usebet->amount_4; 
                                if($usebet->amount_5 != 0){
                                    $comtop3 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);   
                                    }elseif($usebet->amount_6 != 0){
                                        $comtop3 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                        }elseif($usebet->amount_7 != 0){
                                            $comtop3 += number_format(($usebet->amount_7-$usebet->amount_4)*$usebet->com_4/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                        }  
                                $taketop3 =  $buytop3-$comtop3; 
                                $paytop3 += ($usebet->amount_4*$usebet->pay)-($usebet->amount_4-($usebet->amount_4*($usebet->com_4/100)));
                            }if($usebet->type=="top2"){
                                $buytop2 += $usebet->amount_4;
                                if($usebet->amount_5 != 0){
                                    $comtop2 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);   
                                    }elseif($usebet->amount_6 != 0){
                                        $comtop2 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                        }elseif($usebet->amount_7 != 0){
                                            $comtop2 += number_format(($usebet->amount_7-$usebet->amount_4)*$usebet->com_4/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                        }
                                $taketop2 =  $buytop2-$comtop2;
                                $paytop2 += ($usebet->amount_4*$usebet->pay)-($usebet->amount_4-($usebet->amount_4*($usebet->com_4/100)));
                            }if($usebet->type=="top1"){
                                $buytop1 += $usebet->amount_4;
                                if($usebet->amount_5 != 0){
                                    $comtop1 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);   
                                    }elseif($usebet->amount_6 != 0){
                                        $comtop1 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                        }elseif($usebet->amount_7 != 0){
                                            $comtop1 += number_format(($usebet->amount_7-$usebet->amount_4)*$usebet->com_4/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                        }
                                $taketop1 =  $buytop1-$comtop1;
                                $paytop1 += ($usebet->amount_4*$usebet->pay)-($usebet->amount_4-($usebet->amount_4*($usebet->com_4/100)));
                            }if($usebet->type=="bottom3"){
                                $buybottom3 += $usebet->amount_4;
                                if($usebet->amount_5 != 0){
                                    $combottom3 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);   
                                    }elseif($usebet->amount_6 != 0){
                                        $combottom3 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                        }elseif($usebet->amount_7 != 0){
                                            $combottom3 += number_format(($usebet->amount_7-$usebet->amount_4)*$usebet->com_4/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                        }
                                $takebottom3 =  $buybottom3-$combottom3; 
                                $paybottom3 += ($usebet->amount_4*$usebet->pay)-($usebet->amount_4-($usebet->amount_4*($usebet->com_4/100)));
                            }if($usebet->type=="bottom2"){
                                $buybottom2 += $usebet->amount_4;
                                if($usebet->amount_5 != 0){
                                    $combottom2 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);   
                                    }elseif($usebet->amount_6 != 0){
                                        $combottom2 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                        }elseif($usebet->amount_7 != 0){
                                            $combottom2 += number_format(($usebet->amount_7-$usebet->amount_4)*$usebet->com_4/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                        }
                                $takebottom2 =  $buybottom2-$combottom2; 
                                $paybottom2 += ($usebet->amount_4*$usebet->pay)-($usebet->amount_4-($usebet->amount_4*($usebet->com_4/100))); 
                            }if($usebet->type=="bottom1"){
                                $buybottom1 += $usebet->amount_4;
                                if($usebet->amount_5 != 0){
                                    $combottom1 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);   
                                    }elseif($usebet->amount_6 != 0){
                                        $combottom1 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                        }elseif($usebet->amount_7 != 0){
                                            $combottom1 += number_format(($usebet->amount_7-$usebet->amount_4)*$usebet->com_4/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                        }
                                $takebottom1 =  $buybottom1-$combottom1; 
                                $paybottom1 += ($usebet->amount_4*$usebet->pay)-($usebet->amount_4-($usebet->amount_4*($usebet->com_4/100))); 
                            }if($usebet->type=="tod2"){
                                $buytod2 += $usebet->amount_4;
                                if($usebet->amount_5 != 0){
                                    $comtod2 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);   
                                    }elseif($usebet->amount_6 != 0){
                                        $comtod2 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                        }elseif($usebet->amount_7 != 0){
                                            $comtod2 += number_format(($usebet->amount_7-$usebet->amount_4)*$usebet->com_4/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                        }
                                $taketod2 =  $buytod2-$comtod2;  
                                $paytod2 += ($usebet->amount_4*$usebet->pay)-($usebet->amount_4-($usebet->amount_4*($usebet->com_4/100)));
                            }if($usebet->type=="tod3"){
                                $buytod3 += $usebet->amount_4;
                                if($usebet->amount_5 != 0){
                                    $comtod3 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);   
                                    }elseif($usebet->amount_6 != 0){
                                        $comtod3 += number_format(($usebet->amount_1+$usebet->amount_2+$usebet->amount_3)*$usebet->com_4/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                        }elseif($usebet->amount_7 != 0){
                                            $comtod3 += number_format(($usebet->amount_7-$usebet->amount_4)*$usebet->com_4/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                        }
                                $taketod3 =  $buytod3-$comtod3;
                                $paytod3 += ($usebet->amount_4*$usebet->pay)-($usebet->amount_4-($usebet->amount_4*($usebet->com_4/100))); 
                            }  
                        }elseif($levellogin->level == 3){
                            if($usebet->type=="top3"){
                                $buytop3 += $usebet->amount_3;
                                if($usebet->amount_4 != 0){
                                    $comtop3 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4)*$usebet->com_4/100,2);   
                                    }elseif($usebet->amount_5 != 0){
                                        $comtop3 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);    
                                        }elseif($usebet->amount_6 != 0){
                                        $comtop3 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                            }elseif($usebet->amount_7 != 0){
                                                $comtop3 += number_format(($usebet->amount_7-$usebet->amount_3)*$usebet->com_3/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                            }
                                $taketop3 =  $buytop3-$comtop3;     
                                $paytop3 += ($usebet->amount_3*$usebet->pay)-($usebet->amount_3-($usebet->amount_3*($usebet->com_3/100)));
                            }if($usebet->type=="top2"){
                                $buytop2 += $usebet->amount_3;
                                if($usebet->amount_4 != 0){
                                    $comtop2 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4)*$usebet->com_4/100,2);   
                                    }elseif($usebet->amount_5 != 0){
                                        $comtop2 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);    
                                        }elseif($usebet->amount_6 != 0){
                                        $comtop2 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                            }elseif($usebet->amount_7 != 0){
                                                $comtop2 += number_format(($usebet->amount_7-$usebet->amount_3)*$usebet->com_3/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                            }
                                $taketop2 =  $buytop2-$comtop2;
                                $paytop2 += ($usebet->amount_3*$usebet->pay)-($usebet->amount_3-($usebet->amount_3*($usebet->com_3/100)));
                            }if($usebet->type=="top1"){
                                $buytop1 += $usebet->amount_3;
                                if($usebet->amount_4 != 0){
                                    $comtop1 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4)*$usebet->com_4/100,2);   
                                    }elseif($usebet->amount_5 != 0){
                                        $comtop1 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);    
                                        }elseif($usebet->amount_6 != 0){
                                        $comtop1 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                            }elseif($usebet->amount_7 != 0){
                                                $comtop1 += number_format(($usebet->amount_7-$usebet->amount_3)*$usebet->com_3/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                            }
                                $taketop1 =  $buytop1-$comtop1;
                                $paytop1 += ($usebet->amount_3*$usebet->pay)-($usebet->amount_3-($usebet->amount_3*($usebet->com_3/100)));
                            }if($usebet->type=="bottom3"){
                                $buybottom3 += $usebet->amount_3;
                                if($usebet->amount_4 != 0){
                                    $combottom3 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4)*$usebet->com_4/100,2);   
                                    }elseif($usebet->amount_5 != 0){
                                        $combottom3 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);    
                                        }elseif($usebet->amount_6 != 0){
                                        $combottom3 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                            }elseif($usebet->amount_7 != 0){
                                                $combottom3 += number_format(($usebet->amount_7-$usebet->amount_3)*$usebet->com_3/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                            }
                                $takebottom3 =  $buybottom3-$combottom3;
                                $paybottom3 += ($usebet->amount_3*$usebet->pay)-($usebet->amount_3-($usebet->amount_3*($usebet->com_3/100)));
                            }if($usebet->type=="bottom2"){
                                $buybottom2 += $usebet->amount_3;
                                if($usebet->amount_4 != 0){
                                    $combottom2 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4)*$usebet->com_4/100,2);   
                                    }elseif($usebet->amount_5 != 0){
                                        $combottom2 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);    
                                        }elseif($usebet->amount_6 != 0){
                                        $combottom2 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                            }elseif($usebet->amount_7 != 0){
                                                $combottom2 += number_format(($usebet->amount_7-$usebet->amount_3)*$usebet->com_3/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                            }
                                $takebottom2 =  $buybottom2-$combottom2;
                                $paybottom2 += ($usebet->amount_3*$usebet->pay)-($usebet->amount_3-($usebet->amount_3*($usebet->com_3/100)));
                            }if($usebet->type=="bottom1"){
                                $buybottom1 += $usebet->amount_3;
                                if($usebet->amount_4 != 0){
                                    $combottom1 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4)*$usebet->com_4/100,2);   
                                    }elseif($usebet->amount_5 != 0){
                                        $combottom1 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);    
                                        }elseif($usebet->amount_6 != 0){
                                        $combottom1 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                            }elseif($usebet->amount_7 != 0){
                                                $combottom1 += number_format(($usebet->amount_7-$usebet->amount_3)*$usebet->com_3/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                            }
                                $takebottom1 =  $buybottom1-$combottom1;
                                $paybottom1 += ($usebet->amount_3*$usebet->pay)-($usebet->amount_3-($usebet->amount_3*($usebet->com_3/100)));
                            }if($usebet->type=="tod2"){
                                $buytod2 += $usebet->amount_3;
                                if($usebet->amount_4 != 0){
                                    $comtod2 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4)*$usebet->com_4/100,2);   
                                    }elseif($usebet->amount_5 != 0){
                                        $comtod2 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);    
                                        }elseif($usebet->amount_6 != 0){
                                        $comtod2 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                            }elseif($usebet->amount_7 != 0){
                                                $comtod2 += number_format(($usebet->amount_7-$usebet->amount_3)*$usebet->com_3/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                            }
                                $taketod2 =  $buytod2-$comtod2;
                                $paytod2 += ($usebet->amount_3*$usebet->pay)-($usebet->amount_3-($usebet->amount_3*($usebet->com_3/100)));
                            }if($usebet->type=="tod3"){
                                $buytod3 += $usebet->amount_3;
                                if($usebet->amount_4 != 0){
                                    $comtod3 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4)*$usebet->com_4/100,2);   
                                    }elseif($usebet->amount_5 != 0){
                                        $comtod3 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5)*$usebet->com_5/100,2);    
                                        }elseif($usebet->amount_6 != 0){
                                        $comtod3 += number_format(($usebet->amount_1+$usebet->amount_2)*$usebet->com_3/100-($usebet->amount_7-$usebet->amount_6)*$usebet->com_6/100,2);    
                                            }elseif($usebet->amount_7 != 0){
                                                $comtod3 += number_format(($usebet->amount_7-$usebet->amount_3)*$usebet->com_3/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                            }
                                $taketod3 =  $buytod3-$comtod3;
                                $paytod3 += ($usebet->amount_3*$usebet->pay)-($usebet->amount_3-($usebet->amount_3*($usebet->com_3/100)));
                            }  
                        }elseif($levellogin->level == 2){
                            if($usebet->type=="top3"){
                                $buytop3 += $usebet->amount_2;
                                if($usebet->amount_3 != 0){
                                    $comtop3 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_3/100,2);    
                                    }elseif($usebet->amount_4 != 0){
                                        $comtop3 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_4/100,2);   
                                        }elseif($usebet->amount_5 != 0){
                                            $comtop3 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_5/100,2);   
                                            }elseif($usebet->amount_6 != 0){
                                                $comtop3 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_6/100,2);   
                                                }elseif($usebet->amount_7 != 0){
                                                    $comtop3 += number_format(($usebet->amount_7-$usebet->amount_2)*$usebet->com_2/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                                }
                                $taketop3 =  $buytop3+$comtop3;  
                                $paytop3 += ($usebet->amount_2*$usebet->pay)-($usebet->amount_2-($usebet->amount_2*($usebet->com_2/100)));
                            }if($usebet->type=="top2"){
                                $buytop2 += $usebet->amount_2;
                                if($usebet->amount_3 != 0){
                                    $comtop2 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_3/100,2);    
                                    }elseif($usebet->amount_4 != 0){
                                        $comtop2 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_4/100,2);   
                                        }elseif($usebet->amount_5 != 0){
                                            $comtop2 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_5/100,2);   
                                            }elseif($usebet->amount_6 != 0){
                                                $comtop2 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_6/100,2);   
                                                }elseif($usebet->amount_7 != 0){
                                                    $comtop2 += number_format(($usebet->amount_7-$usebet->amount_2)*$usebet->com_2/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                                }
                                $taketop2 =  $buytop2+$comtop2;
                                $paytop2 += ($usebet->amount_2*$usebet->pay)-($usebet->amount_2-($usebet->amount_2*($usebet->com_2/100)));
                            }if($usebet->type=="top1"){
                                $buytop1 += $usebet->amount_2;
                                if($usebet->amount_3 != 0){
                                    $comtop1 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_3/100,2);    
                                    }elseif($usebet->amount_4 != 0){
                                        $comtop1 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_4/100,2);   
                                        }elseif($usebet->amount_5 != 0){
                                            $comtop1 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_5/100,2);   
                                            }elseif($usebet->amount_6 != 0){
                                                $comtop1 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_6/100,2);   
                                                }elseif($usebet->amount_7 != 0){
                                                    $comtop1 += number_format(($usebet->amount_7-$usebet->amount_2)*$usebet->com_2/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                                }
                                $taketop1 =  $buytop1+$comtop1;
                                $paytop1 += ($usebet->amount_2*$usebet->pay)-($usebet->amount_2-($usebet->amount_2*($usebet->com_2/100)));
                            }if($usebet->type=="bottom3"){
                                $buybottom3 += $usebet->amount_2;
                                if($usebet->amount_3 != 0){
                                    $combottom3 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_3/100,2);    
                                    }elseif($usebet->amount_4 != 0){
                                        $combottom3 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_4/100,2);   
                                        }elseif($usebet->amount_5 != 0){
                                            $combottom3 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_5/100,2);   
                                            }elseif($usebet->amount_6 != 0){
                                                $combottom3 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_6/100,2);   
                                                }elseif($usebet->amount_7 != 0){
                                                    $combottom3 += number_format(($usebet->amount_7-$usebet->amount_2)*$usebet->com_2/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                                }
                                $takebottom3 =  $buybottom3+$combottom3;
                                $paybottom3 += ($usebet->amount_2*$usebet->pay)-($usebet->amount_2-($usebet->amount_2*($usebet->com_2/100)));
                            }if($usebet->type=="bottom2"){
                                $buybottom2 += $usebet->amount_2;
                                if($usebet->amount_3 != 0){
                                    $combottom2 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_3/100,2);    
                                    }elseif($usebet->amount_4 != 0){
                                        $combottom2 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_4/100,2);   
                                        }elseif($usebet->amount_5 != 0){
                                            $combottom2 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_5/100,2);   
                                            }elseif($usebet->amount_6 != 0){
                                                $combottom2 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_6/100,2);   
                                                }elseif($usebet->amount_7 != 0){
                                                    $combottom2 += number_format(($usebet->amount_7-$usebet->amount_2)*$usebet->com_2/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                                }
                                $takebottom2 =  $buybottom2+$combottom2;
                                $paybottom2 += ($usebet->amount_2*$usebet->pay)-($usebet->amount_2-($usebet->amount_2*($usebet->com_2/100)));
                            }if($usebet->type=="bottom1"){
                                $buybottom1 += $usebet->amount_2;
                                if($usebet->amount_3 != 0){
                                    $combottom1 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_3/100,2);    
                                    }elseif($usebet->amount_4 != 0){
                                        $combottom1 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_4/100,2);   
                                        }elseif($usebet->amount_5 != 0){
                                            $combottom1 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_5/100,2);   
                                            }elseif($usebet->amount_6 != 0){
                                                $combottom1 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_6/100,2);   
                                                }elseif($usebet->amount_7 != 0){
                                                    $combottom1 += number_format(($usebet->amount_7-$usebet->amount_2)*$usebet->com_2/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                                }
                                $takebottom1 =  $buybottom1+$combottom1;
                                $paybottom1 += ($usebet->amount_2*$usebet->pay)-($usebet->amount_2-($usebet->amount_2*($usebet->com_2/100)));
                            }if($usebet->type=="tod2"){
                                $buytod2 += $usebet->amount_2;
                                if($usebet->amount_3 != 0){
                                    $comtod2 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_3/100,2);    
                                    }elseif($usebet->amount_4 != 0){
                                        $comtod2 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_4/100,2);   
                                        }elseif($usebet->amount_5 != 0){
                                            $comtod2 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_5/100,2);   
                                            }elseif($usebet->amount_6 != 0){
                                                $comtod2 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_6/100,2);   
                                                }elseif($usebet->amount_7 != 0){
                                                    $comtod2 += number_format(($usebet->amount_7-$usebet->amount_2)*$usebet->com_2/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                                }
                                $taketod2 =  $buytod2+$comtod2;
                                $paytod2 += ($usebet->amount_2*$usebet->pay)-($usebet->amount_2-($usebet->amount_2*($usebet->com_2/100)));
                            }if($usebet->type=="tod3"){
                                $buytod3 += $usebet->amount_2;
                                if($usebet->amount_3 != 0){
                                    $comtod3 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_3/100,2);    
                                    }elseif($usebet->amount_4 != 0){
                                        $comtod3 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_4/100,2);   
                                        }elseif($usebet->amount_5 != 0){
                                            $comtod3 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_5/100,2);   
                                            }elseif($usebet->amount_6 != 0){
                                                $comtod3 += number_format(($usebet->amount_1)*$usebet->com_2/100-($usebet->amount_7-$usebet->amount_6-$usebet->amount_5-$usebet->amount_4-$usebet->amount_3)*$usebet->com_6/100,2);   
                                                }elseif($usebet->amount_7 != 0){
                                                    $comtod3 += number_format(($usebet->amount_7-$usebet->amount_2)*$usebet->com_2/100,2)-($usebet->amount_7*($usebet->com_7/100));   
                                                }
                                $taketod3 =  $buytod3+$comtod3;
                                $paytod3 += ($usebet->amount_2*$usebet->pay)-($usebet->amount_2-($usebet->amount_2*($usebet->com_2/100)));
                            }  
                        }elseif($levellogin->level == 1){
                            if($usebet->type=="top3"){
                                $buytop3 += $usebet->amount_1;
                                $comtop3 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);  
                                $taketop3 =  $buytop3-$comtop3;   
                                $paytop3 += ($usebet->amount_1*$usebet->pay)-($usebet->amount_1-($usebet->amount_1*($usebet->com_1/100))); 
                            }if($usebet->type=="top2"){
                                $buytop2 += $usebet->amount_1;
                                $comtop2 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                                $taketop2 =  $buytop2-$comtop2;
                                $paytop2 += ($usebet->amount_1*$usebet->pay)-($usebet->amount_1-($usebet->amount_1*($usebet->com_1/100)));
                            }if($usebet->type=="top1"){
                                $buytop1 += $usebet->amount_1;
                                $comtop1 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                                $taketop1 =  $buytop1-$comtop1;
                                $paytop1 += ($usebet->amount_1*$usebet->pay)-($usebet->amount_1-($usebet->amount_1*($usebet->com_1/100)));
                            }if($usebet->type=="bottom3"){
                                $buybottom3 += $usebet->amount_1;
                                $combottom3 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                                $takebottom3 =  $buybottom3-$combottom3;
                                $paybottom3 += ($usebet->amount_1*$usebet->pay)-($usebet->amount_1-($usebet->amount_1*($usebet->com_1/100)));
                            }if($usebet->type=="bottom2"){
                                $buybottom2 += $usebet->amount_1;
                                $combottom2 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                                $takebottom2 =  $buybottom2-$combottom2;
                                $paybottom2 += ($usebet->amount_1*$usebet->pay)-($usebet->amount_1-($usebet->amount_1*($usebet->com_1/100)));
                            }if($usebet->type=="bottom1"){
                                $buybottom1 += $usebet->amount_1;
                                $combottom1 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                                $takebottom1 =  $buybottom1-$combottom1;
                                $paybottom1 += ($usebet->amount_1*$usebet->pay)-($usebet->amount_1-($usebet->amount_1*($usebet->com_1/100)));
                            }if($usebet->type=="tod2"){
                                $buytod2 += $usebet->amount_1;
                                $comtod2 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                                $taketod2 =  $buytod2-$comtod2;
                                $paytod2 += ($usebet->amount_1*$usebet->pay)-($usebet->amount_1-($usebet->amount_1*($usebet->com_1/100)));
                            }if($usebet->type=="tod3"){
                                $buytod3 += $usebet->amount_1;
                                $comtod3 += number_format(($usebet->amount_1*($usebet->com_1/100)),2);
                                $taketod3 =  $buytod3-$comtod3;
                                $paytod3 += ($usebet->amount_1*$usebet->pay)-($usebet->amount_1-($usebet->amount_1*($usebet->com_1/100)));
                            } 
                            
                            
                            
                        } 
                        
                        $sumbuy = $buytop3+$buybottom3+$buytod3+$buytop2+$buybottom2+$buytod2+$buytop1+$buybottom1;
                        $sumcom = $comtop3+$combottom3+$comtod3+$comtop2+$combottom2+$comtod2+$comtop1+$combottom1;
                        $sumtake = $taketop3+$takebottom3+$taketod3+$taketop2+$takebottom2+$taketod2+$taketop1+$takebottom1;
                        $sumpay = $paytop3+$paybottom3+$paytod3+$paytop2+$paybottom2+$paytod2+$paytop1+$paybottom1;
                          
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
            ///////////////////////////////////////////////////////
            'comtop3' => number_format($comtop3,2),
            'combottom3' =>number_format($combottom3,2),
            'comtod3' =>number_format($comtod3,2),
            'comtop2' =>number_format($comtop2,2),
            'combottom2' =>number_format($combottom2,2),
            'comtod2' =>number_format($comtod2,2),
            'comtop1' =>number_format($comtop1,2),
            'combottom1' =>number_format($combottom1,2),
            ///////////////////////////////////////////////////////
            'taketop3' =>number_format($taketop3,2),
            'takebottom3' =>number_format($takebottom3,2),
            'taketod3' =>number_format($taketod3,2),
            'taketop2' =>number_format($taketop2,2),
            'takebottom2' =>number_format($takebottom2,2),
            'taketod2' =>number_format($taketod2,2),
            'taketop1' =>number_format($taketop1,2),
            'takebottom1' =>number_format($takebottom1,2),
            //////////////////////////////////////////////////////
            'paytop3' =>number_format($paytop3,2),
            'paybottom3' =>number_format($paybottom3,2),
            'paytod3' =>number_format($paytod3,2),
            'paytop2' =>number_format($paytop2,2),
            'paybottom2' =>number_format($paybottom2,2),
            'paytod2' =>number_format($paytod2,2),
            'paytop1' =>number_format($paytop1,2),
            'paybottom1' =>number_format($paybottom1,2),
            //////////////////////////////////////////////////////
            'sumbuy' =>number_format($sumbuy,2),
            'sumcom' =>number_format($sumcom,2),
            'sumtake' =>number_format($sumtake,2),
            'sumpay' =>number_format($sumpay,2),
            
            
        ]);
    }




    public function listlotuser()
    {
        $id = auth()->user()->id;
        $level = auth()->user()->level;
        $lotto = Lotto::orderBy('id', 'desc')->latest()->first();
        $tickets = Ticket::where('lotto_id',$lotto->id)->get();

            foreach ($tickets as $key => $ticket) {
               $userbets[$key] = Userbet::where('ticket_id', $ticket->id)   
                                        ->with('member')
                                        ->select(DB::Raw('member_id'))
                                        ->groupBy('member_id')
                                        ->get();
            }

            foreach ($userbets as $key => $userbet) {
                foreach ($userbet as $key => $value) {
                   $datamember_id[] = $value->member_id;
                }
                 
            }
        foreach (array_unique($datamember_id) as $key => $member_id) {
            $usebet_s[$member_id] = Userbet::where('lotto_id', $lotto->id)->where('member_id', $member_id)->get();
            $datamember_id[$member_id] = $member_id;
            // $member_lavel[$member_id] = Member::find($userbet[0]->member_id);
        }
       
        foreach ($usebet_s as $key => $usebet) {
            $member = Member::find($usebet[0]->member_id);
            $useradddetail =$member->useradddetail;
            $member_name[$key] = $member->username;
            $level_member[$key] = $member->level;

            $useradddetails = explode(" ", $useradddetail);
                foreach ($useradddetails as $loop_i => $useradddetail) {
                    if($useradddetail==$id){
                            $it_have[] =$key;
                            $sumtop3[$key] =0;
                            $sumbottom3[$key] =0;
                            $sumtod3[$key] =0;
                            $sumtop2[$key] =0;
                            $sumbottom2[$key] =0;
                            $sumtod2[$key] =0;
                            $sumtop1[$key] =0;
                            $sumbottom1[$key] =0;
                            
                            //////////////////////////////////
                            $comtop3[$key] =0;
                            $combottom3[$key] =0;
                            $comtod3[$key] =0;
                            $comtop2[$key] =0;
                            $combottom2[$key] =0;
                            $comtod2[$key] =0;
                            $comtop1[$key] =0;
                            $combottom1[$key] =0;
                            /////////////////////////////////
                            $usercom_s[$key] =0;
                            $usersum_s[$key] =0;
                            $usersumall[$key] =0;

                            //////AG///////////////////
                            $sumagtop3[$key] =0;
                            $sumagbottom3[$key] =0;
                            $sumagtod3[$key] =0;
                            $sumagtop2[$key] =0;
                            $sumagbottom2[$key] =0;
                            $sumagtod2[$key] =0;
                            $sumagtop1[$key] =0;
                            $sumagbottom1[$key] =0;
                            
                            //////////////////////////////////
                            $comagtop3[$key] =0;
                            $comagbottom3[$key] =0;
                            $comagtod3[$key] =0;
                            $comagtop2[$key] =0;
                            $comagbottom2[$key] =0;
                            $comagtod2[$key] =0;
                            $comagtop1[$key] =0;
                            $comagbottom1[$key] =0;
                            /////////////////////////////////
                            $agcom_s[$key] =0;
                            $agsum_s[$key] =0;
                            $agsumall[$key] =0;

                            //////COMPANY///////////////////
                            $sumcompanytop3[$key] =0;
                            $sumcompanybottom3[$key] =0;
                            $sumcompanytod3[$key] =0;
                            $sumcompanytop2[$key] =0;
                            $sumcompanybottom2[$key] =0;
                            $sumcompanytod2[$key] =0;
                            $sumcompanytop1[$key] =0;
                            $sumcompanybottom1[$key] =0;
                            
                            //////////////////////////////////
                            $comcompanytop3[$key] =0;
                            $comcompanybottom3[$key] =0;
                            $comcompanytod3[$key] =0;
                            $comcompanytop2[$key] =0;
                            $comcompanybottom2[$key] =0;
                            $comcompanytod2[$key] =0;
                            $comcompanytop1[$key] =0;
                            $comcompanybottom1[$key] =0;
                            /////////////////////////////////
                            $companycom_s[$key] =0;
                            $companysum_s[$key] =0;
                            $companysumall[$key] =0;
                            /////////////////////////////////
                            $sum_top3 =0;
                            $sum_bottom3 =0;
                            $sum_tod3 =0;
                            $sum_top2 =0;
                            $sum_bottom2 =0;
                            $sum_tod2 =0;
                            $sum_top1 =0;
                            $sum_bottom1 =0;
                            /////////////////////////////////
                            $com_top3 =0;
                            $com_bottom3 =0;
                            $com_tod3 =0;
                            $com_top2 =0;
                            $com_bottom2 =0;
                            $com_tod2 =0;
                            $com_top1 =0;
                            $com_bottom1 =0;
                            /////////////////////////////////
                            $sum_agtop3 =0;
                            $sum_agbottom3 =0;
                            $sum_agtod3 =0;
                            $sum_agtop2 =0;
                            $sum_agbottom2 =0;
                            $sum_agtod2 =0;
                            $sum_agtop1 =0;
                            $sum_agbottom1 =0;
                            /////////////////////////////////
                            $com_agtop3 =0;
                            $com_agbottom3 =0;
                            $com_agtod3 =0;
                            $com_agtop2 =0;
                            $com_agbottom2 =0;
                            $com_agtod2 =0;
                            $com_agtop1 =0;
                            $com_agbottom1 =0;
                            //////COMPANY////////////////////
                            $sumcompany_top3 =0;
                            $sumcompany_bottom3 =0;
                            $sumcompany_tod3 =0;
                            $sumcompany_top2 =0;
                            $sumcompany_bottom2 =0;
                            $sumcompany_tod2 =0;
                            $sumcompany_top1 =0;
                            $sumcompany_bottom1 =0;
                            /////////////////////////////////
                            $comcompany_top3 =0;
                            $comcompany_bottom3 =0;
                            $comcompany_tod3 =0;
                            $comcompany_top2 =0;
                            $comcompany_bottom2 =0;
                            $comcompany_tod2 =0;
                            $comcompany_top1 =0;
                            $comcompany_bottom1 =0;

                            $member_name[$key] = $member->username;
                            $memberlist_id[$key] = $member->id;
                            $userbets_[$key] = $usebet[0]->ticket_id;
                            //$userbets_[$key] = Userbet::where('id', $usebet[0]->id)->get();
                            //$userbets_[$key] = Userbet::where('ticket_id', $usebet[0]->ticket_id)->get();
                           
                            $userbets_[$key] = $usebet_s[$key];
                            
                                foreach ($userbets_[$key] as $loop_i => $usebet_c) {
                                  
                                            $data[] = $usebet_c;

                                            /////////////////////AG/////////////////////////////////
                                            if($level == 6){
                                                if($usebet_c->type=="top3"){
                                                    $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                    $comtop3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                    $combottom3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagbottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="tod3"){
                                                    $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                    $comtod3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="top2"){
                                                    $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                    $comtop2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                    $combottom2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagbottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="tod2"){
                                                    $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                    $comtod2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="top1"){
                                                    $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                    $comtop1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                    $combottom1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagbottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }
                                            }elseif($level == 5){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                            $comtop3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                            $combottom3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagbottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagbottom3[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                            $comtod3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagtod3[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                            $comtop2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagtop2[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                            $combottom2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagbottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagbottom2[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                            $comtod2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagtod2[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                            $comtop1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagtop1[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                            $combottom1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagbottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagbottom1[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }
                                            }elseif($level == 4){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }        
                                                    //$comagtop3[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }  
                                                    //$comagbottom3[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    //$comagtod3[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }
                                                    //$comagtop2[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }
                                                    //$comagbottom2[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }
                                                    //$comagtod2[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }
                                                    //$comagtop1[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }
                                                    //$comagbottom1[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }
                                            }elseif($level == 3){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_6,2);   
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }  
                                                    //$comagtop3[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom3[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtod3[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtop2[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom2[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtod2[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtop1[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom1[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }
                                            }elseif($level == 2){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                        if($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }  
                                                   // $comagtop3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                       
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtod3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                       
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                            if($usebet_c->amount_5 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtop2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                            if($usebet_c->amount_5 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    //$comagbottom2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                       
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtod2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtop1[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom1[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }
                                            }elseif($level == 1){
                                                if($usebet_c->type=="top3"){
                                                    // $sumagtop3[$key] += number_format($usebet_c->amount_2,2);

                                                    if($usebet_c->amount_2 != 0){
                                                        if($usebet_c->amount_3 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                        }elseif($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_3 != 0){
                                                        if($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }  
                                                   // $comagtop3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    if($usebet_c->amount_2 != 0){
                                                        if($usebet_c->amount_3 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                        }elseif($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                    // $sumagbottom3[$key] += number_format($usebet_c->amount_2,2);
                                                    }elseif($usebet_c->amount_3 != 0){
                                                       
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        // $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        // $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        // $comagbottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    // $sumagtod3[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_2 != 0){
                                                        if($usebet_c->amount_3 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                        }elseif($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                    }elseif($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        // $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        // $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        // $comagtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtod3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    // $sumagtop2[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_2 != 0){
                                                        if($usebet_c->amount_3 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                        }elseif($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                    }elseif($usebet_c->amount_3 != 0){
                                                       
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        // $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                            if($usebet_c->amount_5 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        // $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        // $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        // $comagtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtop2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    // $sumagbottom2[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_2 != 0){
                                                        if($usebet_c->amount_3 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                        }elseif($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                    }elseif($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        // $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                            if($usebet_c->amount_5 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        // $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        // $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        // $comagbottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    //$comagbottom2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                  //  $sumagtod2[$key] += number_format($usebet_c->amount_2,2);
                                                  if($usebet_c->amount_2 != 0){
                                                    if($usebet_c->amount_3 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                    }else{
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                    }
                                                 } elseif($usebet_c->amount_3 != 0){
                                                       
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                      //  $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                       // $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                       // $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                      //  $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                      //  $comagtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtod2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top1"){
                                                  //  $sumagtop1[$key] += number_format($usebet_c->amount_2,2);
                                                  if($usebet_c->amount_2 != 0){
                                                    if($usebet_c->amount_3 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                    }else{
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                    }
                                                }elseif($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                       // $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                      //  $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                       // $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                      //  $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                      //  $comagtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtop1[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                  //  $sumagbottom1[$key] += number_format($usebet_c->amount_2,2);
                                                  if($usebet_c->amount_2 != 0){
                                                    if($usebet_c->amount_3 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                    }else{
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                    }
                                                }elseif($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                     //   $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                      //  $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                      //  $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                      //  $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                     //   $comagbottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom1[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }
                                            }
                                            /////////////////////COMPANY//////////////////////////////
                                            if($level == 6){
                                                if($usebet_c->type=="top3"){
                                                    $sumcompanytop3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop3[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumcompanybottom3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom3[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumcompanytod3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod3[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumcompanytop2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop2[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumcompanybottom2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom2[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumcompanytod2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod2[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumcompanytop1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop1[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumcompanybottom1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom1[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }
                                            }elseif($level == 5){
                                                if($usebet_c->type=="top3"){
                                                    $sumcompanytop3[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop3[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumcompanybottom3[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom3[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumcompanytod3[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod3[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumcompanytop2[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop2[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumcompanybottom2[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom2[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumcompanytod2[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod2[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumcompanytop1[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop1[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumcompanybottom1[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom1[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }
                                            }elseif($level == 4){
                                                if($usebet_c->type=="top3"){
                                                    $sumcompanytop3[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop3[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumcompanybottom3[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom3[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumcompanytod3[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod3[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumcompanytop2[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop2[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumcompanybottom2[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom2[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumcompanytod2[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod2[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumcompanytop1[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop1[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumcompanybottom1[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom1[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }
                                            }elseif($level == 3){
                                                if($usebet_c->type=="top3"){
                                                    $sumcompanytop3[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop3[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumcompanybottom3[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom3[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumcompanytod3[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod3[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumcompanytop2[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop2[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumcompanybottom2[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom2[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumcompanytod2[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod2[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumcompanytop1[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop1[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumcompanybottom1[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom1[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }
                                            }elseif($level == 2){
                                                if($usebet_c->type=="top3"){
                                                    $sumcompanytop3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytop3[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumcompanybottom3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanybottom3[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumcompanytod3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytod3[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumcompanytop2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytop2[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumcompanybottom2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanybottom2[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumcompanytod2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytod2[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumcompanytop1[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytop1[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumcompanybottom1[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanybottom1[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }
                                            }elseif($level == 1){
                                                if($usebet_c->type=="top3"){
                                                    $sumcompanytop3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytop3[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumcompanybottom3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanybottom3[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumcompanytod3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytod3[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumcompanytop2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytop2[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumcompanybottom2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanybottom2[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumcompanytod2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytod2[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumcompanytop1[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytop1[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumcompanybottom1[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanybottom1[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }
                                            }

                                               

                                }
                                $usersum_s[$key] = number_format($sumtop3[$key]+$sumbottom3[$key]+$sumtod3[$key]+$sumtop2[$key]+$sumbottom2[$key]+$sumtod2[$key]+$sumtop1[$key]+$sumbottom1[$key],2);
                                $usercom_s[$key] = number_format($comtop3[$key]+$combottom3[$key]+$comtod3[$key]+$comtop2[$key]+$combottom2[$key]+$comtod2[$key]+$comtop1[$key]+$combottom1[$key],2);
                                $usersumall[$key] = number_format($usersum_s[$key]+$usercom_s[$key],2);
                                ///////////////////////////AG///////////////////////////////////////////////////////////////
                                $agsum_s[$key] = number_format($sumagtop3[$key]+$sumagbottom3[$key]+$sumagtod3[$key]+$sumagtop2[$key]+$sumagbottom2[$key]+$sumagtod2[$key]+$sumagtop1[$key]+$sumagbottom1[$key],2);
                                $agcom_s[$key] = number_format($comagtop3[$key]+$comagbottom3[$key]+$comagtod3[$key]+$comagtop2[$key]+$comagbottom2[$key]+$comagtod2[$key]+$comagtop1[$key]+$comagbottom1[$key],2);
                                $agsumall[$key] = number_format($agsum_s[$key]+$agcom_s[$key],2);
                                //////////////////////////COMPANY////////////////////////////////////////////////////////////////
                                $companysum_s[$key] = number_format($sumcompanytop3[$key]+$sumcompanybottom3[$key]+$sumcompanytod3[$key]+$sumcompanytop2[$key]+$sumcompanybottom2[$key]+$sumcompanytod2[$key]+$sumcompanytop1[$key]+$sumcompanybottom1[$key],2);
                                $companycom_s[$key] = number_format($comcompanytop3[$key]+$comcompanybottom3[$key]+$comcompanytod3[$key]+$comcompanytop2[$key]+$comcompanybottom2[$key]+$comcompanytod2[$key]+$comcompanytop1[$key]+$comcompanybottom1[$key],2);
                                $companysumall[$key] = number_format($companysum_s[$key]-$companycom_s[$key],2); 
                                /////////////////////////TAP2/////////////////////////////////////////////////////////////////////
                                foreach($sumtop3 as $sumtop3s){
                                    $sum_top3 += $sumtop3s;
                                }foreach($sumbottom3 as $sumbottom3s){
                                    $sum_bottom3 += $sumbottom3s;
                                }foreach($sumtod3 as $sumtod3s){
                                    $sum_tod3 += $sumtod3s;
                                }foreach($sumtop2 as $sumtop2s){
                                    $sum_top2 += $sumtop2s;
                                }foreach($sumbottom2 as $sumbottom2s){
                                    $sum_bottom2 += $sumbottom2s;
                                }foreach($sumtod2 as $sumtod2s){
                                    $sum_tod2 += $sumtod2s;
                                }foreach($sumtop1 as $sumtop1s){
                                    $sum_top1 += $sumtop1s;
                                }foreach($sumbottom1 as $sumbottom1s){
                                    $sum_bottom1 += $sumbottom1s;
                                }
                                //Com User
                                foreach($comtop3 as $comtop3s){
                                    $com_top3 += $comtop3s;
                                }foreach($combottom3 as $combottom3s){
                                    $com_bottom3 += $combottom3s;
                                }foreach($comtod3 as $comtod3s){
                                    $com_tod3 += $comtod3s;
                                }foreach($comtop2 as $comtop2s){
                                    $com_top2 += $comtop2s;
                                }foreach($combottom2 as $combottom2s){
                                    $com_bottom2 += $combottom2s;
                                }foreach($comtod2 as $comtod2s){
                                    $com_tod2 += $comtod2s;
                                }foreach($comtop1 as $comtop1s){
                                    $com_top1 += $comtop1s;
                                }foreach($combottom1 as $combottom1s){
                                    $com_bottom1 += $combottom1s;
                                }

                                $sumusertop3 =  $sum_top3+$com_top3;
                                $sumuserbottom3 =  $sum_bottom3+$com_bottom3;
                                $sumusertod3 =  $sum_tod3+$com_tod3;
                                $sumusertop2 =  $sum_top2+$com_top2;
                                $sumuserbottom2 =  $sum_bottom2+$com_bottom2;
                                $sumusertod2 =  $sum_tod2+$com_tod2;
                                $sumusertop1 =  $sum_top1+$com_top1;
                                $sumuserbottom1 =  $sum_bottom1+$com_bottom1;
                                ///////////////////////AGENT///////////////////////////////////////////////
                                foreach($sumagtop3 as $sumagtop3s){
                                    $sum_agtop3 += $sumagtop3s;
                                }foreach($sumagbottom3 as $sumagbottom3s){
                                    $sum_agbottom3 += $sumagbottom3s;
                                }foreach($sumagtod3 as $sumagtod3s){
                                    $sum_agtod3 += $sumagtod3s;
                                }foreach($sumagtop2 as $sumagtop2s){
                                    $sum_agtop2 += $sumagtop2s;
                                }foreach($sumagbottom2 as $sumagbottom2s){
                                    $sum_agbottom2 += $sumagbottom2s;
                                }foreach($sumagtod2 as $sumagtod2s){
                                    $sum_agtod2 += $sumagtod2s;
                                }foreach($sumagtop1 as $sumagtop1s){
                                    $sum_agtop1 += $sumagtop1s;
                                }foreach($sumagbottom1 as $sumagbottom1s){
                                    $sum_agbottom1 += $sumagbottom1s;
                                }
                                // Com AG
                                foreach($comagtop3 as $comagtop3s){
                                    $com_agtop3 += $comagtop3s;
                                }foreach($comagbottom3 as $comagbottom3s){
                                    $com_agbottom3 += $comagbottom3s;
                                }foreach($comagtod3 as $comagtod3s){
                                    $com_agtod3 += $comagtod3s;
                                }foreach($comagtop2 as $comagtop2s){
                                    $com_agtop2 += $comagtop2s;
                                }foreach($comagbottom2 as $comagbottom2s){
                                    $com_agbottom2 += $comagbottom2s;
                                }foreach($comagtod2 as $comagtod2s){
                                    $com_agtod2 += $comagtod2s;
                                }foreach($comagtop1 as $comagtop1s){
                                    $com_agtop1 += $comagtop1s;
                                }foreach($comagbottom1 as $comagbottom1s){
                                    $com_agbottom1 += $comagbottom1s;
                                }
                                $sumag_top3 = $sum_agtop3+$com_agtop3;
                                $sumag_bottom3 = $sum_agbottom3+$com_agbottom3;
                                $sumag_tod3 = $sum_agtod3+$com_agtod3;
                                $sumag_top2 = $sum_agtop2+$com_agtop2;
                                $sumag_bottom2 = $sum_agbottom2+$com_agbottom2;
                                $sumag_tod2 = $sum_agtod2+$com_agtod2;
                                $sumag_top1 = $sum_agtop1+$com_agtop1;
                                $sumag_bottom1 = $sum_agbottom1+$com_agbottom1;
                                /////////////////////COMPANY///////////////////////////////
                                foreach($sumcompanytop3 as $sumcompanytop3s){
                                    $sumcompany_top3 += $sumcompanytop3s;
                                }foreach($sumcompanybottom3 as $sumcompanybottom3s){
                                    $sumcompany_bottom3 += $sumcompanybottom3s;
                                }foreach($sumcompanytod3 as $sumcompanytod3s){
                                    $sumcompany_tod3 += $sumcompanytod3s;
                                }foreach($sumcompanytop2 as $sumcompanytop2s){
                                    $sumcompany_top2 += $sumcompanytop2s;
                                }foreach($sumcompanybottom2 as $sumcompanybottom2s){
                                    $sumcompany_bottom2 += $sumcompanybottom2s;
                                }foreach($sumcompanytod2 as $sumcompanytod2s){
                                    $sumcompany_tod2 += $sumcompanytod2s;
                                }foreach($sumcompanytop1 as $sumcompanytop1s){
                                    $sumcompany_top1 += $sumcompanytop1s;
                                }foreach($sumcompanybottom1 as $sumcompanybottom1s){
                                    $sumcompany_bottom1 += $sumcompanybottom1s;
                                }
                                // COMPANY AG
                                foreach($comcompanytop3 as $comcompanytop3s){
                                    $comcompany_top3 += $comcompanytop3s;
                                }foreach($comcompanybottom3 as $comcompanybottom3s){
                                    $comcompany_bottom3 += $comcompanybottom3s;
                                }foreach($comcompanytod3 as $comcompanytod3s){
                                    $comcompany_tod3 += $comcompanytod3s;
                                }foreach($comcompanytop2 as $comcompanytop2s){
                                    $comcompany_top2 += $comcompanytop2s;
                                }foreach($comcompanybottom2 as $comcompanybottom2s){
                                    $comcompany_bottom2 += $comcompanybottom2s;
                                }foreach($comcompanytod2 as $comcompanytod2s){
                                    $comcompany_tod2 += $comcompanytod2s;
                                }foreach($comcompanytop1 as $comcompanytop1s){
                                    $comcompany_top1 += $comcompanytop1s;
                                }foreach($comcompanybottom1 as $comcompanybottom1s){
                                    $comcompany_bottom1 += $comcompanybottom1s;
                                }

                                $sumtop3_company = $sumcompany_top3-$comcompany_top3;
                                $sumbottom3_company = $sumcompany_bottom3-$comcompany_bottom3;
                                $sumtod3_company = $sumcompany_tod3-$comcompany_tod3;
                                $sumtop2_company = $sumcompany_top2-$comcompany_top2;
                                $sumbottom2_company = $sumcompany_bottom2-$comcompany_bottom2;
                                $sumtod2_company = $sumcompany_tod2-$comcompany_tod2;
                                $sumtop1_company = $sumcompany_top1-$comcompany_top1;
                                $sumbottom1_company = $sumcompany_bottom1-$comcompany_bottom1;

                                $sumallmembers = $sum_top3+$sum_bottom3+$sum_tod3+$sum_top2+$sum_bottom2+$sum_tod2+$sum_top1+$sum_bottom1;
                                $sumallcommembers = $com_top3+$com_bottom3+$com_tod3+$com_top2+$com_bottom2+$com_tod2+$com_top1+$com_bottom1;
                                $sumallcounts = $sumusertop3+$sumuserbottom3+$sumusertod3+$sumusertop2+$sumuserbottom2+$sumusertod2+$sumusertop1+$sumuserbottom1;

                                $sumallags = $sum_agtop3+$sum_agbottom3+$sum_agtod3+$sum_agtop2+$sum_agbottom2+$sum_agtod2+$sum_agtop1+$sum_agbottom1;
                                $sumallcomags = $com_agtop3+$com_agbottom3+$com_agtod3+$com_agtop2+$com_agbottom2+$com_agtod2+$com_agtop1+$com_agbottom1;
                                $sumallagcounts = $sumag_top3+$sumag_bottom3+$sumag_tod3+$sumag_top2+$sumag_bottom2+$sumag_tod2+$sumag_top1+$sumag_bottom1;

                                $sumallcompanys = $sumcompany_top3+$sumcompany_bottom3+$sumcompany_tod3+$sumcompany_top2+$sumcompany_bottom2+$sumcompany_tod2+$sumcompany_top1+$sumcompany_bottom1;
                                $sumallcomcompanys = $comcompany_top3+$comcompany_bottom3+$comcompany_tod3+$comcompany_top2+$comcompany_bottom2+$comcompany_tod2+$comcompany_top1+$comcompany_bottom1;
                                $sumallcountcompanys = $sumtop3_company+$sumbottom3_company+$sumtod3_company+$sumtop2_company+$sumbottom2_company+$sumtod2_company+$sumtop1_company+$sumbottom1_company;

                    }  
                }
          
        }

        $aOne = array('sumallmember'=>$sumallmembers,
                    'sumallcommembers'=>$sumallcommembers,
                    'sumallcounts'=>$sumallcounts,
                    'sumallags'=>$sumallags,
                    'sumallcomags'=>$sumallcomags,
                    'sumallagcounts'=>$sumallagcounts,
                    'sumallcompanys'=>$sumallcompanys,
                    'sumallcomcompanys'=>$sumallcomcompanys,
                    'sumallcountcompanys'=>$sumallcountcompanys);
       
    
        
        
        // foreach ($aOne as  $aOnes) {
           
        //     dd($aOnes);
        // }
        // dd($sumtop3);
        // return view('listlottery.listlotuser.index',compact('userbets','usersum_s'));
        return view('listlottery.listlotuser.index',compact('usersum_s','usercom_s','usersumall',
                                                            'agsum_s', 'agcom_s', 'agsumall',
                                                            'companysum_s', 'companycom_s', 'companysumall','aOne','usebet_s','member_name','level_member',
                                                            'sum_top3','sum_bottom3','sum_tod3',
                                                            'sum_top2','sum_bottom2','sum_tod2',
                                                            'sum_top1','sum_bottom1',
                                                            'com_top3','com_bottom3','com_tod3',
                                                            'com_top2','com_bottom2','com_tod2',
                                                            'com_top1','com_bottom1',
                                                            'sumusertop3','sumuserbottom3','sumusertod3',
                                                            'sumusertop2','sumuserbottom2','sumusertod2',
                                                            'sumusertop1','sumuserbottom1',
                                                            'sum_agtop3','sum_agbottom3','sum_agtod3',
                                                            'sum_agtop2','sum_agbottom2','sum_agtod2',
                                                            'sum_agtop1','sum_agbottom1',
                                                            'com_agtop3','com_agbottom3','com_agtod3',
                                                            'com_agtop2','com_agbottom2','com_agtod2',
                                                            'com_agtop1','com_agbottom1',
                                                            'sumag_top3','sumag_bottom3','sumag_tod3',
                                                            'sumag_top2','sumag_bottom2','sumag_tod2',
                                                            'sumag_top1','sumag_bottom1',
                                                            'sumcompany_top3','sumcompany_bottom3','sumcompany_tod3',
                                                            'sumcompany_top2','sumcompany_bottom2','sumcompany_tod2',
                                                            'sumcompany_top1','sumcompany_bottom1',
                                                            'comcompany_top3','comcompany_bottom3','comcompany_tod3',
                                                            'comcompany_top2','comcompany_bottom2','comcompany_tod2',
                                                            'comcompany_top1','comcompany_bottom1',
                                                            'sumtop3_company','sumbottom3_company','sumtod3_company',
                                                            'sumtop2_company','sumbottom2_company','sumtod2_company',
                                                            'sumtop1_company','sumbottom1_company','memberlist_id'));
     
    }

    public function listlotuser2()
    {
        $id = auth()->user()->id;
        $level = auth()->user()->level;
        $idlotto = request("id");
        $lotto = Lotto::find($idlotto);
        $tickets = Ticket::where('lotto_id',$idlotto)->get();
        if($level == 6){
            $levellog = 'Agent';
        }elseif($level == 5){
            $levellog = 'Master';
        }elseif($level == 4){
            $levellog = 'Senior';
        }elseif($level == 3){
            $levellog = 'Super Senior';
        }elseif($level == 2){
            $levellog = 'Pathner';
        }elseif($level == 1){
            $levellog = 'Admin';
        }

        foreach ($tickets as $key => $ticket) {
            $usebets[$key] = Userbet::where('ticket_id', $ticket->id)
                                        ->with('member')
                                        ->select(DB::Raw('member_id'))
                                        ->groupBy('member_id')
                                        ->get();
            //$usebet_s[$key] = Userbet::where('ticket_id', $ticket->id)->get();
            

            
        }

        foreach ($usebets as $key => $usebet) {
            foreach ($usebet as $key => $value) {
                $datamember_id[] = $value->member_id;
            }
        }
        foreach (array_unique( $datamember_id ) as $key => $member_id) {
            $usebet_s[$member_id] = Userbet::where('lotto_id', $idlotto)->where('member_id', $member_id)->get();
            $datamember_id[$member_id] = $member_id;
            $member_lavel[$member_id] = Member::find($usebet[0]->member_id);
        }
        // return response()->json([
        //     'usebets'=>$usebet_s,
        //     'datamember_id'=>$datamember_id
        // ]);
        
        foreach ($usebet_s as $key => $usebet) {
            $member = Member::find($usebet[0]->member_id);
            $useradddetail =$member->useradddetail;
            //$member_name[$key] = $member->username;
            $useradddetails = explode(" ", $useradddetail);
                foreach ($useradddetails as $loop_i => $useradddetail) {
                    if($useradddetail==$id){
                            $it_have[] =$key;
                            $sumtop3[$key] =0;
                            $sumbottom3[$key] =0;
                            $sumtod3[$key] =0;
                            $sumtop2[$key] =0;
                            $sumbottom2[$key] =0;
                            $sumtod2[$key] =0;
                            $sumtop1[$key] =0;
                            $sumbottom1[$key] =0;
                            
                            //////////////////////////////////
                            $comtop3[$key] =0;
                            $combottom3[$key] =0;
                            $comtod3[$key] =0;
                            $comtop2[$key] =0;
                            $combottom2[$key] =0;
                            $comtod2[$key] =0;
                            $comtop1[$key] =0;
                            $combottom1[$key] =0;
                            /////////////////////////////////
                            $usercom_s[$key] =0;
                            $usersum_s[$key] =0;
                            $usersumall[$key] =0;

                            //////AG///////////////////
                            $sumagtop3[$key] =0;
                            $sumagbottom3[$key] =0;
                            $sumagtod3[$key] =0;
                            $sumagtop2[$key] =0;
                            $sumagbottom2[$key] =0;
                            $sumagtod2[$key] =0;
                            $sumagtop1[$key] =0;
                            $sumagbottom1[$key] =0;
                            
                            //////////////////////////////////
                            $comagtop3[$key] =0;
                            $comagbottom3[$key] =0;
                            $comagtod3[$key] =0;
                            $comagtop2[$key] =0;
                            $comagbottom2[$key] =0;
                            $comagtod2[$key] =0;
                            $comagtop1[$key] =0;
                            $comagbottom1[$key] =0;
                            /////////////////////////////////
                            $agcom_s[$key] =0;
                            $agsum_s[$key] =0;
                            $agsumall[$key] =0;

                            //////COMPANY///////////////////
                            $sumcompanytop3[$key] =0;
                            $sumcompanybottom3[$key] =0;
                            $sumcompanytod3[$key] =0;
                            $sumcompanytop2[$key] =0;
                            $sumcompanybottom2[$key] =0;
                            $sumcompanytod2[$key] =0;
                            $sumcompanytop1[$key] =0;
                            $sumcompanybottom1[$key] =0;
                            
                            //////////////////////////////////
                            $comcompanytop3[$key] =0;
                            $comcompanybottom3[$key] =0;
                            $comcompanytod3[$key] =0;
                            $comcompanytop2[$key] =0;
                            $comcompanybottom2[$key] =0;
                            $comcompanytod2[$key] =0;
                            $comcompanytop1[$key] =0;
                            $comcompanybottom1[$key] =0;
                            /////////////////////////////////
                            $companycom_s[$key] =0;
                            $companysum_s[$key] =0;
                            $companysumall[$key] =0;
                            /////////////////////////////////
                            $sum_top3 =0;
                            $sum_bottom3 =0;
                            $sum_tod3 =0;
                            $sum_top2 =0;
                            $sum_bottom2 =0;
                            $sum_tod2 =0;
                            $sum_top1 =0;
                            $sum_bottom1 =0;
                            /////////////////////////////////
                            $com_top3 =0;
                            $com_bottom3 =0;
                            $com_tod3 =0;
                            $com_top2 =0;
                            $com_bottom2 =0;
                            $com_tod2 =0;
                            $com_top1 =0;
                            $com_bottom1 =0;
                            /////////////////////////////////
                            $sum_agtop3 =0;
                            $sum_agbottom3 =0;
                            $sum_agtod3 =0;
                            $sum_agtop2 =0;
                            $sum_agbottom2 =0;
                            $sum_agtod2 =0;
                            $sum_agtop1 =0;
                            $sum_agbottom1 =0;
                            /////////////////////////////////
                            $com_agtop3 =0;
                            $com_agbottom3 =0;
                            $com_agtod3 =0;
                            $com_agtop2 =0;
                            $com_agbottom2 =0;
                            $com_agtod2 =0;
                            $com_agtop1 =0;
                            $com_agbottom1 =0;
                            //////COMPANY////////////////////
                            $sumcompany_top3 =0;
                            $sumcompany_bottom3 =0;
                            $sumcompany_tod3 =0;
                            $sumcompany_top2 =0;
                            $sumcompany_bottom2 =0;
                            $sumcompany_tod2 =0;
                            $sumcompany_top1 =0;
                            $sumcompany_bottom1 =0;
                            /////////////////////////////////
                            $comcompany_top3 =0;
                            $comcompany_bottom3 =0;
                            $comcompany_tod3 =0;
                            $comcompany_top2 =0;
                            $comcompany_bottom2 =0;
                            $comcompany_tod2 =0;
                            $comcompany_top1 =0;
                            $comcompany_bottom1 =0;

                            $member_name[$key] = $member->username;
                            $memberlist_id[$key] = $member->id;
                            $userbets_[$key] = $usebet[0]->ticket_id;
                            //$userbets_[$key] = Userbet::where('id', $usebet[0]->id)->get();
                            //$userbets_[$key] = Userbet::where('ticket_id', $usebet[0]->ticket_id)->get();
                            $userbets_[$key] = $usebet_s[$key];
                                foreach ($userbets_[$key] as $loop_i => $usebet_c) {
                                   
                                            $data[] = $usebet_c;

                                            /////////////////////AG/////////////////////////////////
                                            if($level == 6){
                                                if($usebet_c->type=="top3"){
                                                    $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                    $comtop3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                    $combottom3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagbottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="tod3"){
                                                    $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                    $comtod3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="top2"){
                                                    $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                    $comtop2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                    $combottom2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagbottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="tod2"){
                                                    $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                    $comtod2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="top1"){
                                                    $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                    $comtop1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                    $combottom1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagbottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                }
                                            }elseif($level == 5){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                            $comtop3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                            $combottom3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagbottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagbottom3[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                            $comtod3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagtod3[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                            $comtop2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagtop2[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                            $combottom2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagbottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagbottom2[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                            $comtod2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagtod2[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                            $comtop1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagtop1[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                            $combottom1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagbottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    //$comagbottom1[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }
                                            }elseif($level == 4){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }        
                                                    //$comagtop3[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }  
                                                    //$comagbottom3[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    //$comagtod3[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }
                                                    //$comagtop2[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }
                                                    //$comagbottom2[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }
                                                    //$comagtod2[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }
                                                    //$comagtop1[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }
                                                    //$comagbottom1[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }
                                            }elseif($level == 3){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_6,2);   
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }  
                                                    //$comagtop3[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom3[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtod3[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtop2[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom2[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtod2[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtop1[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom1[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }
                                            }elseif($level == 2){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                        if($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }  
                                                   // $comagtop3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                       
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtod3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                       
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                            if($usebet_c->amount_5 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtop2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                            if($usebet_c->amount_5 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    //$comagbottom2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                       
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtod2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtop1[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom1[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }
                                            }elseif($level == 1){
                                                if($usebet_c->type=="top3"){
                                                    // $sumagtop3[$key] += number_format($usebet_c->amount_2,2);

                                                    if($usebet_c->amount_2 != 0){
                                                        if($usebet_c->amount_3 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                        }elseif($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_3 != 0){
                                                        if($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_3,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }  
                                                   // $comagtop3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    if($usebet_c->amount_2 != 0){
                                                        if($usebet_c->amount_3 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                        }elseif($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                    // $sumagbottom3[$key] += number_format($usebet_c->amount_2,2);
                                                    }elseif($usebet_c->amount_3 != 0){
                                                       
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        // $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        // $comagbottom3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        // $comagbottom3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    // $sumagtod3[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_2 != 0){
                                                        if($usebet_c->amount_3 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                        }elseif($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                    }elseif($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtod3[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        // $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        // $comagtod3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod3[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        // $comagtod3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtod3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    // $sumagtop2[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_2 != 0){
                                                        if($usebet_c->amount_3 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                        }elseif($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                    }elseif($usebet_c->amount_3 != 0){
                                                       
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtop2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        // $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                            if($usebet_c->amount_5 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtop2[$key] += number_format($usebet_c->amount_4,2);
                                                                $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        // $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        // $comagtop2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        // $comagtop2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtop2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    // $sumagbottom2[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_2 != 0){
                                                        if($usebet_c->amount_3 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                        }elseif($usebet_c->amount_4 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                            $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                    }elseif($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        // $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                            if($usebet_c->amount_5 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                                $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                        // $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        // $comagbottom2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        // $comagbottom2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    //$comagbottom2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                  //  $sumagtod2[$key] += number_format($usebet_c->amount_2,2);
                                                  if($usebet_c->amount_2 != 0){
                                                    if($usebet_c->amount_3 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                    }else{
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                    }
                                                 } elseif($usebet_c->amount_3 != 0){
                                                       
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtod2[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                      //  $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                       // $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtod2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                       // $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                      //  $comagtod2[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtod2[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                      //  $comagtod2[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtod2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top1"){
                                                  //  $sumagtop1[$key] += number_format($usebet_c->amount_2,2);
                                                  if($usebet_c->amount_2 != 0){
                                                    if($usebet_c->amount_3 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                    }else{
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                    }
                                                }elseif($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumtop1[$key] += number_format($usebet_c->amount_3,2);
                                                                $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                       // $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_4,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                      //  $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumtop1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                       // $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_6,2);
                                                        $comtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                      //  $comagtop1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                        $comtop1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                      //  $comagtop1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagtop1[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                  //  $sumagbottom1[$key] += number_format($usebet_c->amount_2,2);
                                                  if($usebet_c->amount_2 != 0){
                                                    if($usebet_c->amount_3 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                    }else{
                                                        $sumtop3[$key] += number_format($usebet_c->amount_2,2);
                                                        $comtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                    }
                                                }elseif($usebet_c->amount_3 != 0){
                                                        
                                                            if($usebet_c->amount_4 != 0){
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                            }elseif($usebet_c->amount_5 != 0){
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                            }elseif($usebet_c->amount_6 != 0){
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                            }else{
                                                                $sumbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                                $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                            }
                                                     //   $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                      //  $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbottom1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                      //  $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                        $combottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                      //  $comagbottom1[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                        $combottom1[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                     //   $comagbottom1[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    } 
                                                    // $comagbottom1[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }
                                            }
                                            /////////////////////COMPANY//////////////////////////////
                                            if($level == 6){
                                                if($usebet_c->type=="top3"){
                                                    $sumcompanytop3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop3[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumcompanybottom3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom3[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumcompanytod3[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod3[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumcompanytop2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop2[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumcompanybottom2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom2[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumcompanytod2[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod2[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumcompanytop1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop1[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumcompanybottom1[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom1[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                }
                                            }elseif($level == 5){
                                                if($usebet_c->type=="top3"){
                                                    $sumcompanytop3[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop3[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumcompanybottom3[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom3[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumcompanytod3[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod3[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumcompanytop2[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop2[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumcompanybottom2[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom2[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumcompanytod2[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod2[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumcompanytop1[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop1[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumcompanybottom1[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom1[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                }
                                            }elseif($level == 4){
                                                if($usebet_c->type=="top3"){
                                                    $sumcompanytop3[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop3[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumcompanybottom3[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom3[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumcompanytod3[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod3[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumcompanytop2[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop2[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumcompanybottom2[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom2[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumcompanytod2[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod2[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumcompanytop1[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop1[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumcompanybottom1[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom1[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                }
                                            }elseif($level == 3){
                                                if($usebet_c->type=="top3"){
                                                    $sumcompanytop3[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop3[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumcompanybottom3[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom3[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumcompanytod3[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod3[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumcompanytop2[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop2[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumcompanybottom2[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom2[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumcompanytod2[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytod2[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumcompanytop1[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanytop1[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumcompanybottom1[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comcompanybottom1[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                }
                                            }elseif($level == 2){
                                                if($usebet_c->type=="top3"){
                                                    $sumcompanytop3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytop3[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumcompanybottom3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanybottom3[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumcompanytod3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytod3[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumcompanytop2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytop2[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumcompanybottom2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanybottom2[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumcompanytod2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytod2[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumcompanytop1[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytop1[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumcompanybottom1[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanybottom1[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                }
                                            }elseif($level == 1){
                                                if($usebet_c->type=="top3"){
                                                    $sumcompanytop3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytop3[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumcompanybottom3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanybottom3[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumcompanytod3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytod3[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumcompanytop2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytop2[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumcompanybottom2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanybottom2[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumcompanytod2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytod2[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumcompanytop1[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanytop1[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumcompanybottom1[$key] += number_format($usebet_c->amount_1,2);
                                                    $comcompanybottom1[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }
                                            }

                                               

                                }
                                $usersum_s[$key] = number_format($sumtop3[$key]+$sumbottom3[$key]+$sumtod3[$key]+$sumtop2[$key]+$sumbottom2[$key]+$sumtod2[$key]+$sumtop1[$key]+$sumbottom1[$key],2);
                                $usercom_s[$key] = number_format($comtop3[$key]+$combottom3[$key]+$comtod3[$key]+$comtop2[$key]+$combottom2[$key]+$comtod2[$key]+$comtop1[$key]+$combottom1[$key],2);
                                $usersumall[$key] = number_format($usersum_s[$key]+$usercom_s[$key],2);
                                ///////////////////////////AG///////////////////////////////////////////////////////////////
                                $agsum_s[$key] = number_format($sumagtop3[$key]+$sumagbottom3[$key]+$sumagtod3[$key]+$sumagtop2[$key]+$sumagbottom2[$key]+$sumagtod2[$key]+$sumagtop1[$key]+$sumagbottom1[$key],2);
                                $agcom_s[$key] = number_format($comagtop3[$key]+$comagbottom3[$key]+$comagtod3[$key]+$comagtop2[$key]+$comagbottom2[$key]+$comagtod2[$key]+$comagtop1[$key]+$comagbottom1[$key],2);
                                $agsumall[$key] = number_format($agsum_s[$key]+$agcom_s[$key],2);
                                //////////////////////////COMPANY////////////////////////////////////////////////////////////////
                                $companysum_s[$key] = number_format($sumcompanytop3[$key]+$sumcompanybottom3[$key]+$sumcompanytod3[$key]+$sumcompanytop2[$key]+$sumcompanybottom2[$key]+$sumcompanytod2[$key]+$sumcompanytop1[$key]+$sumcompanybottom1[$key],2);
                                $companycom_s[$key] = number_format($comcompanytop3[$key]+$comcompanybottom3[$key]+$comcompanytod3[$key]+$comcompanytop2[$key]+$comcompanybottom2[$key]+$comcompanytod2[$key]+$comcompanytop1[$key]+$comcompanybottom1[$key],2);
                                $companysumall[$key] = number_format($companysum_s[$key]-$companycom_s[$key],2); 
                                /////////////////////////TAP2/////////////////////////////////////////////////////////////////////
                                foreach($sumtop3 as $sumtop3s){
                                    $sum_top3 += $sumtop3s;
                                }foreach($sumbottom3 as $sumbottom3s){
                                    $sum_bottom3 += $sumbottom3s;
                                }foreach($sumtod3 as $sumtod3s){
                                    $sum_tod3 += $sumtod3s;
                                }foreach($sumtop2 as $sumtop2s){
                                    $sum_top2 += $sumtop2s;
                                }foreach($sumbottom2 as $sumbottom2s){
                                    $sum_bottom2 += $sumbottom2s;
                                }foreach($sumtod2 as $sumtod2s){
                                    $sum_tod2 += $sumtod2s;
                                }foreach($sumtop1 as $sumtop1s){
                                    $sum_top1 += $sumtop1s;
                                }foreach($sumbottom1 as $sumbottom1s){
                                    $sum_bottom1 += $sumbottom1s;
                                }
                                //Com User
                                foreach($comtop3 as $comtop3s){
                                    $com_top3 += $comtop3s;
                                }foreach($combottom3 as $combottom3s){
                                    $com_bottom3 += $combottom3s;
                                }foreach($comtod3 as $comtod3s){
                                    $com_tod3 += $comtod3s;
                                }foreach($comtop2 as $comtop2s){
                                    $com_top2 += $comtop2s;
                                }foreach($combottom2 as $combottom2s){
                                    $com_bottom2 += $combottom2s;
                                }foreach($comtod2 as $comtod2s){
                                    $com_tod2 += $comtod2s;
                                }foreach($comtop1 as $comtop1s){
                                    $com_top1 += $comtop1s;
                                }foreach($combottom1 as $combottom1s){
                                    $com_bottom1 += $combottom1s;
                                }

                                $sumusertop3 =  $sum_top3+$com_top3;
                                $sumuserbottom3 =  $sum_bottom3+$com_bottom3;
                                $sumusertod3 =  $sum_tod3+$com_tod3;
                                $sumusertop2 =  $sum_top2+$com_top2;
                                $sumuserbottom2 =  $sum_bottom2+$com_bottom2;
                                $sumusertod2 =  $sum_tod2+$com_tod2;
                                $sumusertop1 =  $sum_top1+$com_top1;
                                $sumuserbottom1 =  $sum_bottom1+$com_bottom1;
                                ///////////////////////AGENT///////////////////////////////////////////////
                                foreach($sumagtop3 as $sumagtop3s){
                                    $sum_agtop3 += $sumagtop3s;
                                }foreach($sumagbottom3 as $sumagbottom3s){
                                    $sum_agbottom3 += $sumagbottom3s;
                                }foreach($sumagtod3 as $sumagtod3s){
                                    $sum_agtod3 += $sumagtod3s;
                                }foreach($sumagtop2 as $sumagtop2s){
                                    $sum_agtop2 += $sumagtop2s;
                                }foreach($sumagbottom2 as $sumagbottom2s){
                                    $sum_agbottom2 += $sumagbottom2s;
                                }foreach($sumagtod2 as $sumagtod2s){
                                    $sum_agtod2 += $sumagtod2s;
                                }foreach($sumagtop1 as $sumagtop1s){
                                    $sum_agtop1 += $sumagtop1s;
                                }foreach($sumagbottom1 as $sumagbottom1s){
                                    $sum_agbottom1 += $sumagbottom1s;
                                }
                                // Com AG
                                foreach($comagtop3 as $comagtop3s){
                                    $com_agtop3 += $comagtop3s;
                                }foreach($comagbottom3 as $comagbottom3s){
                                    $com_agbottom3 += $comagbottom3s;
                                }foreach($comagtod3 as $comagtod3s){
                                    $com_agtod3 += $comagtod3s;
                                }foreach($comagtop2 as $comagtop2s){
                                    $com_agtop2 += $comagtop2s;
                                }foreach($comagbottom2 as $comagbottom2s){
                                    $com_agbottom2 += $comagbottom2s;
                                }foreach($comagtod2 as $comagtod2s){
                                    $com_agtod2 += $comagtod2s;
                                }foreach($comagtop1 as $comagtop1s){
                                    $com_agtop1 += $comagtop1s;
                                }foreach($comagbottom1 as $comagbottom1s){
                                    $com_agbottom1 += $comagbottom1s;
                                }
                                $sumag_top3 = $sum_agtop3+$com_agtop3;
                                $sumag_bottom3 = $sum_agbottom3+$com_agbottom3;
                                $sumag_tod3 = $sum_agtod3+$com_agtod3;
                                $sumag_top2 = $sum_agtop2+$com_agtop2;
                                $sumag_bottom2 = $sum_agbottom2+$com_agbottom2;
                                $sumag_tod2 = $sum_agtod2+$com_agtod2;
                                $sumag_top1 = $sum_agtop1+$com_agtop1;
                                $sumag_bottom1 = $sum_agbottom1+$com_agbottom1;
                                /////////////////////COMPANY///////////////////////////////
                                foreach($sumcompanytop3 as $sumcompanytop3s){
                                    $sumcompany_top3 += $sumcompanytop3s;
                                }foreach($sumcompanybottom3 as $sumcompanybottom3s){
                                    $sumcompany_bottom3 += $sumcompanybottom3s;
                                }foreach($sumcompanytod3 as $sumcompanytod3s){
                                    $sumcompany_tod3 += $sumcompanytod3s;
                                }foreach($sumcompanytop2 as $sumcompanytop2s){
                                    $sumcompany_top2 += $sumcompanytop2s;
                                }foreach($sumcompanybottom2 as $sumcompanybottom2s){
                                    $sumcompany_bottom2 += $sumcompanybottom2s;
                                }foreach($sumcompanytod2 as $sumcompanytod2s){
                                    $sumcompany_tod2 += $sumcompanytod2s;
                                }foreach($sumcompanytop1 as $sumcompanytop1s){
                                    $sumcompany_top1 += $sumcompanytop1s;
                                }foreach($sumcompanybottom1 as $sumcompanybottom1s){
                                    $sumcompany_bottom1 += $sumcompanybottom1s;
                                }
                                // COMPANY AG
                                foreach($comcompanytop3 as $comcompanytop3s){
                                    $comcompany_top3 += $comcompanytop3s;
                                }foreach($comcompanybottom3 as $comcompanybottom3s){
                                    $comcompany_bottom3 += $comcompanybottom3s;
                                }foreach($comcompanytod3 as $comcompanytod3s){
                                    $comcompany_tod3 += $comcompanytod3s;
                                }foreach($comcompanytop2 as $comcompanytop2s){
                                    $comcompany_top2 += $comcompanytop2s;
                                }foreach($comcompanybottom2 as $comcompanybottom2s){
                                    $comcompany_bottom2 += $comcompanybottom2s;
                                }foreach($comcompanytod2 as $comcompanytod2s){
                                    $comcompany_tod2 += $comcompanytod2s;
                                }foreach($comcompanytop1 as $comcompanytop1s){
                                    $comcompany_top1 += $comcompanytop1s;
                                }foreach($comcompanybottom1 as $comcompanybottom1s){
                                    $comcompany_bottom1 += $comcompanybottom1s;
                                }

                                $sumtop3_company = $sumcompany_top3-$comcompany_top3;
                                $sumbottom3_company = $sumcompany_bottom3-$comcompany_bottom3;
                                $sumtod3_company = $sumcompany_tod3-$comcompany_tod3;
                                $sumtop2_company = $sumcompany_top2-$comcompany_top2;
                                $sumbottom2_company = $sumcompany_bottom2-$comcompany_bottom2;
                                $sumtod2_company = $sumcompany_tod2-$comcompany_tod2;
                                $sumtop1_company = $sumcompany_top1-$comcompany_top1;
                                $sumbottom1_company = $sumcompany_bottom1-$comcompany_bottom1;

                                $sumallmember = $sum_top3+$sum_bottom3+$sum_tod3+$sum_top2+$sum_bottom2+$sum_tod2+$sum_top1+$sum_bottom1;
                                $sumallcommember = $com_top3+$com_bottom3+$com_tod3+$com_top2+$com_bottom2+$com_tod2+$com_top1+$com_bottom1;
                                $sumallcount = $sumusertop3+$sumuserbottom3+$sumusertod3+$sumusertop2+$sumuserbottom2+$sumusertod2+$sumusertop1+$sumuserbottom1;

                                $sumallag = $sum_agtop3+$sum_agbottom3+$sum_agtod3+$sum_agtop2+$sum_agbottom2+$sum_agtod2+$sum_agtop1+$sum_agbottom1;
                                $sumallcomag = $com_agtop3+$com_agbottom3+$com_agtod3+$com_agtop2+$com_agbottom2+$com_agtod2+$com_agtop1+$com_agbottom1;
                                $sumallagcount = $sumag_top3+$sumag_bottom3+$sumag_tod3+$sumag_top2+$sumag_bottom2+$sumag_tod2+$sumag_top1+$sumag_bottom1;

                                $sumallcompany = $sumcompany_top3+$sumcompany_bottom3+$sumcompany_tod3+$sumcompany_top2+$sumcompany_bottom2+$sumcompany_tod2+$sumcompany_top1+$sumcompany_bottom1;
                                $sumallcomcompany = $comcompany_top3+$comcompany_bottom3+$comcompany_tod3+$comcompany_top2+$comcompany_bottom2+$comcompany_tod2+$comcompany_top1+$comcompany_bottom1;
                                $sumallcountcompany = $sumtop3_company+$sumbottom3_company+$sumtod3_company+$sumtop2_company+$sumbottom2_company+$sumtod2_company+$sumtop1_company+$sumbottom1_company;

                    }  
                }
          
        }

        return response()->json([
            'id'=>$id,
            'lotto'=>$lotto,
            'tickets'=>$tickets,
            'usebets'=>$usebets,
            'levellog'=>$levellog,
            'member_name'=>$member_name,
            'usebet_s'=>$usebet_s,
            'usersum_s'=>$usersum_s,
            'usercom_s'=>$usercom_s,
            'usersumall'=>$usersumall,
            'agsum_s'=>$agsum_s,
            'agcom_s'=>$agcom_s,
            'agsumall'=>$agsumall,
            'companysum_s'=>$companysum_s,
            'companycom_s'=>$companycom_s,
            'companysumall'=>$companysumall,
            'data'=>array_unique( $datamember_id ),
            'member_lavel'=>$member_lavel,
            'userbets_'=>$userbets_,
            'memberlist_id'=>$memberlist_id,

            'sum_top3'=>number_format($sum_top3,2),
            'sum_bottom3'=>number_format($sum_bottom3,2),
            'sum_tod3'=>number_format($sum_tod3,2),
            'sum_top2'=>number_format($sum_top2,2),
            'sum_bottom2'=>number_format($sum_bottom2,2),
            'sum_tod2'=>number_format($sum_tod2,2),
            'sum_top1'=>number_format($sum_top1,2),
            'sum_bottom1'=>number_format($sum_bottom1,2),

            'com_top3'=>number_format($com_top3,2),
            'com_bottom3'=>number_format($com_bottom3,2),
            'com_tod3'=>number_format($com_tod3,2),
            'com_top2'=>number_format($com_top2,2),
            'com_bottom2'=>number_format($com_bottom2,2),
            'com_tod2'=>number_format($com_tod2,2),
            'com_top1'=>number_format($com_top1,2),
            'com_bottom1'=>number_format($com_bottom1,2),

            'sumusertop3'=>number_format($sumusertop3,2),
            'sumuserbottom3'=>number_format($sumuserbottom3,2),
            'sumusertod3'=>number_format($sumusertod3,2),
            'sumusertop2'=>number_format($sumusertop2,2),
            'sumuserbottom2'=>number_format($sumuserbottom2,2),
            'sumusertod2'=>number_format($sumusertod2,2),
            'sumusertop1'=>number_format($sumusertop1,2),
            'sumuserbottom1'=>number_format($sumuserbottom1,2),

            'sum_agtop3'=>number_format($sum_agtop3,2),
            'sum_agbottom3'=>number_format($sum_agbottom3,2),
            'sum_agtod3'=>number_format($sum_agtod3,2),
            'sum_agtop2'=>number_format($sum_agtop2,2),
            'sum_agbottom2'=>number_format($sum_agbottom2,2),
            'sum_agtod2'=>number_format($sum_agtod2,2),
            'sum_agtop1'=>number_format($sum_agtop1,2),
            'sum_agbottom1'=>number_format($sum_agbottom1,2),
            
            'com_agtop3'=>number_format($com_agtop3,2),
            'com_agbottom3'=>number_format($com_agbottom3,2),
            'com_agtod3'=>number_format($com_agtod3,2),
            'com_agtop2'=>number_format($com_agtop2,2),
            'com_agbottom2'=>number_format($com_agbottom2,2),
            'com_agtod2'=>number_format($com_agtod2,2),
            'com_agtop1'=>number_format($com_agtop1,2),
            'com_agbottom1'=>number_format($com_agbottom1,2),

            'sumag_top3'=>number_format($sumag_top3,2),
            'sumag_bottom3'=>number_format($sumag_bottom3,2),
            'sumag_tod3'=>number_format($sumag_tod3,2),
            'sumag_top2'=>number_format($sumag_top2,2),
            'sumag_bottom2'=>number_format($sumag_bottom2,2),
            'sumag_tod2'=>number_format($sumag_tod2,2),
            'sumag_top1'=>number_format($sumag_top1,2),
            'sumag_bottom1'=>number_format($sumag_bottom1,2),

            'sumcompany_top3'=>number_format($sumcompany_top3,2),
            'sumcompany_bottom3'=>number_format($sumcompany_bottom3,2),
            'sumcompany_tod3'=>number_format($sumcompany_tod3,2),
            'sumcompany_top2'=>number_format($sumcompany_top2,2),
            'sumcompany_bottom2'=>number_format($sumcompany_bottom2,2),
            'sumcompany_tod2'=>number_format($sumcompany_tod2,2),
            'sumcompany_top1'=>number_format($sumcompany_top1,2),
            'sumcompany_bottom1'=>number_format($sumcompany_bottom1,2),

            'comcompany_top3'=>number_format($comcompany_top3,2),
            'comcompany_bottom3'=>number_format($comcompany_bottom3,2),
            'comcompany_tod3'=>number_format($comcompany_tod3,2),
            'comcompany_top2'=>number_format($comcompany_top2,2),
            'comcompany_bottom2'=>number_format($comcompany_bottom2,2),
            'comcompany_tod2'=>number_format($comcompany_tod2,2),
            'comcompany_top1'=>number_format($comcompany_top1,2),
            'comcompany_bottom1'=>number_format($comcompany_bottom1,2),

            'sumtop3_company'=>number_format($sumtop3_company,2),
            'sumbottom3_company'=>number_format($sumbottom3_company,2),
            'sumtod3_company'=>number_format($sumtod3_company,2),
            'sumtop2_company'=>number_format($sumtop2_company,2),
            'sumbottom2_company'=>number_format($sumbottom2_company,2),
            'sumtod2_company'=>number_format($sumtod2_company,2),
            'sumtop1_company'=>number_format($sumtop1_company,2),
            'sumbottom1_company'=>number_format($sumbottom1_company,2),

            'sumallmember'=>number_format($sumallmember,2),
            'sumallcommember'=>number_format($sumallcommember,2),
            'sumallcount'=>number_format($sumallcount,2),
            'sumallag'=>number_format($sumallag,2),
            'sumallcomag'=>number_format($sumallcomag,2),
            'sumallagcount'=>number_format($sumallagcount,2),
            'sumallcompany'=>number_format($sumallcompany,2),
            'sumallcomcompany'=>number_format($sumallcomcompany,2),
            'sumallcountcompany'=>number_format($sumallcountcompany,2),
        ]);
    }

    public function list($id){
        // dd($id);
        // $lotto = Lotto::orderBy('id', 'desc')->latest()->first();
        // $userbet = Userbet::where('lotto_id', $lotto->id)->where('member_id',$id)->get();
        $id_choose = $id;
        $id = auth()->user()->id;
        $level = auth()->user()->level;
        $lotto = Lotto::orderBy('id', 'desc')->latest()->first();
        $tickets = Ticket::where('lotto_id',$lotto->id)->get();

        $usebet_s = Userbet::where('lotto_id', $lotto->id)->where('member_id',$id_choose)->get();
        
        $totalmember = 0;
        $totalAg = 0;
        $totalCompany = 0;
        foreach ($usebet_s as $key => $usebet_c) {
            $member = Member::find($usebet_c->member_id);
            $useradddetail =$member->useradddetail;
            $member_name[$key] = $member->username;
            $member_type[$key] = $usebet_c->type;
            $member_ticket[$key] = $usebet_c->ticket_id;
            $member_ratepay[$key] = $usebet_c->latepay;
            $member_date[$key] = $usebet_c->date_time;
            $member_pay[$key] = $usebet_c->pay_7;
            $member_num[$key] = $usebet_c->bet_num;
            
                        
            // $member_keep[$key] = $usebet_c->


            $level_member[$key] = $member->level;
             
                            $it_have[] =$key;
                            $sumbet_mem[$key] =0;
                            $combet_mem[$key] =0;
                            $sumagbet_mem[$key] =0;
                            $comagbet_mem[$key] =0;
                            $sumconpany[$key] =0;
                            $comconpany[$key] =0;
                            $sumtop1[$key] =0;
                            $sumbottom1[$key] =0;
                            $Ag_keep[$key] =0;
                            $sumAG[$key] = 0;
                            
                            
                                            $data[] = $usebet_c;

                                            /////////////////////AG/////////////////////////////////
                                            if($level == 6){
                                                
                                                    $sumbet_mem[$key] += number_format($usebet_c->amount_7,2);
                                                    $combet_mem[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                    $sumagbet_mem[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagbet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                    $Ag_keep[$key] = $usebet_c->keep_6;
                                            }elseif($level == 5){
                                                
                                                    $sumagbet_mem[$key] += number_format($usebet_c->amount_5,2);
                                                    if($usebet_c->amount_6 != 0){
                                                        $sumbet_mem[$key] += number_format($usebet_c->amount_6,2);
                                                        $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);   
                                                        }elseif($usebet_c->amount_7 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_7,2);
                                                            $combet_mem[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                            $comagbet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                            
                                                        }
                                                    $Ag_keep[$key] = $usebet_c->keep_5;
                                                 
                                            }elseif($level == 4){
                                                
                                                    $sumagbet_mem[$key] += number_format($usebet_c->amount_4,2);
                                                    if($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_5,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbet_mem[$key] += number_format($usebet_c->amount_6,2);
                                                        $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbet_mem[$key] += number_format($usebet_c->amount_7,2);
                                                        $combet_mem[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }        
                                                    //$comagtop3[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                $Ag_keep[$key] = $usebet_c->keep_4;
                                            }elseif($level == 3){
                                                
                                                    $sumagbet_mem[$key] += number_format($usebet_c->amount_3,2);
                                                    if($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_4,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_4,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_4,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_5,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbet_mem[$key] += number_format($usebet_c->amount_6,2);   
                                                        $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbet_mem[$key] += number_format($usebet_c->amount_7,2);
                                                        $combet_mem[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }  
                                                    //$comagtop3[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                $Ag_keep[$key] = $usebet_c->keep_3;
                                            }elseif($level == 2){
                                                
                                                    $sumagbet_mem[$key] += number_format($usebet_c->amount_2,2);
                                                    if($usebet_c->amount_3 != 0){
                                                        if($usebet_c->amount_4 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_3,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_3,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_3,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_3,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_4,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_4,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_4,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_5,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbet_mem[$key] += number_format($usebet_c->amount_6,2);
                                                        $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbet_mem[$key] += number_format($usebet_c->amount_7,2);
                                                        $combet_mem[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        $comagbet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }  
                                                   // $comagtop3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                $Ag_keep[$key] = $usebet_c->keep_2;
                                            }elseif($level == 1){
                                                
                                                    // $sumagtop3[$key] += number_format($usebet_c->amount_2,2);

                                                    if($usebet_c->amount_2 != 0){
                                                        if($usebet_c->amount_3 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_2,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                        }elseif($usebet_c->amount_4 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_2,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_2,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_2,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_2,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_3 != 0){
                                                        if($usebet_c->amount_4 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_3,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                        }elseif($usebet_c->amount_5 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_3,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_3,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2)*$usebet_c->com_3/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_3,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_3)*$usebet_c->com_3/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4-$usebet_c->amount_3)*$usebet_c->com_3/100,2);
                                                    }elseif($usebet_c->amount_4 != 0){
                                                        if($usebet_c->amount_5 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_4,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);
                                                        }elseif($usebet_c->amount_6 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_4,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3)*$usebet_c->com_4/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_4,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_4)*$usebet_c->com_4/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5-$usebet_c->amount_4)*$usebet_c->com_4/100,2);
                                                    }elseif($usebet_c->amount_5 != 0){
                                                        if($usebet_c->amount_6 != 0){
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_5,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_1+$usebet_c->amount_2+$usebet_c->amount_3+$usebet_c->amount_4)*$usebet_c->com_5/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);
                                                        }else{
                                                            $sumbet_mem[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_6,2);
                                                            $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        }
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6-$usebet_c->amount_5)*$usebet_c->com_5/100,2);   
                                                    }elseif($usebet_c->amount_6 != 0){
                                                        $sumbet_mem[$key] += number_format($usebet_c->amount_6,2);
                                                        $combet_mem[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_1)*$usebet_c->com_2/100-($usebet_c->amount_7-$usebet_c->amount_6)*$usebet_c->com_6/100,2);          
                                                    }elseif($usebet_c->amount_7 != 0){
                                                        $sumbet_mem[$key] += number_format($usebet_c->amount_7,2);
                                                        $combet_mem[$key] += number_format(-$usebet_c->amount_7*($usebet_c->com_7/100),2);
                                                        // $comagtop3[$key] += number_format(($usebet_c->amount_7-$usebet_c->amount_2)*$usebet_c->com_2/100,2)-($usebet_c->amount_7*($usebet_c->com_7/100));   
                                                        
                                                    }  
                                                   // $comagtop3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                $Ag_keep[$key] = 0;
                                            }
                                            /////////////////////COMPANY//////////////////////////////
                                            if($level == 6){
                                                
                                                    $sumconpany[$key] += number_format($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comconpany[$key] += number_format(($usebet_c->amount_5+$usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_6/100),2);
                                                
                                            }elseif($level == 5){
                                                
                                                    $sumconpany[$key] += number_format($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comconpany[$key] += number_format(($usebet_c->amount_4+$usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_5/100),2);
                                                
                                            }elseif($level == 4){
                                                
                                                    $sumconpany[$key] += number_format($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comconpany[$key] += number_format(($usebet_c->amount_3+$usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_4/100),2);
                                                
                                            }elseif($level == 3){
                                                
                                                    $sumconpany[$key] += number_format($usebet_c->amount_2+$usebet_c->amount_1,2);
                                                    $comconpany[$key] += number_format(($usebet_c->amount_2+$usebet_c->amount_1)*($usebet_c->com_3/100),2);
                                                
                                            }elseif($level == 2){
                                                
                                                    $sumconpany[$key] += number_format($usebet_c->amount_1,2);
                                                    $comconpany[$key] += number_format(($usebet_c->amount_1)*($usebet_c->com_2/100),2);
                                                
                                            }elseif($level == 1){
                                                
                                                    $sumconpany[$key] += number_format($usebet_c->amount_1,2);
                                                    $comconpany[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                
                                            }

                                            $sumAG[$key] = $sumagbet_mem[$key] + $comagbet_mem[$key];
                                            
                                }

                                foreach($sumbet_mem as $sumbet_mems){
                                $totalmember += $sumbet_mems;
                                }foreach($sumagbet_mem as $sumagbet_mems){
                                $totalAg += $sumagbet_mems;
                                }foreach($sumconpany as $sumconpanys){
                                $totalCompany += $sumconpanys;
                                }

  
        // dd($totalCompany);
        return view('listlottery.listlotuser.list',compact('usebet_c','member_name','member_type','member_ticket',
                                                           'member_ratepay','member_date','member_pay','member_num',
                                                            'sumbet_mem','combet_mem','sumagbet_mem','Ag_keep','comagbet_mem','sumAG',
                                                            'sumconpany','comconpany','totalmember','totalAg','totalCompany'));

    }
   
}

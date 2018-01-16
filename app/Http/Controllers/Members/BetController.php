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
                $useradddetails = explode(" ", $usebet->useradddetail);
                
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
        
        return view('listlottery.listlotuser.index');
    }

    public function listlotuser2()
    {
        $id = auth()->user()->id;
        $level = auth()->user()->level;
        $idlotto = request("id");
        $lotto = Lotto::find($idlotto);
        $tickets = Ticket::where('lotto_id',$idlotto)->get();

        foreach ($tickets as $key => $ticket) {
            $usebets[$key] = Userbet::where('ticket_id', $ticket->id)
                                        ->with('member')
                                        ->select(DB::Raw('member_id'))
                                        ->groupBy('member_id')
                                        ->get();
            $usebet_s[$key] = Userbet::where('ticket_id', $ticket->id)->get();
            

            
        }

        
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

                            $member_name[$key] = $member->username;
                            $userbets_[$key] = $usebet[0]->ticket_id;
                            //$userbets_[$key] = Userbet::where('id', $usebet[0]->id)->get();
                            $userbets_[$key] = Userbet::where('ticket_id', $usebet[0]->ticket_id)->get();
                                foreach ($userbets_[$key] as $loop_i => $usebet_c) {
                                   
                                            $data[] = $usebet_c;
                                            if($usebet_c->type=="top3"){
                                                $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                                                $comtop3[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                                            }if($usebet_c->type=="bottom3"){
                                                $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                                                $combottom3[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                                            }if($usebet_c->type=="tod3"){
                                                $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                                                $comtod3[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                                            }if($usebet_c->type=="top2"){
                                                $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                                                $comtop2[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                                            }if($usebet_c->type=="bottom2"){
                                                $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                                                $combottom2[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                                            }if($usebet_c->type=="tod2"){
                                                $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                                                $comtod2[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                                            }if($usebet_c->type=="top1"){
                                                $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                                                $comtop1[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                                            }if($usebet_c->type=="bottom1"){
                                                $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                                                $combottom1[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                                            }

                                            if($level == 6){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtop3[$key] += number_format($usebet_c->amount_6*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagbottom3[$key] += number_format($usebet_c->amount_6*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtod3[$key] += number_format($usebet_c->amount_6*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtop2[$key] += number_format($usebet_c->amount_6*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagbottom2[$key] += number_format($usebet_c->amount_6*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtod2[$key] += number_format($usebet_c->amount_6*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagtop1[$key] += number_format($usebet_c->amount_6*($usebet_c->com_6/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_6,2);
                                                    $comagbottom1[$key] += number_format($usebet_c->amount_6*($usebet_c->com_6/100),2);
                                                }
                                            }elseif($level == 5){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_5,2);
                                                    $comagtop3[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_5,2);
                                                    $comagbottom3[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_5,2);
                                                    $comagtod3[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_5,2);
                                                    $comagtop2[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_5,2);
                                                    $comagbottom2[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_5,2);
                                                    $comagtod2[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_5,2);
                                                    $comagtop1[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_5,2);
                                                    $comagbottom1[$key] += number_format($usebet_c->amount_5*($usebet_c->com_5/100),2);
                                                }
                                            }elseif($level == 4){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_4,2);
                                                    $comagtop3[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_4,2);
                                                    $comagbottom3[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_4,2);
                                                    $comagtod3[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_4,2);
                                                    $comagtop2[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_4,2);
                                                    $comagbottom2[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_4,2);
                                                    $comagtod2[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_4,2);
                                                    $comagtop1[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_4,2);
                                                    $comagbottom1[$key] += number_format($usebet_c->amount_4*($usebet_c->com_4/100),2);
                                                }
                                            }elseif($level == 3){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_3,2);
                                                    $comagtop3[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_3,2);
                                                    $comagbottom3[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_3,2);
                                                    $comagtod3[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_3,2);
                                                    $comagtop2[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_3,2);
                                                    $comagbottom2[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_3,2);
                                                    $comagtod2[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_3,2);
                                                    $comagtop1[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_3,2);
                                                    $comagbottom1[$key] += number_format($usebet_c->amount_3*($usebet_c->com_3/100),2);
                                                }
                                            }elseif($level == 2){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_2,2);
                                                    $comagtop3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_2,2);
                                                    $comagbottom3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_2,2);
                                                    $comagtod3[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_2,2);
                                                    $comagtop2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_2,2);
                                                    $comagbottom2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_2,2);
                                                    $comagtod2[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_2,2);
                                                    $comagtop1[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_2,2);
                                                    $comagbottom1[$key] += number_format($usebet_c->amount_2*($usebet_c->com_2/100),2);
                                                }
                                            }elseif($level == 1){
                                                if($usebet_c->type=="top3"){
                                                    $sumagtop3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comagtop3[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="bottom3"){
                                                    $sumagbottom3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comagbottom3[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="tod3"){
                                                    $sumagtod3[$key] += number_format($usebet_c->amount_1,2);
                                                    $comagtod3[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="top2"){
                                                    $sumagtop2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comagtop2[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="bottom2"){
                                                    $sumagbottom2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comagbottom2[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="tod2"){
                                                    $sumagtod2[$key] += number_format($usebet_c->amount_1,2);
                                                    $comagtod2[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="top1"){
                                                    $sumagtop1[$key] += number_format($usebet_c->amount_1,2);
                                                    $comagtop1[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }if($usebet_c->type=="bottom1"){
                                                    $sumagbottom1[$key] += number_format($usebet_c->amount_1,2);
                                                    $comagbottom1[$key] += number_format($usebet_c->amount_1*($usebet_c->com_1/100),2);
                                                }
                                            }
 
                                }
                                $usersum_s[$key] = number_format($sumtop3[$key]+$sumbottom3[$key]+$sumtod3[$key]+$sumtop2[$key]+$sumbottom2[$key]+$sumtod2[$key]+$sumtop1[$key]+$sumbottom1[$key],2);
                                $usercom_s[$key] = number_format($comtop3[$key]+$combottom3[$key]+$comtod3[$key]+$comtop2[$key]+$combottom2[$key]+$comtod2[$key]+$comtop1[$key]+$combottom1[$key],2);
                                $usersumall[$key] = number_format($usersum_s[$key]-$usercom_s[$key],2);
                                ////////////////////////////////////////////////////////////////////////////////////////////
                                $agsum_s[$key] = number_format($sumagtop3[$key]+$sumagbottom3[$key]+$sumagtod3[$key]+$sumagtop2[$key]+$sumagbottom2[$key]+$sumagtod2[$key]+$sumagtop1[$key]+$sumagbottom1[$key],2);
                                $agcom_s[$key] = number_format($comagtop3[$key]+$comagbottom3[$key]+$comagtod3[$key]+$comagtop2[$key]+$comagbottom2[$key]+$comagtod2[$key]+$comagtop1[$key]+$comagbottom1[$key],2);
                                $agsumall[$key] = number_format($agsum_s[$key]-$agcom_s[$key],2);

                            // $usersum_s[$key] = 3;
                            // $usercom_s[$key] = 3;
                            // $usersumall[$key] = 3;
                    }  
                }


        //    $data[] =$usebet[0]->id;

            // $usersum_s[$key] = number_format($sumtop3[$key]+$sumbottom3[$key]+$sumtod3[$key]+$sumtop2[$key]+$sumbottom2[$key]+$sumtod2[$key]+$sumtop1[$key]+$sumbottom1[$key],2);
            // $usercom_s[$key] = number_format($comtop3[$key]+$combottom3[$key]+$comtod3[$key]+$comtop2[$key]+$combottom2[$key]+$comtod2[$key]+$comtop1[$key]+$combottom1[$key],2);
            // $usersumall[$key] = number_format($usersum_s[$key]-$usercom_s[$key],2);

            // foreach ($it_have as $key => $value) {
            //     $usersum_s[$key] = 3;
            //     $usercom_s[$key] = 3;
            //     $usersumall[$key] = 3;
            // }
            // if($sumtop3[$key]){
            //     $usersum_s[$key] = 3;
            //     $usercom_s[$key] = 3;
            //     $usersumall[$key] = 3;
            // }

 
            
        }

        //return response()->json(['data'=>$it_have]);
        //return response()->json(['data'=>$it_have]);
        //return response()->json(['data'=>$userbets_]);
        //return response()->json(['it_have'=>$it_have]);
        //return response()->json(['member_name'=>$member_name]);
        //return response()->json(['data'=>$userbets_]);
        //return response()->json(['usebets'=>$usebets]);
        //$useradddetails = explode(" ", $usebet->useradddetail);
                    // foreach ($usebet_s as $key => $usebet_com) {
                    //         $sumtop3[$key] =0;
                    //         $sumbottom3[$key] =0;
                    //         $sumtod3[$key] =0;
                    //         $sumtop2[$key] =0;
                    //         $sumbottom2[$key] =0;
                    //         $sumtod2[$key] =0;
                    //         $sumtop1[$key] =0;
                    //         $sumbottom1[$key] =0;
                            
                    //         //////////////////////////////////
                    //         $comtop3[$key] =0;
                    //         $combottom3[$key] =0;
                    //         $comtod3[$key] =0;
                    //         $comtop2[$key] =0;
                    //         $combottom2[$key] =0;
                    //         $comtod2[$key] =0;
                    //         $comtop1[$key] =0;
                    //         $combottom1[$key] =0;
                    //         /////////////////////////////////
                    //         $usercom_s[$key] =0;
                    //         $usersum_s[$key] =0;
                    //         $usersumall[$key] =0;
                    //         $member = Member::find($usebet_com[0]->member_id);
                    //         $member_name[$key] = $member->username;
                    //         foreach ($usebet_com as $loop => $usebet_c) {
                    //             //return response()->json(['usebet_com'=>$usebet_c->useradddetail]);
                    //             $useradddetails = explode(" ", $usebet_c->useradddetail);
                    //             foreach ($useradddetails as $loop_i => $useradddetail) {
                    //                 if($useradddetail==$id){
                    //                     //return response()->json(['usebet_com'=>$usebet_com[0]->member_id]);
                    //                     // $members = Member::find($usebet_com[0]->member_id);
                    //                     // $membername[$key] = 
                    //                     if($usebet_c->type=="top3"){
                    //                         $sumtop3[$key] += number_format($usebet_c->amount_7,2);
                    //                         $comtop3[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                    //                     }if($usebet_c->type=="bottom3"){
                    //                         $sumbottom3[$key] += number_format($usebet_c->amount_7,2);
                    //                         $combottom3[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                    //                     }if($usebet_c->type=="tod3"){
                    //                         $sumtod3[$key] += number_format($usebet_c->amount_7,2);
                    //                         $comtod3[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                    //                     }if($usebet_c->type=="top2"){
                    //                         $sumtop2[$key] += number_format($usebet_c->amount_7,2);
                    //                         $comtop2[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                    //                     }if($usebet_c->type=="bottom2"){
                    //                         $sumbottom2[$key] += number_format($usebet_c->amount_7,2);
                    //                         $combottom2[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                    //                     }if($usebet_c->type=="tod2"){
                    //                         $sumtod2[$key] += number_format($usebet_c->amount_7,2);
                    //                         $comtod2[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                    //                     }if($usebet_c->type=="top1"){
                    //                         $sumtop1[$key] += number_format($usebet_c->amount_7,2);
                    //                         $comtop1[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                    //                     }if($usebet_c->type=="bottom1"){
                    //                         $sumbottom1[$key] += number_format($usebet_c->amount_7,2);
                    //                         $combottom1[$key] += number_format($usebet_c->amount_7*($usebet_c->com_7/100),2);
                    //                     }

                    //                 }

                    //             }
                                
                    //             //return response()->json(['usebet_com'=>$usebet_com[0]->member_id]);
                    //         }
                    //         //return response()->json(['usebet_l1'=>$usebet_l1]);
                    //         //return response()->json(['member_name'=>$member_name]);
                    //         $usersum_s[$key] = number_format($sumtop3[$key]+$sumbottom3[$key]+$sumtod3[$key]+$sumtop2[$key]+$sumbottom2[$key]+$sumtod2[$key]+$sumtop1[$key]+$sumbottom1[$key],2);
                    //         $usercom_s[$key] = number_format($comtop3[$key]+$combottom3[$key]+$comtod3[$key]+$comtop2[$key]+$combottom2[$key]+$comtod2[$key]+$comtop1[$key]+$combottom1[$key],2);
                    //         $usersumall[$key] = number_format($usersum_s[$key]-$usercom_s[$key],2);
                            
                    // }
            //return response()->json(['usebet_s'=>$usebet_s]);
            //return response()->json(['usebet_s'=>$usebet_s]);
            
            //วิธีเรียกชื่อ
            //return response()->json(['usebets'=>$usebets[0][0]->member->username]);

            // foreach ($usebets as $key => $usebet) {
            //     foreach ($usebet as $loop => $usebet_l) {

            //         //return response()->json(['usebet_l1'=>$usebet_l1]);
            //         //return response()->json(['usebet_l1'=>$usebet_l1]);

            //         $useradddetails = explode(" ", $usebet[0]->member->useradddetail);
            //         foreach ($useradddetails as $loop_i => $useradddetail) {
            //             if($useradddetail==$id){
            //                 //$member_name[] = $usebet_l->member->username;
            //             }
            //         }
            //         //return response()->json(['useradddetails'=>$useradddetails]);
            //     }
            //     //return response()->json(['usebet_l'=>$usebet_l->member->username]);

            // }
            // return response()->json(['usebets'=>$usebets]);
            //return response()->json(['member_name'=>$member_name]);
        
        return response()->json([
            'id'=>$id,
            'lotto'=>$lotto,
            'tickets'=>$tickets,
            'usebets'=>$usebets,
            'member_name'=>$member_name,
            'usebet_s'=>$usebet_s,
            'usersum_s'=>$usersum_s,
            'usercom_s'=>$usercom_s,
            'usersumall'=>$usersumall,
            'agsum_s'=>$agsum_s,
            'agcom_s'=>$agcom_s,
            'agsumall'=>$agsumall,
           
        ]);
    }
   
}

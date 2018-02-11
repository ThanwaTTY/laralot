<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userbet;
use App\Member;
use App\Lotto;
use App\Ticket;
use App\Keep;
use App\Limite_paybet;
use App\Limite;
use App\Ratepaygov;
use Carbon\Carbon;

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
        $useradddetail = auth()->user()->useradddetail;
        $useradd_detail = $useradddetail;
        $member = Member::find($id);
        $dt = Carbon::now();
        $datenow = $dt->format('Y-m-d h:i:s');  
        $keepuseradd = $member->useradd;
        $keep = Keep::where('member_id',$keepuseradd)->first();
        $Agcoms = Member::where('id',$useradd)->first();

        $companykeep = 100-$keep->keepset;
        $lottos = Lotto::where('day_on','<=',$datenow)->where('day_off','>=',$datenow)->first();
        
        

  
        $tickets = $this->createTicket($id,$lottos,30);

        $data_request = $request->all();

        $nums = $request->num;

        

        $keepover_6 = 0;
        $keepover_5 = 0;
        $keepover_4 = 0;
        $keepover_3 = 0;
        $keepover_2 = 0;
        $keepover_1 = 0;

        $limitecheck6 = 0;
        $limitecheck5 = 0;
        $limitecheck4 = 0;
        $limitecheck3 = 0;
        $limitecheck2 = 0;
        $limitecheck1 = 0;

        $limitecheck6top3 = 0;
        $limitecheck6bottom3 = 0;
        $limitecheck6tod3 = 0;
        $limitecheck6top2 = 0;
        $limitecheck6bottom2 = 0;
        $limitecheck6tod2 = 0;
        $limitecheck6top1 = 0;
        $limitecheck6bottom1 = 0;

        $limitecheck5top3 = 0;
        $limitecheck5bottom3 = 0;
        $limitecheck5tod3 = 0;
        $limitecheck5top2 = 0;
        $limitecheck5bottom2 = 0;
        $limitecheck5tod2 = 0;
        $limitecheck5top1 = 0;
        $limitecheck5bottom1 = 0;

        $limitecheck4top3 = 0;
        $limitecheck4bottom3 = 0;
        $limitecheck4tod3 = 0;
        $limitecheck4top2 = 0;
        $limitecheck4bottom2 = 0;
        $limitecheck4tod2 = 0;
        $limitecheck4top1 = 0;
        $limitecheck4bottom1 = 0;

        $limitecheck3top3 = 0;
        $limitecheck3bottom3 = 0;
        $limitecheck3tod3 = 0;
        $limitecheck3top2 = 0;
        $limitecheck3bottom2 = 0;
        $limitecheck3tod2 = 0;
        $limitecheck3top1 = 0;
        $limitecheck3bottom1 = 0;

        $limitecheck2top3 = 0;
        $limitecheck2bottom3 = 0;
        $limitecheck2tod3 = 0;
        $limitecheck2top2 = 0;
        $limitecheck2bottom2 = 0;
        $limitecheck2tod2 = 0;
        $limitecheck2top1 = 0;
        $limitecheck2bottom1 = 0;

        $limitecheck1top3 = 0;
        $limitecheck1bottom3 = 0;
        $limitecheck1tod3 = 0;
        $limitecheck1top2 = 0;
        $limitecheck1bottom2 = 0;
        $limitecheck1tod2 = 0;
        $limitecheck1top1 = 0;
        $limitecheck1bottom1 = 0;

        foreach ($nums as $key => $num) {
           $numm = $num;
           $keep = Keep::where('member_id', $useradd)->first();
           $master2 = Member::find($useradd);

           if($master2){
               if($master2->level ==6){
                   $keepover_6 = 6;
                   $limitecheck6 = Limite::where('member_id', $master2->id)->where('lotto_id', $lottos->id)->first();
                    $limitecheck6top3 = $limitecheck6->top3;
                    $limitecheck6bottom3 = $limitecheck6->bottom3;
                    $limitecheck6tod3 = $limitecheck6->tod3;
                    $limitecheck6top2 = $limitecheck6->top2;
                    $limitecheck6bottom2 = $limitecheck6->bottom2;
                    $limitecheck6tod2 = $limitecheck6->tod2;
                    $limitecheck6top1 = $limitecheck6->top1;
                    $limitecheck6bottom1 = $limitecheck6->bottom1;
                   $master2 = Member::find($master2->useradd);
               }else{
                $master2 = $master2;
               }
           }if($master2){
                if($master2->level ==5){
                    $keepover_5 = 5;
                    $limitecheck5 = Limite::where('member_id', $master2->id)->where('lotto_id', $lottos->id)->first();
                    $limitecheck5top3 = $limitecheck5->top3;
                    $limitecheck5bottom3 = $limitecheck5->bottom3;
                    $limitecheck5tod3 = $limitecheck5->tod3;
                    $limitecheck5top2 = $limitecheck5->top2;
                    $limitecheck5bottom2 = $limitecheck5->bottom2;
                    $limitecheck5tod2 = $limitecheck5->tod2;
                    $limitecheck5top1 = $limitecheck5->top1;
                    $limitecheck5bottom1 = $limitecheck5->bottom1;
                    $master2 = Member::find($master2->useradd);
                }else{
                $master2 = $master2;
            }
            }if($master2){
                if($master2->level ==4){
                    $keepover_4 = 4;
                    $limitecheck4 = Limite::where('member_id', $master2->id)->where('lotto_id', $lottos->id)->first();
                    $limitecheck4top3 = $limitecheck4->top3;
                    $limitecheck4bottom3 = $limitecheck4->bottom3;
                    $limitecheck4tod3 = $limitecheck4->tod3;
                    $limitecheck4top2 = $limitecheck4->top2;
                    $limitecheck4bottom2 = $limitecheck4->bottom2;
                    $limitecheck4tod2 = $limitecheck4->tod2;
                    $limitecheck4top1 = $limitecheck4->top1;
                    $limitecheck4bottom1 = $limitecheck4->bottom1;
                    $master2 = Member::find($master2->useradd);
                }else{
                $master2 = $master2;
                }
            }if($master2){
                if($master2->level ==3){
                    $keepover_3 = 3;
                    $limitecheck3 = Limite::where('member_id', $master2->id)->where('lotto_id', $lottos->id)->first();
                    $limitecheck3top3 = $limitecheck3->top3;
                    $limitecheck3bottom3 = $limitecheck3->bottom3;
                    $limitecheck3tod3 = $limitecheck3->tod3;
                    $limitecheck3top2 = $limitecheck3->top2;
                    $limitecheck3bottom2 = $limitecheck3->bottom2;
                    $limitecheck3tod2 = $limitecheck3->tod2;
                    $limitecheck3top1 = $limitecheck3->top1;
                    $limitecheck3bottom1 = $limitecheck3->bottom1;
                    $master2 = Member::find($master2->useradd);
                }else{
                $master2 = $master2;
                }
            }if($master2){
                if($master2->level ==2){
                    $keepover_2 = 2;
                    $limitecheck2 = Limite::where('member_id', $master2->id)->where('lotto_id', $lottos->id)->first();
                    $limitecheck2top3 = $limitecheck2->top3;
                    $limitecheck2bottom3 = $limitecheck2->bottom3;
                    $limitecheck2tod3 = $limitecheck2->tod3;
                    $limitecheck2top2 = $limitecheck2->top2;
                    $limitecheck2bottom2 = $limitecheck2->bottom2;
                    $limitecheck2tod2 = $limitecheck2->tod2;
                    $limitecheck2top1 = $limitecheck2->top1;
                    $limitecheck2bottom1 = $limitecheck2->bottom1;
                    $master2 = Member::find($master2->useradd);
                }else{
                $master2 = $master2;
                }
            }if($master2){
                if($master2->level ==1){
                    $keepover_1 = 1;
                    $limitecheck1 = Limite::where('member_id', $master2->id)->where('lotto_id', $lottos->id)->first();
                    $limitecheck1top3 = $limitecheck1->top3;
                    $limitecheck1bottom3 = $limitecheck1->bottom3;
                    $limitecheck1tod3 = $limitecheck1->tod3;
                    $limitecheck1top2 = $limitecheck1->top2;
                    $limitecheck1bottom2 = $limitecheck1->bottom2;
                    $limitecheck1tod2 = $limitecheck1->tod2;
                    $limitecheck1top1 = $limitecheck1->top1;
                    $limitecheck1bottom1 = $limitecheck1->bottom1;
                    $master2 = Member::find($master2->useradd);
                }else{
                $master2 = $master2;
                }
            }

           
        }
        $limitecheckAlltop3 = $limitecheck6top3+$limitecheck5top3+$limitecheck4top3+$limitecheck3top3+$limitecheck2top3+$limitecheck1top3;
        $limitecheckAllbottom3 = $limitecheck6bottom3+$limitecheck5bottom3+$limitecheck4bottom3+$limitecheck3bottom3+$limitecheck2bottom3+$limitecheck1bottom3;
        $limitecheckAlltod3 = $limitecheck6tod3+$limitecheck5tod3+$limitecheck4tod3+$limitecheck3tod3+$limitecheck2tod3+$limitecheck1tod3;
        $limitecheckAlltop2 = $limitecheck6top2+$limitecheck5top2+$limitecheck4top2+$limitecheck3top2+$limitecheck2top2+$limitecheck1top2;
        $limitecheckAllbottom2 = $limitecheck6bottom2+$limitecheck5bottom2+$limitecheck4bottom2+$limitecheck3bottom2+$limitecheck2bottom2+$limitecheck1bottom2;
        $limitecheckAlltod2 = $limitecheck6tod2+$limitecheck5tod2+$limitecheck4tod2+$limitecheck3tod2+$limitecheck2tod2+$limitecheck1tod2;
        $limitecheckAlltop1 = $limitecheck6top1+$limitecheck5top1+$limitecheck4top1+$limitecheck3top1+$limitecheck2top1+$limitecheck1top1;
        $limitecheckAllbottom1 = $limitecheck6bottom1+$limitecheck5bottom1+$limitecheck4bottom1+$limitecheck3bottom1+$limitecheck2bottom1+$limitecheck1bottom1;

          return response()->json([
            'limitecheckAllbottom1'=>$limitecheckAllbottom1,  
            'limitecheck4top3'=>$limitecheck4top3,  
            'limitecheck3top3'=>$limitecheck3top3,  
            'limitecheck2top3'=>$limitecheck2top3,  
            'limitecheck1top3'=>$limitecheck1top3,  
            'limitecheck6'=>$limitecheck6, 
            ]); 
        foreach ($nums as $key => $num) {
            if($num){
                $type = $this->checktype($num);

                //หาจากตัวเลขที่ซ้ำกันในเลขอั้น
               
                // return response()->json([
                //     'num'=>$num  
                //     ]);
                
                    if($request->top[$key]){
                    
                            if($type==3){
                                $paytop = $member->ratepaygov->payoutg_1;
                                $com_7 = $member->ratepaygov->comg_1;
                                $master = Member::find($useradd);
                                
                                       if($master){                                     
                                            if($master->level == 6){
                                               $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                               $keep = Keep::where('member_id', $useradd)->first();

                                               $amount_keep = $request->top[$key]*($keep->keepset6/100);
                                               $amount = $request->top[$key]*($keep->keepset6/100);
                                               $limite_paybet = Limite_paybet::where('member_id', $master->id)->where('bet_num',$num)->where('lotto_id', $lottos->id)->where('type', "top".$type)->first();   
                                               $limite = Limite::where('member_id', $master->id)->where('lotto_id', $lottos->id)->first();
                                               $limite_amount6 = 0;
                                               
                                               if($limite_paybet){
                                                    if($amount_keep > $limite_paybet->limite_amount){
                                                        $amount_6 = ($amount_keep+$limite_paybet->limite_amount)-$amount_keep;
                                                        $limite_amount6 = $amount_keep - $limite_paybet->limite_amount;
                                                    }else{
                                                        $amount_6 = $request->top[$key]*($keep->keepset6/100);
                                                        
                                                    }                      
                                                }elseif($amount > $limite->top3){
                                                   
                                                        $amount_6 = ($amount + $limite->top3)-$amount;
                                                        $limite_amount6 = $amount - $limite->top3;
                                                
                                                    
                                                }else{
                                                    $amount_6 = $request->top[$key]*($keep->keepset6/100);
                                                    
                                                }

                                                // return response()->json([
                                                //     'amount'=>$amount  
                                                //     ]);

                                               $keep_6 = $keep->keepset6;
                                               $com_6 = $ratepaygov->comg_1;  
                                               $pay_6 = $ratepaygov->payoutg_1;
                                               $master = Member::find($master->useradd); 
                                           }else{
                                               $amount_6 = 0;
                                               $keep_6 = 0;
                                               $com_6 = 0;
                                               $pay_6 = 0;
                                               $limite_amount6 = 0;
                                               $master = $master; 
                                       }                                      
                                       if($master){
                                        if($master->level == 5){
                                           $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                           $keep = Keep::where('member_id', $useradd)->first();

                                            $amount_keep = $request->top[$key]*($keep->keepset5/100);
                                            $limite_paybet = Limite_paybet::where('member_id', $master->id)->where('bet_num',$num)->where('lotto_id', $lottos->id)->where('type', "top".$type)->first();   
                                            $limite = Limite::where('member_id', $master->id)->where('lotto_id', $lottos->id)->latest()->first();;
                                            $limite_amount5 = 0;

                                            $amount = $request->top[$key]*($keep->keepset5/100);   
                                        if($limite_paybet){    
                                            if($limite_amount6 != 0){
                                                if($limite_paybet){
                                                    
                                                    if($limite_amount6 > $limite_paybet->limite_amount){
                                                        $amount_5 = ($limite_amount6+$limite_paybet->limite_amount)-$limite_amount6;
                                                        $limite_amount5 = ($limite_amount6 - $limite_paybet->limite_amount)+$amount_keep;                                                       
                                                    }else{
                                                        $amount_5 = ($request->top[$key]*($keep->keepset5/100))+$limite_amount6;
                                                        $limite_amount5 = 0;
                                                    }                           
                                                }
                                                else{
                                                    $amount_5 = ($request->top[$key]*($keep->keepset5/100))+$limite_amount6;
                                                    $limite_amount5 = 0;
                                                }
                                            }     
                                            elseif($limite_paybet){
                                                   
                                                    if($amount_keep > $limite_paybet->limite_amount){
                                                        $amount_5 = ($amount_keep+$limite_paybet->limite_amount)-$amount_keep;
                                                        $limite_amount5 = $amount_keep - $limite_paybet->limite_amount;
                                                      
                                                    }else{
                                                        $amount_5 = $request->top[$key]*($keep->keepset5/100);
                                                        $limite_amount5 = 0;
                                                    }                          
                                                }
                                            else{
                                                $amount_5 = $request->top[$key]*($keep->keepset5/100);
                                                $limite_amount5 = 0;
                                            }
                                        }elseif($amount_6 !=0){
                                            $amount = $request->top[$key]*($keep->keepset5/100)+$limite_amount6;
                                            if($amount > $limite->top3){
                                               
                                                    $amount_5 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount5 = $amount - $limite->top3;
                                                
                                            }else{
                                                $amount_5 = $request->top[$key]*($keep->keepset5/100)+$limite_amount6;
                                                
                                            }
                                            
                                        }elseif($amount > $limite->top3){
                                            
                                                $amount_5 = ($amount + $limite->top3)-$amount;
                                                $limite_amount5 = $amount - $limite->top3;
                                           
                                        }else{
                                            $amount_5 = $request->top[$key]*($keep->keepset5/100);
                                            
                                        }
                                           
                                        
                                           $keep_5 = $keep->keepset5;
                                           $com_5 = $ratepaygov->comg_1; 
                                           $pay_5 = $ratepaygov->payoutg_1;
                                           $master = Member::find($master->useradd); 
                                        
                                        }else{
                                           $amount_5 = 0;
                                           $keep_5 = 0;
                                           $com_5 = 0;
                                           $pay_5 = 0;
                                           $limite_amount5 = 0;
                                           $master = $master; 
                                        }
                                       }
                                       if($master){
                                           if($master->level == 4){
                                               $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                               $keep = Keep::where('member_id', $useradd)->first();

                                               $amount_keep = $request->top[$key]*($keep->keepset4/100);
                                               $amount = $request->top[$key]*($keep->keepset4/100);
                                               $limite_paybet = Limite_paybet::where('member_id', $master->id)->where('bet_num',$num)->where('lotto_id', $lottos->id)->where('type', "top".$type)->first();   
                                               $limite = Limite::where('member_id', $master->id)->where('lotto_id', $lottos->id)->latest()->first();
                                               $limite_amount4 = 0;
                                               
                                        if($limite_paybet){     
                                            if($limite_amount5 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount5 > $limite_paybet->limite_amount){
                                                        $amount_4 = ($limite_amount5+$limite_paybet->limite_amount)-$limite_amount5;
                                                        $limite_amount4 = ($limite_amount5 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_4 = ($request->top[$key]*($keep->keepset4/100))+$limite_amount5;
                                                        $limite_amount4 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_4 = ($request->top[$key]*($keep->keepset4/100))+$limite_amount5;
                                                    $limite_amount4 = 0;
                                                }
                                            }        
                                            elseif($limite_amount6 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount6 > $limite_paybet->limite_amount){
                                                        $amount_4 = ($limite_amount6+$limite_paybet->limite_amount)-$limite_amount6;
                                                        $limite_amount4 = ($limite_amount6 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_4 = ($request->top[$key]*($keep->keepset4/100))+$limite_amount6;
                                                        $limite_amount4 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_4 = ($request->top[$key]*($keep->keepset4/100))+$limite_amount6;
                                                    $limite_amount4 = 0;
                                                }
                                            }     
                                            elseif($limite_paybet){
                                                    if($amount_keep > $limite_paybet->limite_amount){
                                                        $amount_4 = ($amount_keep+$limite_paybet->limite_amount)-$amount_keep;
                                                        $limite_amount4 = $amount_keep - $limite_paybet->limite_amount;
                                                    }else{
                                                        $amount_4 = $request->top[$key]*($keep->keepset4/100);
                                                        $limite_amount4 = 0;
                                                    }                      
                                                }
                                            else{
                                                $amount_4 = $request->top[$key]*($keep->keepset4/100);
                                                $limite_amount4 = 0;
                                            }
                                        }elseif($amount_5 !=0){
                                            $amount = $request->top[$key]*($keep->keepset4/100)+$limite_amount5;
                                            if($amount > $limite->top3){
                                                
                                                    $amount_4 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount4 = $amount - $limite->top3;
                                               
                                            }else{
                                                $amount_4 = $request->top[$key]*($keep->keepset4/100)+$limite_amount5;
                                               
                                            }
                                            
                                        }elseif($amount_6 !=0){
                                            $amount = $request->top[$key]*($keep->keepset4/100)+$limite_amount6;
                                            if($amount > $limite->top3){
                                               
                                                    $amount_4 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount4 = $amount - $limite->top3;
                                              
                                            }else{
                                                $amount_4 = $request->top[$key]*($keep->keepset4/100)+$limite_amount6;
                                               
                                            }
                                        }elseif($amount > $limite->top3){
                                           
                                                $amount_4 = ($amount + $limite->top3)-$amount;
                                                $limite_amount4 = $amount - $limite->top3;
                                          
                                        }else{
                                            $amount_4 = $request->top[$key]*($keep->keepset4/100);
                                           
                                        }
                                      
                                       
                                               $keep_4 = $keep->keepset4;
                                               $com_4 = $ratepaygov->comg_1; 
                                               $pay_4 = $ratepaygov->payoutg_1;
                                               $master = Member::find($master->useradd);   
                                           }else{
                                               $amount_4 = 0;
                                               $keep_4 = 0;
                                               $com_4 = 0;
                                               $pay_4 = 0;
                                               $limite_amount4 = 0;
                                               $master = $master ; 
                                           }
                                       }
                                       if($master){
                                           if($master->level == 3){
                                               $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                               $keep = Keep::where('member_id', $useradd)->first();

                                               $amount_keep = $request->top[$key]*($keep->keepset3/100);
                                               $amount = $request->top[$key]*($keep->keepset3/100);
                                               $limite = Limite::where('member_id', $master->id)->where('lotto_id', $lottos->id)->latest()->first();
                                               $limite_paybet = Limite_paybet::where('member_id', $master->id)->where('bet_num',$num)->where('lotto_id', $lottos->id)->where('type', "top".$type)->first();   
                                               $limite_amount3 = 0;

                                        if($limite_paybet){        
                                            if($limite_amount4 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount4 > $limite_paybet->limite_amount){
                                                        $amount_3 = ($limite_amount4+$limite_paybet->limite_amount)-$limite_amount4;
                                                        $limite_amount3 = ($limite_amount4 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_3 = ($request->top[$key]*($keep->keepset3/100))+$limite_amount4;
                                                        $limite_amount3 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_3 = ($request->top[$key]*($keep->keepset3/100))+$limite_amount4;
                                                    $limite_amount3 = 0;
                                                }
                                            }   
                                            elseif($limite_amount5 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount5 > $limite_paybet->limite_amount){
                                                        $amount_3 = ($limite_amount5+$limite_paybet->limite_amount)-$limite_amount5;
                                                        $limite_amount3 = ($limite_amount5 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_3 = ($request->top[$key]*($keep->keepset3/100))+$limite_amount5;
                                                        $limite_amount3 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_3 = ($request->top[$key]*($keep->keepset3/100))+$limite_amount5;
                                                    $limite_amount3 = 0;
                                                }
                                            }        
                                            elseif($limite_amount6 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount6 > $limite_paybet->limite_amount){
                                                        $amount_3 = ($limite_amount6+$limite_paybet->limite_amount)-$limite_amount6;
                                                        $limite_amount3 = ($limite_amount6 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_3 = ($request->top[$key]*($keep->keepset3/100))+$limite_amount6;
                                                        $limite_amount3 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_3 = ($request->top[$key]*($keep->keepset3/100))+$limite_amount6;
                                                    $limite_amount3 = 0;
                                                }
                                            }     
                                            elseif($limite_paybet){
                                                    if($amount_keep > $limite_paybet->limite_amount){
                                                        $amount_3 = ($amount_keep+$limite_paybet->limite_amount)-$amount_keep;
                                                        $limite_amount3 = $amount_keep - $limite_paybet->limite_amount;
                                                    }else{
                                                        $amount_3 = $request->top[$key]*($keep->keepset3/100);
                                                        $limite_amount3 = 0;
                                                    }                      
                                                }
                                            else{
                                                $amount_3 = $request->top[$key]*($keep->keepset3/100);
                                                $limite_amount3 = 0;
                                            }
                                        }elseif($limite_amount4 !=0){
                                            $amount = $request->top[$key]*($keep->keepset3/100)+$limite_amount4;
                                            if($amount > $limite->top3){
                                                
                                                    $amount_3 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount3 = $amount - $limite->top3;
                                              
                                            }else{
                                                $amount_3 = $request->top[$key]*($keep->keepset3/100)+$limite_amount4;
                                                
                                            }
                                            
                                        }elseif($limite_amount5 !=0){
                                            $amount = $request->top[$key]*($keep->keepset3/100)+$limite_amount5;
                                            if($amount > $limite->top3){
                                                
                                                    $amount_3 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount3 = $amount - $limite->top3;
                                             
                                            }else{
                                                $amount_3 = $request->top[$key]*($keep->keepset3/100)+$limite_amount5;
                                                
                                            }
                                            
                                        }elseif($limite_amount6 !=0){
                                            $amount = $request->top[$key]*($keep->keepset3/100)+$limite_amount6;
                                            if($amount > $limite->top3){
                                               
                                                    $amount_3 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount3 = $amount - $limite->top3;
                                           
                                            }else{
                                                $amount_3 = $request->top[$key]*($keep->keepset3/100)+$limite_amount6;
                                                
                                            }
                                        }elseif($amount > $limite->top3){
                                           
                                            //     $amount_3 =  0;
                                            //     $limite_amount3 = $request->top[$key];
                                            // }else{
                                                $amount_3 = ($amount + $limite->top3)-$amount;
                                                $limite_amount3 = $amount - $limite->top3;
                                         
                                        }else{
                                            $amount_3 = $request->top[$key]*($keep->keepset3/100);
                                            
                                        }
                                        
                                               $keep_3 = $keep->keepset3;
                                               $com_3 = $ratepaygov->comg_1; 
                                               $pay_3 = $ratepaygov->payoutg_1;
                                               $master = Member::find($master->useradd);   
                                           }else{
                                               $amount_3 = 0;
                                               $keep_3 = 0;
                                               $com_3 = 0;
                                               $pay_3 = 0;
                                               $limite_amount3 = 0;
                                               $master = $master ; 
                                           }
                                       }
                                       if($master){
                                           if($master->level == 2){
                                               $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                               $keep = Keep::where('member_id', $useradd)->first();

                                               $amount = $request->top[$key]*($keep->keepset2/100);
                                               $amount_keep = $request->top[$key]*($keep->keepset2/100);
                                               $limite = Limite::where('member_id', $master->id)->where('lotto_id', $lottos->id)->latest()->first();
                                               $limite_paybet = Limite_paybet::where('member_id', $master->id)->where('bet_num',$num)->where('lotto_id', $lottos->id)->where('type', "top".$type)->first();
                                        
                                               $limite_amount2 = 0;

                                        if($limite_paybet){         
                                            if($limite_amount3 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount3 > $limite_paybet->limite_amount){
                                                        $amount_2 = ($limite_amount3+$limite_paybet->limite_amount)-$limite_amount3;
                                                        $limite_amount2 = ($limite_amount3 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_2 = ($request->top[$key]*($keep->keepset2/100))+$limite_amount3;
                                                        $limite_amount2 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_2 = ($request->top[$key]*($keep->keepset2/100))+$limite_amount3;
                                                    $limite_amount2 = 0;
                                                }
                                            }      
                                            elseif($limite_amount4 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount4 > $limite_paybet->limite_amount){
                                                        $amount_2 = ($limite_amount4+$limite_paybet->limite_amount)-$limite_amount4;
                                                        $limite_amount2 = ($limite_amount4 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_2 = ($request->top[$key]*($keep->keepset2/100))+$limite_amount4;
                                                        $limite_amount2 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_2 = ($request->top[$key]*($keep->keepset2/100))+$limite_amount4;
                                                    $limite_amount2 = 0;
                                                }
                                            }   
                                            elseif($limite_amount5 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount5 > $limite_paybet->limite_amount){
                                                        $amount_2 = ($limite_amount5+$limite_paybet->limite_amount)-$limite_amount5;
                                                        $limite_amount2 = ($limite_amount5 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_2 = ($request->top[$key]*($keep->keepset2/100))+$limite_amount5;
                                                        $limite_amount2 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_2 = ($request->top[$key]*($keep->keepset2/100))+$limite_amount5;
                                                    $limite_amount2 = 0;
                                                }
                                            }        
                                            elseif($limite_amount6 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount6 > $limite_paybet->limite_amount){
                                                        $amount_2 = ($limite_amount6+$limite_paybet->limite_amount)-$limite_amount6;
                                                        $limite_amount2 = ($limite_amount6 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_2 = ($request->top[$key]*($keep->keepset2/100))+$limite_amount6;
                                                        $limite_amount2 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_2 = ($request->top[$key]*($keep->keepset2/100))+$limite_amount6;
                                                    $limite_amount2 = 0;
                                                }
                                            }     
                                            elseif($limite_paybet){
                                                    if($amount_keep > $limite_paybet->limite_amount){
                                                        $amount_2 = ($amount_keep+$limite_paybet->limite_amount)-$amount_keep;
                                                        $limite_amount2 = $amount_keep - $limite_paybet->limite_amount;
                                                    }else{
                                                        $amount_2 = $request->top[$key]*($keep->keepset2/100);
                                                        $limite_amount2 = 0;
                                                    }                      
                                                }
                                            else{
                                                $amount_2 = $request->top[$key]*($keep->keepset2/100);
                                                $limite_amount2 = 0;
                                            }
                                        }elseif($amount_3 !=0){
                                            $amount = $request->top[$key]*($keep->keepset2/100)+$limite_amount3;
                                            if($amount > $limite->top3){
                                                
                                                    $amount_2 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount2 = $amount - $limite->top3;
                                            
                                            }else{
                                                $amount_2 = $request->top[$key]*($keep->keepset2/100)+$limite_amount3;
                                                
                                            }
                                            
                                        }elseif($amount_4 !=0){
                                            $amount = $request->top[$key]*($keep->keepset2/100)+$limite_amount4;
                                            if($amount > $limite->top3){
                                               
                                                    $amount_2 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount2 = $amount - $limite->top3;
                                             
                                            }else{
                                                $amount_2 = $request->top[$key]*($keep->keepset2/100)+$limite_amount4;
                                                
                                            }
                                            
                                        }elseif($amount_5 !=0){
                                            $amount = $request->top[$key]*($keep->keepset2/100)+$limite_amount5;
                                            if($amount > $limite->top3){
                                               
                                                    $amount_2 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount2 = $amount - $limite->top3;
                                             
                                            }else{
                                                $amount_2 = $request->top[$key]*($keep->keepset2/100)+$limite_amount5;
                                                
                                            }
                                            
                                        }elseif($amount_6 !=0){
                                            $amount = $request->top[$key]*($keep->keepset2/100)+$limite_amount6;
                                            if($amount > $limite->top3){
                                               
                                           
                                                    $amount_2 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount2 = $amount - $limite->top3;
                                              
                                            }else{
                                                $amount_2 = $request->top[$key]*($keep->keepset2/100)+$limite_amount6;
                                                
                                            }
                                        }elseif($amount > $limite->top3){
                                            
                                        
                                                $amount_2 = ($amount + $limite->top3)-$amount;
                                                $limite_amount2 = $amount - $limite->top3;
                                          
                                        }else{
                                            $amount_2 = $request->top[$key]*($keep->keepset2/100);
                                            
                                        }
                                      
                                        
                                               
                                               $keep_2 = $keep->keepset2;
                                               $com_2 = $ratepaygov->comg_1;
                                               $pay_2 = $ratepaygov->payoutg_1; 
                                               $master = Member::find($master->useradd);   
                                           }else{
                                               $amount_2 = 0;
                                               $keep_2 = 0;
                                               $com_2 = 0;
                                               $pay_2 = 0;
                                               $limite_amount2 = 0;
                                               $master = $master ; 
                                           }
                                       }
                                       if($master){
                                           if($master->level == 1){
                                               $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                               $keep = Keep::where('member_id', $useradd)->first();

                                               $amount = $request->top[$key]*($keep->keepset1/100);
                                               $amount_keep = $request->top[$key]*($keep->keepset1/100);
                                               $limite = Limite::where('member_id', $master->id)->where('lotto_id', $lottos->id)->latest()->first();
                                               $limite_paybet = Limite_paybet::where('member_id', $master->id)->where('bet_num',$num)->where('lotto_id', $lottos->id)->where('type', "top".$type)->first();
                                               $limite_amount1 = 0;
                                            

                                        if($limite_paybet){
                                            if($limite_amount2 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount2 > $limite_paybet->limite_amount){
                                                        $amount_1 = ($limite_amount2+$limite_paybet->limite_amount)-$limite_amount2;
                                                        $limite_amount1 = ($limite_amount2 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_1 = ($request->top[$key]*($keep->keepset1/100))+$limite_amount2;
                                                        $limite_amount1 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_1 = ($request->top[$key]*($keep->keepset1/100))+$limite_amount2;
                                                    $limite_amount1 = 0;
                                                }
                                            }     
                                            elseif($limite_amount3 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount3 > $limite_paybet->limite_amount){
                                                        $amount_1 = ($limite_amount3+$limite_paybet->limite_amount)-$limite_amount3;
                                                        $limite_amount1 = ($limite_amount3 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_1 = ($request->top[$key]*($keep->keepset1/100))+$limite_amount3;
                                                        $limite_amount1 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_1 = ($request->top[$key]*($keep->keepset1/100))+$limite_amount3;
                                                    $limite_amount1 = 0;
                                                }
                                            }      
                                            elseif($limite_amount4 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount4 > $limite_paybet->limite_amount){
                                                        $amount_1 = ($limite_amount4+$limite_paybet->limite_amount)-$limite_amount4;
                                                        $limite_amount1 = ($limite_amount4 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_1 = ($request->top[$key]*($keep->keepset1/100))+$limite_amount4;
                                                        $limite_amount1 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_1 = ($request->top[$key]*($keep->keepset1/100))+$limite_amount4;
                                                    $limite_amount1 = 0;
                                                }
                                            }   
                                            elseif($limite_amount5 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount5 > $limite_paybet->limite_amount){
                                                        $amount_1 = ($limite_amount5+$limite_paybet->limite_amount)-$limite_amount5;
                                                        $limite_amount1 = ($limite_amount5 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_1 = ($request->top[$key]*($keep->keepset1/100))+$limite_amount5;
                                                        $limite_amount1 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_1 = ($request->top[$key]*($keep->keepset1/100))+$limite_amount5;
                                                    $limite_amount1 = 0;
                                                }
                                            }        
                                            elseif($limite_amount6 != 0){
                                                if($limite_paybet){
                                                    if($limite_amount6 > $limite_paybet->limite_amount){
                                                        $amount_1 = ($limite_amount6+$limite_paybet->limite_amount)-$limite_amount6;
                                                        $limite_amount1 = ($limite_amount6 - $limite_paybet->limite_amount)+$amount_keep;
                                                    }else{
                                                        $amount_1 = ($request->top[$key]*($keep->keepset1/100))+$limite_amount6;
                                                        $limite_amount1 = 0;
                                                    }                      
                                                }
                                                else{
                                                    $amount_1 = ($request->top[$key]*($keep->keepset1/100))+$limite_amount6;
                                                    $limite_amount1 = 0;
                                                }
                                            }     
                                            elseif($limite_paybet){
                                                    if($amount_keep > $limite_paybet->limite_amount){
                                                        $amount_1 = ($amount_keep+$limite_paybet->limite_amount)-$amount_keep;
                                                        $limite_amount1 = $amount_keep - $limite_paybet->limite_amount;
                                                    }else{
                                                        $amount_1 = $request->top[$key]*($keep->keepset1/100);
                                                        $limite_amount1 = 0;
                                                    }                      
                                                }
                                            else{
                                                $amount_1 = $request->top[$key]*($keep->keepset1/100);
                                                $limite_amount1 = 0;
                                            }
                                        }elseif($amount_2 !=0){
                                            $amount = $request->top[$key]*($keep->keepset1/100)+$limite_amount2;
                                            if($amount > $limite->top3){
                                               
                                                    $amount_1 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount1 = $amount - $limite->top3;
                                           
                                            }else{
                                                $amount_1 = $request->top[$key]*($keep->keepset1/100)+$limite_amount2;
                                                
                                            }
                                            
                                        }elseif($amount_3 !=0){
                                            $amount = $request->top[$key]*($keep->keepset1/100)+$limite_amount3;
                                            if($amount > $limite->top3){
                                               
                                                    $amount_1 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount1 = $amount - $limite->top3;
                                              
                                            }else{
                                                $amount_1 = $request->top[$key]*($keep->keepset1/100)+$limite_amount3;
                                                
                                            }
                                            
                                        }elseif($amount_4 !=0){
                                            $amount = $request->top[$key]*($keep->keepset1/100)+$limite_amount4;
                                            if($amount > $limite->top3){
                                               
                                                    $amount_1 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount1 = $amount - $limite->top3;
                                             
                                            }else{
                                                $amount_1 = $request->top[$key]*($keep->keepset1/100)+$limite_amount4;
                                                
                                            }
                                            
                                        }elseif($amount_5 !=0){
                                            $amount = $request->top[$key]*($keep->keepset1/100)+$limite_amount5;
                                            if($amount > $limite->top3){
                                       
                                                    $amount_1 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount1 = $amount - $limite->top3;
                                              
                                            }else{
                                                $amount_1 = $request->top[$key]*($keep->keepset1/100)+$limite_amount5;
                                                
                                            }
                                            
                                        }elseif($amount_6 !=0){
                                            $amount = $request->top[$key]*($keep->keepset1/100)+$limite_amount6;
                                            if($amount > $limite->top3){
                                             
                                                    $amount_1 = ($amount + $limite->top3)-$amount;
                                                    $limite_amount1 = $amount - $limite->top3;
                                            
                                            }else{
                                                $amount_1 = $request->top[$key]*($keep->keepset1/100)+$limite_amount6;
                                                
                                            }
                                        }elseif($amount > $limite->top3){
                                          
                                        
                                                $amount_1 = ($amount + $limite->top3)-$amount;
                                                $limite_amount1 = $amount - $limite->top3;
                                        
                                        }else{
                                            $amount_1 = $request->top[$key]*($keep->keepset1/100);
                                            
                                        }
                                        
                                               $keep_1 = $keep->keepset1;
                                               $com_1 = $ratepaygov->comg_1; 
                                               $pay_1 = $ratepaygov->payoutg_1;
                                               $master = Member::find($master->useradd);   
                                           }else{
                                               $amount_1 = 0;
                                               $keep_1 = 0;
                                               $com_1 = 0;
                                               $pay_1 = 0;
                                               $master = $master ; 
                                           }
                                       }
                                    
                                      
                                    
                                }  
                                //    dd($request->master[$key]);
                            }
                            elseif($type==2){
                                $paytop = $member->ratepaygov->payoutg_4;
                                $com_7 = $member->ratepaygov->comg_4;
                                $master = Member::find($useradd);
                                    if($master){
                                        
                                        if($master->level == 6){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_6 = $request->top[$key]*($keep->keepset6/100);
                                            $keep_6 = $keep->keepset6;
                                            $com_6 = $ratepaygov->comg_4;  
                                            $pay_6 = $ratepaygov->payoutg_4;
                                            $master = Member::find($master->useradd); 
                                            }else{
                                            $amount_6 = 0;
                                            $keep_6 = 0;
                                            $com_6 = 0;
                                            $pay_6 = 0;
                                            $master = $master; 
                                        }                                      
                                        if($master){
                                            if($master->level == 5){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_5 = $request->top[$key]*($keep->keepset5/100);
                                            $keep_5 = $keep->keepset5;
                                            $com_5 = $ratepaygov->comg_4; 
                                            $pay_5 = $ratepaygov->payoutg_4;
                                            $master = Member::find($master->useradd); 
                                        
                                            }else{
                                                $amount_5 = 0;
                                                $keep_5 = 0;
                                                $com_5 = 0;
                                                $pay_5 = 0;
                                                $master = $master; 
                                        }
                                        }
                                        if($master){
                                            if($master->level == 4){
                                                $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                                $keep = Keep::where('member_id', $useradd)->first();
                                                $amount_4 = $request->top[$key]*($keep->keepset4/100);
                                                $keep_4 = $keep->keepset4;
                                                $com_4 = $ratepaygov->comg_4; 
                                                $pay_4 = $ratepaygov->payoutg_4;
                                                $master = Member::find($master->useradd);   
                                            }else{
                                                $amount_4 = 0;
                                                $keep_4 = 0;
                                                $com_4 = 0;
                                                $pay_4 = 0;
                                                $master = $master ; 
                                            }
                                        }
                                        if($master){
                                            if($master->level == 3){
                                                $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                                $keep = Keep::where('member_id', $useradd)->first();
                                                $amount_3 = $request->top[$key]*($keep->keepset3/100);
                                                $keep_3 = $keep->keepset3;
                                                $com_3 = $ratepaygov->comg_4; 
                                                $pay_3 = $ratepaygov->payoutg_4;
                                                $master = Member::find($master->useradd);   
                                            }else{
                                                $amount_3 = 0;
                                                $keep_3 = 0;
                                                $com_3 = 0;
                                                $pay_3 = 0;
                                                $master = $master ; 
                                            }
                                        }
                                        if($master){
                                            if($master->level == 2){
                                                $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                                $keep = Keep::where('member_id', $useradd)->first();
                                                $amount_2 = $request->top[$key]*($keep->keepset2/100);
                                                $keep_2 = $keep->keepset2;
                                                $com_2 = $ratepaygov->comg_4;
                                                $pay_2 = $ratepaygov->payoutg_4; 
                                                $master = Member::find($master->useradd);   
                                            }else{
                                                $amount_2 = 0;
                                                $keep_2 = 0;
                                                $com_2 = 0;
                                                $pay_2 = 0;
                                                $master = $master ; 
                                            }
                                        }
                                        if($master){
                                            if($master->level == 1){
                                                $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                                $keep = Keep::where('member_id', $useradd)->first();
                                                $amount_1 = $request->top[$key]*($keep->keepset1/100);
                                                $keep_1 = $keep->keepset1;
                                                $com_1 = $ratepaygov->comg_4; 
                                                $pay_1 = $ratepaygov->payoutg_4;
                                                $master = Member::find($master->useradd);   
                                            }else{
                                                $amount_1 = 0;
                                                $keep_1 = 0;
                                                $com_1 = 0;
                                                $pay_1 = 0;
                                                $master = $master ; 
                                            }
                                        }
                                }     
                            }
                            elseif($type==1){
                                $paytop = $member->ratepaygov->payoutg_7;
                                $com_7 = $member->ratepaygov->comg_7;
                                $master = Member::find($useradd);
                                if($master){
                                            
                                            if($master->level == 6){
                                                $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                                $keep = Keep::where('member_id', $useradd)->first();
                                                $amount_6 = $request->top[$key]*($keep->keepset6/100);
                                                $keep_6 = $keep->keepset6;
                                                $com_6 = $ratepaygov->comg_7;  
                                                $pay_6 = $ratepaygov->payoutg_7;
                                                $master = Member::find($master->useradd); 
                                                }else{
                                                $amount_6 = 0;
                                                $keep_6 = 0;
                                                $com_6 = 0;
                                                $pay_6 = 0;
                                                $master = $master; 
                                            }                                      
                                            if($master){
                                                if($master->level == 5){
                                                $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                                $keep = Keep::where('member_id', $useradd)->first();
                                                $amount_5 = $request->top[$key]*($keep->keepset5/100);
                                                $keep_5 = $keep->keepset5;
                                                $com_5 = $ratepaygov->comg_7; 
                                                $pay_5 = $ratepaygov->payoutg_7;
                                                $master = Member::find($master->useradd); 
                                            
                                                }else{
                                                    $amount_5 = 0;
                                                    $keep_5 = 0;
                                                    $com_5 = 0;
                                                    $pay_5 = 0;
                                                    $master = $master; 
                                                }
                                            }
                                            if($master){
                                                if($master->level == 4){
                                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                                    $keep = Keep::where('member_id', $useradd)->first();
                                                    $amount_4 = $request->top[$key]*($keep->keepset4/100);
                                                    $keep_4 = $keep->keepset4;
                                                    $com_4 = $ratepaygov->comg_7; 
                                                    $pay_4 = $ratepaygov->payoutg_7;
                                                    $master = Member::find($master->useradd);   
                                                }else{
                                                    $amount_4 = 0;
                                                    $keep_4 = 0;
                                                    $com_4 = 0;
                                                    $pay_4 = 0;
                                                    $master = $master ; 
                                                }
                                            }
                                            if($master){
                                                if($master->level == 3){
                                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                                    $keep = Keep::where('member_id', $useradd)->first();
                                                    $amount_3 = $request->top[$key]*($keep->keepset3/100);
                                                    $keep_3 = $keep->keepset3;
                                                    $com_3 = $ratepaygov->comg_7; 
                                                    $pay_3 = $ratepaygov->payoutg_7;
                                                    $master = Member::find($master->useradd);   
                                                }else{
                                                    $amount_3 = 0;
                                                    $keep_3 = 0;
                                                    $com_3 = 0;
                                                    $pay_3 = 0;
                                                    $master = $master ; 
                                                }
                                            }
                                            if($master){
                                                if($master->level == 2){
                                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                                    $keep = Keep::where('member_id', $useradd)->first();
                                                    $amount_2 = $request->top[$key]*($keep->keepset2/100);
                                                    $keep_2 = $keep->keepset2;
                                                    $com_2 = $ratepaygov->comg_7;
                                                    $pay_2 = $ratepaygov->payoutg_7; 
                                                    $master = Member::find($master->useradd);   
                                                }else{
                                                    $amount_2 = 0;
                                                    $keep_2 = 0;
                                                    $com_2 = 0;
                                                    $pay_2 = 0;
                                                    $master = $master ; 
                                                }
                                            }
                                            if($master){
                                                if($master->level == 1){
                                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                                    $keep = Keep::where('member_id', $useradd)->first();
                                                    $amount_1 = $request->top[$key]*($keep->keepset1/100);
                                                    $keep_1 = $keep->keepset1;
                                                    $com_1 = $ratepaygov->comg_7; 
                                                    $pay_1 = $ratepaygov->payoutg_7;
                                                    $master = Member::find($master->useradd);   
                                                }else{
                                                    $amount_1 = 0;
                                                    $keep_1 = 0;
                                                    $com_1 = 0;
                                                    $pay_1 = 0;
                                                    $master = $master ; 
                                                }
                                            }
                                }    
                            }
                       
                        $userbets = Userbet::create([
                            'member_id' => $id,
                            'ticket_id'=>$tickets->id,
                            'lotto_id'=>$lottos->id,
                            'latepay' => 'หวยรัฐ70',
                            'date_time' => $datenow,
                            'pay' => $paytop,
                            'note' => '0',
                            'useradd' => $useradd,
                            'useradddetail' => $useradd_detail,
                            'bet_num' => $request->num[$key],
                            'type' => "top".$type,
                            'amount_1' => $amount_1,
                            'keep_1' => $keep_1,
                            'com_1' =>  $com_1,
                            'pay_1' =>  $pay_1,
                            'amount_2' => $amount_2,
                            'keep_2' => $keep_2,
                            'com_2' => $com_2,
                            'pay_2' =>  $pay_2,
                            'amount_3' => $amount_3,
                            'keep_3' => $keep_3,
                            'com_3' => $com_3,
                            'pay_3' =>  $pay_3,
                            'amount_4' => $amount_4,
                            'keep_4' => $keep_4,
                            'com_4' => $com_4,
                            'pay_4' =>  $pay_4,
                            'amount_5' => $amount_5,
                            'keep_5' => $keep_5,
                            'com_5' => $com_5,
                            'pay_5' =>  $pay_5,
                            'amount_6' => $amount_6,
                            'keep_6' => $keep_6,
                            'com_6' => $com_6,
                            'pay_6' =>  $pay_6,
                            'amount_7' => $request->top[$key],
                            'keep_7' => '0',
                            'com_7' => $com_7,
                            'pay_7' =>  $paytop,
                           
                        ]); 
                    }
            
                    if($request->bottom[$key]){
                        if($type==3){
                            $paybottom = $member->ratepaygov->payoutg_2;
                            $com_7 = $member->ratepaygov->comg_2;
                            $master = Member::find($useradd);
                            if($master){
                                   
                                    if($master->level == 6){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_6 = $request->bottom[$key]*($keep->keepset6/100);
                                        $keep_6 = $keep->keepset6;
                                        $com_6 = $ratepaygov->comg_2;  
                                        $pay_6 = $ratepaygov->payoutg_2;
                                        $master = Member::find($master->useradd); 
                                        }else{
                                        $amount_6 = 0;
                                        $keep_6 = 0;
                                        $com_6 = 0;
                                        $pay_6 = 0;
                                        $master = $master; 
                                    }                                      
                                    if($master){
                                        if($master->level == 5){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_5 = $request->bottom[$key]*($keep->keepset5/100);
                                        $keep_5 = $keep->keepset5;
                                        $com_5 = $ratepaygov->comg_2; 
                                        $pay_5 = $ratepaygov->payoutg_2;
                                        $master = Member::find($master->useradd); 
                                    
                                        }else{
                                            $amount_5 = 0;
                                            $keep_5 = 0;
                                            $com_5 = 0;
                                            $pay_5 = 0;
                                            $master = $master; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 4){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_4 = $request->bottom[$key]*($keep->keepset4/100);
                                            $keep_4 = $keep->keepset4;
                                            $com_4 = $ratepaygov->comg_2; 
                                            $pay_4 = $ratepaygov->payoutg_2;
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_4 = 0;
                                            $keep_4 = 0;
                                            $com_4 = 0;
                                            $pay_4 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 3){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_3 = $request->bottom[$key]*($keep->keepset3/100);
                                            $keep_3 = $keep->keepset3;
                                            $com_3 = $ratepaygov->comg_2; 
                                            $pay_3 = $ratepaygov->payoutg_2;
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_3 = 0;
                                            $keep_3 = 0;
                                            $com_3 = 0;
                                            $pay_3 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 2){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_2 = $request->bottom[$key]*($keep->keepset2/100);
                                            $keep_2 = $keep->keepset2;
                                            $com_2 = $ratepaygov->comg_2;
                                            $pay_2 = $ratepaygov->payoutg_2; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_2 = 0;
                                            $keep_2 = 0;
                                            $com_2 = 0;
                                            $pay_2 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 1){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_1 = $request->bottom[$key]*($keep->keepset1/100);
                                            $keep_1 = $keep->keepset1;
                                            $com_1 = $ratepaygov->comg_2; 
                                            $pay_1 = $ratepaygov->payoutg_2;
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_1 = 0;
                                            $keep_1 = 0;
                                            $com_1 = 0;
                                            $pay_1 = 0;
                                            $master = $master ; 
                                        }
                                    }
                            }  
                            //    dd($request->master[$key]);
                        }
                        elseif($type==2){
                            $paybottom = $member->ratepaygov->payoutg_5;
                            $com_7 = $member->ratepaygov->comg_5;
                            $master = Member::find($useradd);
                            if($master){                                    
                                    if($master->level == 6){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_6 = $request->bottom[$key]*($keep->keepset6/100);
                                        $keep_6 = $keep->keepset6;
                                        $com_6 = $ratepaygov->comg_5;  
                                        $pay_6 = $ratepaygov->payoutg_5;
                                        $master = Member::find($master->useradd); 
                                        }else{
                                        $amount_6 = 0;
                                        $keep_6 = 0;
                                        $com_6 = 0;
                                        $pay_6 = 0;
                                        $master = $master; 
                                    }                                      
                                    if($master){
                                        if($master->level == 5){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_5 = $request->bottom[$key]*($keep->keepset5/100);
                                        $keep_5 = $keep->keepset5;
                                        $com_5 = $ratepaygov->comg_5; 
                                        $pay_5 = $ratepaygov->payoutg_5;
                                        $master = Member::find($master->useradd); 
                                    
                                        }else{
                                            $amount_5 = 0;
                                            $keep_5 = 0;
                                            $com_5 = 0;
                                            $pay_5 = 0;
                                            $master = $master; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 4){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_4 = $request->bottom[$key]*($keep->keepset4/100);
                                            $keep_4 = $keep->keepset4;
                                            $com_4 = $ratepaygov->comg_5; 
                                            $pay_4 = $ratepaygov->payoutg_5;
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_4 = 0;
                                            $keep_4 = 0;
                                            $com_4 = 0;
                                            $pay_4 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 3){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_3 = $request->bottom[$key]*($keep->keepset3/100);
                                            $keep_3 = $keep->keepset3;
                                            $com_3 = $ratepaygov->comg_5; 
                                            $pay_3 = $ratepaygov->payoutg_5;
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_3 = 0;
                                            $keep_3 = 0;
                                            $com_3 = 0;
                                            $pay_3 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 2){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_2 = $request->bottom[$key]*($keep->keepset2/100);
                                            $keep_2 = $keep->keepset2;
                                            $com_2 = $ratepaygov->comg_5;
                                            $pay_2 = $ratepaygov->payoutg_5; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_2 = 0;
                                            $keep_2 = 0;
                                            $com_2 = 0;
                                            $pay_2 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 1){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_1 = $request->bottom[$key]*($keep->keepset1/100);
                                            $keep_1 = $keep->keepset1;
                                            $com_1 = $ratepaygov->comg_5; 
                                            $pay_1 = $ratepaygov->payoutg_5;
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_1 = 0;
                                            $keep_1 = 0;
                                            $com_1 = 0;
                                            $pay_1 = 0;
                                            $master = $master ; 
                                        }
                                    }
                            }     
                        }
                        elseif($type==1){
                            $paybottom = $member->ratepaygov->payoutg_8;
                            $com_7 = $member->ratepaygov->comg_8;
                            $master = Member::find($useradd);
                            if($master){
                                    if($master->level == 6){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_6 = $request->bottom[$key]*($keep->keepset6/100);
                                        $keep_6 = $keep->keepset6;
                                        $com_6 = $ratepaygov->comg_8;  
                                        $pay_6 = $ratepaygov->payoutg_8;
                                        $master = Member::find($master->useradd); 
                                        }else{
                                        $amount_6 = 0;
                                        $keep_6 = 0;
                                        $com_6 = 0;
                                        $pay_6 = 0;
                                        $master = $master; 
                                    }                                      
                                    if($master){
                                        if($master->level == 5){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_5 = $request->bottom[$key]*($keep->keepset5/100);
                                        $keep_5 = $keep->keepset5;
                                        $com_5 = $ratepaygov->comg_8; 
                                        $pay_5 = $ratepaygov->payoutg_8;
                                        $master = Member::find($master->useradd); 
                                    
                                        }else{
                                            $amount_5 = 0;
                                            $keep_5 = 0;
                                            $com_5 = 0;
                                            $pay_5 = 0;
                                            $master = $master; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 4){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_4 = $request->bottom[$key]*($keep->keepset4/100);
                                            $keep_4 = $keep->keepset4;
                                            $com_4 = $ratepaygov->comg_8; 
                                            $pay_4 = $ratepaygov->payoutg_8;
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_4 = 0;
                                            $keep_4 = 0;
                                            $com_4 = 0;
                                            $pay_4 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 3){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_3 = $request->bottom[$key]*($keep->keepset3/100);
                                            $keep_3 = $keep->keepset3;
                                            $com_3 = $ratepaygov->comg_8; 
                                            $pay_3 = $ratepaygov->payoutg_8;
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_3 = 0;
                                            $keep_3 = 0;
                                            $com_3 = 0;
                                            $pay_3 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 2){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_2 = $request->bottom[$key]*($keep->keepset2/100);
                                            $keep_2 = $keep->keepset2;
                                            $com_2 = $ratepaygov->comg_8;
                                            $pay_2 = $ratepaygov->payoutg_8; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_2 = 0;
                                            $keep_2 = 0;
                                            $com_2 = 0;
                                            $pay_2 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 1){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $useradd)->first();
                                            $amount_1 = $request->bottom[$key]*($keep->keepset1/100);
                                            $keep_1 = $keep->keepset1;
                                            $com_1 = $ratepaygov->comg_8; 
                                            $pay_1 = $ratepaygov->payoutg_8;
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_1 = 0;
                                            $keep_1 = 0;
                                            $com_1 = 0;
                                            $pay_1 = 0;
                                            $master = $master ; 
                                        }
                                    }
                            }    
                        }
                   
                        $userbets = Userbet::create([
                            'member_id' => $id,
                            'ticket_id'=>$tickets->id,
                            'lotto_id'=>$lottos->id,
                            'latepay' => 'หวยรัฐ70',
                            'date_time' => $datenow,
                            'pay' => $paybottom,
                            'note' => '0',
                            'useradd' => $useradd,
                            'useradddetail' => $useradd_detail,
                            'bet_num' => $request->num[$key],
                            'type' => "bottom".$type,
                            'amount_1' => $amount_1,
                            'keep_1' => $keep_1,
                            'com_1' =>  $com_1,
                            'pay_1' =>  $pay_1,
                            'amount_2' => $amount_2,
                            'keep_2' => $keep_2,
                            'com_2' => $com_2,
                            'pay_2' =>  $pay_2,
                            'amount_3' => $amount_3,
                            'keep_3' => $keep_3,
                            'com_3' => $com_3,
                            'pay_3' =>  $pay_3,
                            'amount_4' => $amount_4,
                            'keep_4' => $keep_4,
                            'com_4' => $com_4,
                            'pay_4' =>  $pay_4,
                            'amount_5' => $amount_5,
                            'keep_5' => $keep_5,
                            'com_5' => $com_5,
                            'pay_5' =>  $pay_5,
                            'amount_6' => $amount_6,
                            'keep_6' => $keep_6,
                            'com_6' => $com_6,
                            'pay_6' =>  $pay_6,
                            'amount_7' => $request->bottom[$key],
                            'keep_7' => '0',
                            'com_7' => $com_7,
                            'pay_7' =>  $paybottom,
                        
                        ]); 
                    }
                    if($request->tod[$key]){

                        $limite_paybet = Limite_paybet::where('bet_num',$num)->where('lotto_id', $lottos->id)->where('type', "tod".$type)->first();
                        
                        if($type==3){
                            $paytod = $member->ratepaygov->payoutg_3;
                            $com_7 = $member->ratepaygov->comg_3;
                            $master = Member::find($useradd);
                            if($master){
                                if($master->level == 6){
                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                    $keep = Keep::where('member_id', $useradd)->first();
                                    $amount_6 = $request->tod[$key]*($keep->keepset6/100);
                                    $keep_6 = $keep->keepset6;
                                    $com_6 = $ratepaygov->comg_3;  
                                    $pay_6 = $ratepaygov->payoutg_3;
                                    $master = Member::find($master->useradd); 
                                    }else{
                                    $amount_6 = 0;
                                    $keep_6 = 0;
                                    $com_6 = 0;
                                    $pay_6 = 0;
                                    $master = $master; 
                                }                                      
                                if($master){
                                    if($master->level == 5){
                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                    $keep = Keep::where('member_id', $useradd)->first();
                                    $amount_5 = $request->tod[$key]*($keep->keepset5/100);
                                    $keep_5 = $keep->keepset5;
                                    $com_5 = $ratepaygov->comg_3; 
                                    $pay_5 = $ratepaygov->payoutg_3;
                                    $master = Member::find($master->useradd); 
                                
                                    }else{
                                        $amount_5 = 0;
                                        $keep_5 = 0;
                                        $com_5 = 0;
                                        $pay_5 = 0;
                                        $master = $master; 
                                    }
                                }
                                if($master){
                                    if($master->level == 4){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_4 = $request->tod[$key]*($keep->keepset4/100);
                                        $keep_4 = $keep->keepset4;
                                        $com_4 = $ratepaygov->comg_3; 
                                        $pay_4 = $ratepaygov->payoutg_3;
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_4 = 0;
                                        $keep_4 = 0;
                                        $com_4 = 0;
                                        $pay_4 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 3){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_3 = $request->tod[$key]*($keep->keepset3/100);
                                        $keep_3 = $keep->keepset3;
                                        $com_3 = $ratepaygov->comg_3; 
                                        $pay_3 = $ratepaygov->payoutg_3;
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_3 = 0;
                                        $keep_3 = 0;
                                        $com_3 = 0;
                                        $pay_3 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 2){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();

                                        $amount_keep = $request->tod[$key]*($keep->keepset2/100);
                                        if($amount_keep > $limite_paybet->limite_amount){
                                            $amount_2 = ($amount_keep+$limite_paybet->limite_amount)-$amount_keep;
                                        }else{
                                         $amount_2 = $request->tod[$key]*($keep->keepset2/100);
                                        }

                                        $keep_2 = $keep->keepset2;
                                        $com_2 = $ratepaygov->comg_3;
                                        $pay_2 = $ratepaygov->payoutg_3; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_2 = 0;
                                        $keep_2 = 0;
                                        $com_2 = 0;
                                        $pay_2 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 1){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_1 = $request->tod[$key]*($keep->keepset1/100);
                                        $keep_1 = $keep->keepset1;
                                        $com_1 = $ratepaygov->comg_3; 
                                        $pay_1 = $ratepaygov->payoutg_3;
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_1 = 0;
                                        $keep_1 = 0;
                                        $com_1 = 0;
                                        $pay_1 = 0;
                                        $master = $master ; 
                                    }
                                }
                            }  
                            //    dd($request->master[$key]);
                        }
                        elseif($type==2){
                            $paytod = $member->ratepaygov->payoutg_6;
                            $com_7 = $member->ratepaygov->comg_6;
                            $master = Member::find($useradd);
                            if($master){
                                if($master->level == 6){
                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                    $keep = Keep::where('member_id', $useradd)->first();
                                    $amount_6 = $request->tod[$key]*($keep->keepset6/100);
                                    $keep_6 = $keep->keepset6;
                                    $com_6 = $ratepaygov->comg_6;  
                                    $pay_6 = $ratepaygov->payoutg_6;
                                    $master = Member::find($master->useradd); 
                                    }else{
                                    $amount_6 = 0;
                                    $keep_6 = 0;
                                    $com_6 = 0;
                                    $pay_6 = 0;
                                    $master = $master; 
                                }                                      
                                if($master){
                                    if($master->level == 5){
                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                    $keep = Keep::where('member_id', $useradd)->first();
                                    $amount_5 = $request->tod[$key]*($keep->keepset5/100);
                                    $keep_5 = $keep->keepset5;
                                    $com_5 = $ratepaygov->comg_6; 
                                    $pay_5 = $ratepaygov->payoutg_6;
                                    $master = Member::find($master->useradd); 
                                
                                    }else{
                                        $amount_5 = 0;
                                        $keep_5 = 0;
                                        $com_5 = 0;
                                        $pay_5 = 0;
                                        $master = $master; 
                                    }
                                }
                                if($master){
                                    if($master->level == 4){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_4 = $request->tod[$key]*($keep->keepset4/100);
                                        $keep_4 = $keep->keepset4;
                                        $com_4 = $ratepaygov->comg_6; 
                                        $pay_4 = $ratepaygov->payoutg_6;
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_4 = 0;
                                        $keep_4 = 0;
                                        $com_4 = 0;
                                        $pay_4 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 3){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_3 = $request->tod[$key]*($keep->keepset3/100);
                                        $keep_3 = $keep->keepset3;
                                        $com_3 = $ratepaygov->comg_6; 
                                        $pay_3 = $ratepaygov->payoutg_6;
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_3 = 0;
                                        $keep_3 = 0;
                                        $com_3 = 0;
                                        $pay_3 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 2){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_2 = $request->tod[$key]*($keep->keepset2/100);
                                        $keep_2 = $keep->keepset2;
                                        $com_2 = $ratepaygov->comg_6;
                                        $pay_2 = $ratepaygov->payoutg_6; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_2 = 0;
                                        $keep_2 = 0;
                                        $com_2 = 0;
                                        $pay_2 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 1){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $useradd)->first();
                                        $amount_1 = $request->tod[$key]*($keep->keepset1/100);
                                        $keep_1 = $keep->keepset1;
                                        $com_1 = $ratepaygov->comg_6; 
                                        $pay_1 = $ratepaygov->payoutg_6;
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_1 = 0;
                                        $keep_1 = 0;
                                        $com_1 = 0;
                                        $pay_1 = 0;
                                        $master = $master ; 
                                    }
                                }
                            }     
                        }
               
                        $userbets = Userbet::create([
                            'member_id' => $id,
                            'ticket_id'=>$tickets->id,
                            'lotto_id'=>$lottos->id,
                            'latepay' => 'หวยรัฐ70',
                            'date_time' => $datenow,
                            'pay' => $paytod,
                            'note' => '0',
                            'useradd' => $useradd,
                            'useradddetail' => $useradd_detail,
                            'bet_num' => $request->num[$key],
                            'type' => "tod".$type,
                            'amount_1' => $amount_1,
                            'keep_1' => $keep_1,
                            'com_1' =>  $com_1,
                            'pay_1' =>  $pay_1,
                            'amount_2' => $amount_2,
                            'keep_2' => $keep_2,
                            'com_2' => $com_2,
                            'pay_2' =>  $pay_2,
                            'amount_3' => $amount_3,
                            'keep_3' => $keep_3,
                            'com_3' => $com_3,
                            'pay_3' =>  $pay_3,
                            'amount_4' => $amount_4,
                            'keep_4' => $keep_4,
                            'com_4' => $com_4,
                            'pay_4' =>  $pay_4,
                            'amount_5' => $amount_5,
                            'keep_5' => $keep_5,
                            'com_5' => $com_5,
                            'pay_5' =>  $pay_5,
                            'amount_6' => $amount_6,
                            'keep_6' => $keep_6,
                            'com_6' => $com_6,
                            'pay_6' =>  $pay_6,
                            'amount_7' => $request->tod[$key],
                            'keep_7' => '0',
                            'com_7' => $com_7,
                            'pay_7' =>  $paytod,
                        
                        ]); 
                    }
                }      
    }    
        //return response()->json(['userbet_id'=>$id, 'data_request'=>$data_request, 'add'=>$add, 'userbets'=>$userbets]);
        return response()->json([
            'data_request'=>$data_request,
            'member'=>$member,
            
            ]);
    }
//////////////////////////////////////////////////////////////////////////////////////
    protected function createTicket($id,$lottos,$balance){
        $tickets = Ticket::create([
            'member_id' => $id,
            'lotto_id' => $lottos->id,
            'balance' => $balance
        ]); 
        return $tickets;
    }

    protected function checktype($num){
         $datacheck = strlen($num);
         return $datacheck;
    }




    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userbet;
use App\Member;
use App\Lotto;
use App\Ticket;
use App\Keep;
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
        foreach ($nums as $key => $num) {
            if($num){
                $type = $this->checktype($num);
                
                    if($request->top[$key]){

                            if($type==3){
                                $paytop = $member->ratepaygov->payoutg_1;
                                $com_7 = $member->ratepaygov->comg_1;
                                $master = Member::find($useradd);
                                if($master){
                                        if($master->level == 6){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_6 = $request->top[$key]*($keep->keepset/100);
                                            $keep_6 = $keep->keepset;
                                            $com_6 = $ratepaygov->comg_1;  
                                            $master = Member::find($master->useradd); 
                                        }else{
                                            $amount_6 = 0;
                                            $keep_6 = 0;
                                            $com_6 = 0;
                                            $master = $master; 
                                        }
                                    
                                    if($master){
                                    if($master->level == 5){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_5 = $request->top[$key]*($keep->keepset/100);
                                        $keep_5 = $keep->keepset;
                                        $com_5 = $ratepaygov->comg_1; 
                                        $master = Member::find($master->useradd); 
                                    
                                    }else{
                                        $amount_5 = 0;
                                        $keep_5 = 0;
                                        $com_5 = 0;
                                        $master = $master; 
                                    }
                                    }
                                    if($master){
                                        if($master->level == 4){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_4 = $request->top[$key]*($keep->keepset/100);
                                            $keep_4 = $keep->keepset;
                                            $com_4 = $ratepaygov->comg_1; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_4 = 0;
                                            $keep_4 = 0;
                                            $com_4 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 3){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_3 = $request->top[$key]*($keep->keepset/100);
                                            $keep_3 = $keep->keepset;
                                            $com_3 = $ratepaygov->comg_1; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_3 = 0;
                                            $keep_3 = 0;
                                            $com_3 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 2){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_2 = $request->top[$key]*($keep->keepset/100);
                                            $keep_2 = $keep->keepset;
                                            $com_2 = $ratepaygov->comg_1; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_2 = 0;
                                            $keep_2 = 0;
                                            $com_2 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 1){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_1 = $request->top[$key]*($keep->keepset/100);
                                            $keep_1 = $keep->keepset;
                                            $com_1 = $ratepaygov->comg_1; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_1 = 0;
                                            $keep_1 = 0;
                                            $com_1 = 0;
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
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_6 = $request->top[$key]*($keep->keepset/100);
                                        $keep_6 = $keep->keepset;
                                        $com_6 = $ratepaygov->comg_4;  
                                        $master = Member::find($master->useradd); 
                                    }else{
                                        $amount_6 = 0;
                                        $keep_6 = 0;
                                        $com_6 = 0;
                                        $master = $master; 
                                    }
                                    
                                    if($master){
                                    if($master->level == 5){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_5 = $request->top[$key]*($keep->keepset/100);
                                        $keep_5 = $keep->keepset;
                                        $com_5 = $ratepaygov->comg_4; 
                                        $master = Member::find($master->useradd); 
                                    
                                    }else{
                                        $amount_5 = 0;
                                        $keep_5 = 0;
                                        $com_5 = 0;
                                        $master = $master; 
                                    }
                                    }
                                    if($master){
                                        if($master->level == 4){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_4 = $request->top[$key]*($keep->keepset/100);
                                            $keep_4 = $keep->keepset;
                                            $com_4 = $ratepaygov->comg_4; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_4 = 0;
                                            $keep_4 = 0;
                                            $com_4 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 3){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_3 = $request->top[$key]*($keep->keepset/100);
                                            $keep_3 = $keep->keepset;
                                            $com_3 = $ratepaygov->comg_4; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_3 = 0;
                                            $keep_3 = 0;
                                            $com_3 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 2){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_2 = $request->top[$key]*($keep->keepset/100);
                                            $keep_2 = $keep->keepset;
                                            $com_2 = $ratepaygov->comg_4; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_2 = 0;
                                            $keep_2 = 0;
                                            $com_2 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 1){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_1 = $request->top[$key]*($keep->keepset/100);
                                            $keep_1 = $keep->keepset;
                                            $com_1 = $ratepaygov->comg_4; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_1 = 0;
                                            $keep_1 = 0;
                                            $com_1 = 0;
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
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_6 = $request->top[$key]*($keep->keepset/100);
                                        $keep_6 = $keep->keepset;
                                        $com_6 = $ratepaygov->comg_7;  
                                        $master = Member::find($master->useradd); 
                                    }else{
                                        $amount_6 = 0;
                                        $keep_6 = 0;
                                        $com_6 = 0;
                                        $master = $master; 
                                    }
                                    
                                    if($master){
                                    if($master->level == 5){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_5 = $request->top[$key]*($keep->keepset/100);
                                        $keep_5 = $keep->keepset;
                                        $com_5 = $ratepaygov->comg_7; 
                                        $master = Member::find($master->useradd); 
                                    
                                    }else{
                                        $amount_5 = 0;
                                        $keep_5 = 0;
                                        $com_5 = 0;
                                        $master = $master; 
                                    }
                                    }
                                    if($master){
                                        if($master->level == 4){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_4 = $request->top[$key]*($keep->keepset/100);
                                            $keep_4 = $keep->keepset;
                                            $com_4 = $ratepaygov->comg_7; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_4 = 0;
                                            $keep_4 = 0;
                                            $com_4 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 3){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_3 = $request->top[$key]*($keep->keepset/100);
                                            $keep_3 = $keep->keepset;
                                            $com_3 = $ratepaygov->comg_7; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_3 = 0;
                                            $keep_3 = 0;
                                            $com_3 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 2){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_2 = $request->top[$key]*($keep->keepset/100);
                                            $keep_2 = $keep->keepset;
                                            $com_2 = $ratepaygov->comg_7; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_2 = 0;
                                            $keep_2 = 0;
                                            $com_2 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                    if($master){
                                        if($master->level == 1){
                                            $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                            $keep = Keep::where('member_id', $master->id)->first();
                                            $amount_1 = $request->top[$key]*($keep->keepset/100);
                                            $keep_1 = $keep->keepset;
                                            $com_1 = $ratepaygov->comg_7; 
                                            $master = Member::find($master->useradd);   
                                        }else{
                                            $amount_1 = 0;
                                            $keep_1 = 0;
                                            $com_1 = 0;
                                            $master = $master ; 
                                        }
                                    }
                                }    
                            }
                       
                        $userbets = Userbet::create([
                            'member_id' => $id,
                            'ticket_id'=>$tickets->id,
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
                            'amount_2' => $amount_2,
                            'keep_2' => $keep_2,
                            'com_2' => $com_2,
                            'amount_3' => $amount_3,
                            'keep_3' => $keep_3,
                            'com_3' => $com_3,
                            'amount_4' => $amount_4,
                            'keep_4' => $keep_4,
                            'com_4' => $com_4,
                            'amount_5' => $amount_5,
                            'keep_5' => $keep_5,
                            'com_5' => $com_5,
                            'amount_6' => $amount_6,
                            'keep_6' => $keep_6,
                            'com_6' => $com_6,
                            'amount_7' => $request->top[$key],
                            'keep_7' => '0',
                            'com_7' => $com_7
                           
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
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_6 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_6 = $keep->keepset;
                                        $com_6 = $ratepaygov->comg_2;  
                                        $master = Member::find($master->useradd); 
                                    }else{
                                        $amount_6 = 0;
                                        $keep_6 = 0;
                                        $com_6 = 0;
                                        $master = $master; 
                                    }
                                
                                if($master){
                                if($master->level == 5){
                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                    $keep = Keep::where('member_id', $master->id)->first();
                                    $amount_5 = $request->bottom[$key]*($keep->keepset/100);
                                    $keep_5 = $keep->keepset;
                                    $com_5 = $ratepaygov->comg_2; 
                                    $master = Member::find($master->useradd); 
                                
                                }else{
                                    $amount_5 = 0;
                                    $keep_5 = 0;
                                    $com_5 = 0;
                                    $master = $master; 
                                }
                                }
                                if($master){
                                    if($master->level == 4){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_4 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_4 = $keep->keepset;
                                        $com_4 = $ratepaygov->comg_2; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_4 = 0;
                                        $keep_4 = 0;
                                        $com_4 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 3){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_3 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_3 = $keep->keepset;
                                        $com_3 = $ratepaygov->comg_2; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_3 = 0;
                                        $keep_3 = 0;
                                        $com_3 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 2){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_2 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_2 = $keep->keepset;
                                        $com_2 = $ratepaygov->comg_2; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_2 = 0;
                                        $keep_2 = 0;
                                        $com_2 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 1){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_1 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_1 = $keep->keepset;
                                        $com_1 = $ratepaygov->comg_2; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_1 = 0;
                                        $keep_1 = 0;
                                        $com_1 = 0;
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
                                    $keep = Keep::where('member_id', $master->id)->first();
                                    $amount_6 = $request->bottom[$key]*($keep->keepset/100);
                                    $keep_6 = $keep->keepset;
                                    $com_6 = $ratepaygov->comg_5;  
                                    $master = Member::find($master->useradd); 
                                }else{
                                    $amount_6 = 0;
                                    $keep_6 = 0;
                                    $com_6 = 0;
                                    $master = $master; 
                                }
                                
                                if($master){
                                if($master->level == 5){
                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                    $keep = Keep::where('member_id', $master->id)->first();
                                    $amount_5 = $request->bottom[$key]*($keep->keepset/100);
                                    $keep_5 = $keep->keepset;
                                    $com_5 = $ratepaygov->comg_5; 
                                    $master = Member::find($master->useradd); 
                                
                                }else{
                                    $amount_5 = 0;
                                    $keep_5 = 0;
                                    $com_5 = 0;
                                    $master = $master; 
                                }
                                }
                                if($master){
                                    if($master->level == 4){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_4 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_4 = $keep->keepset;
                                        $com_4 = $ratepaygov->comg_5; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_4 = 0;
                                        $keep_4 = 0;
                                        $com_4 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 3){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_3 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_3 = $keep->keepset;
                                        $com_3 = $ratepaygov->comg_5; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_3 = 0;
                                        $keep_3 = 0;
                                        $com_3 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 2){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_2 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_2 = $keep->keepset;
                                        $com_2 = $ratepaygov->comg_5; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_2 = 0;
                                        $keep_2 = 0;
                                        $com_2 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 1){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_1 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_1 = $keep->keepset;
                                        $com_1 = $ratepaygov->comg_5; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_1 = 0;
                                        $keep_1 = 0;
                                        $com_1 = 0;
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
                                    $keep = Keep::where('member_id', $master->id)->first();
                                    $amount_6 = $request->bottom[$key]*($keep->keepset/100);
                                    $keep_6 = $keep->keepset;
                                    $com_6 = $ratepaygov->comg_8;  
                                    $master = Member::find($master->useradd); 
                                }else{
                                    $amount_6 = 0;
                                    $keep_6 = 0;
                                    $com_6 = 0;
                                    $master = $master; 
                                }
                                
                                if($master){
                                if($master->level == 5){
                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                    $keep = Keep::where('member_id', $master->id)->first();
                                    $amount_5 = $request->bottom[$key]*($keep->keepset/100);
                                    $keep_5 = $keep->keepset;
                                    $com_5 = $ratepaygov->comg_8; 
                                    $master = Member::find($master->useradd); 
                                
                                }else{
                                    $amount_5 = 0;
                                    $keep_5 = 0;
                                    $com_5 = 0;
                                    $master = $master; 
                                }
                                }
                                if($master){
                                    if($master->level == 4){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_4 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_4 = $keep->keepset;
                                        $com_4 = $ratepaygov->comg_8; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_4 = 0;
                                        $keep_4 = 0;
                                        $com_4 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 3){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_3 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_3 = $keep->keepset;
                                        $com_3 = $ratepaygov->comg_8; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_3 = 0;
                                        $keep_3 = 0;
                                        $com_3 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 2){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_2 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_2 = $keep->keepset;
                                        $com_2 = $ratepaygov->comg_8; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_2 = 0;
                                        $keep_2 = 0;
                                        $com_2 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 1){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_1 = $request->bottom[$key]*($keep->keepset/100);
                                        $keep_1 = $keep->keepset;
                                        $com_1 = $ratepaygov->comg_8; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_1 = 0;
                                        $keep_1 = 0;
                                        $com_1 = 0;
                                        $master = $master ; 
                                    }
                                }
                            }    
                        }
                   
                        $userbets = Userbet::create([
                            'member_id' => $id,
                            'ticket_id'=>$tickets->id,
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
                            'amount_2' => $amount_2,
                            'keep_2' => $keep_2,
                            'com_2' => $com_2,
                            'amount_3' => $amount_3,
                            'keep_3' => $keep_3,
                            'com_3' => $com_3,
                            'amount_4' => $amount_4,
                            'keep_4' => $keep_4,
                            'com_4' => $com_4,
                            'amount_5' => $amount_5,
                            'keep_5' => $keep_5,
                            'com_5' => $com_5,
                            'amount_6' => $amount_6,
                            'keep_6' => $keep_6,
                            'com_6' => $com_6,
                            'amount_7' => $request->bottom[$key],
                            'keep_7' => '0',
                            'com_7' => $com_7
                        
                        ]); 
                    }
                    if($request->tod[$key]){
                        if($type==3){
                            $paytod = $member->ratepaygov->payoutg_3;
                            $com_7 = $member->ratepaygov->comg_3;
                            $master = Member::find($useradd);
                            if($master){
                                    if($master->level == 6){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_6 = $request->tod[$key]*($keep->keepset/100);
                                        $keep_6 = $keep->keepset;
                                        $com_6 = $ratepaygov->comg_3;  
                                        $master = Member::find($master->useradd); 
                                    }else{
                                        $amount_6 = 0;
                                        $keep_6 = 0;
                                        $com_6 = 0;
                                        $master = $master; 
                                    }
                                
                                if($master){
                                if($master->level == 5){
                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                    $keep = Keep::where('member_id', $master->id)->first();
                                    $amount_5 = $request->tod[$key]*($keep->keepset/100);
                                    $keep_5 = $keep->keepset;
                                    $com_5 = $ratepaygov->comg_3; 
                                    $master = Member::find($master->useradd); 
                                
                                }else{
                                    $amount_5 = 0;
                                    $keep_5 = 0;
                                    $com_5 = 0;
                                    $master = $master; 
                                }
                                }
                                if($master){
                                    if($master->level == 4){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_4 = $request->tod[$key]*($keep->keepset/100);
                                        $keep_4 = $keep->keepset;
                                        $com_4 = $ratepaygov->comg_3; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_4 = 0;
                                        $keep_4 = 0;
                                        $com_4 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 3){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_3 = $request->tod[$key]*($keep->keepset/100);
                                        $keep_3 = $keep->keepset;
                                        $com_3 = $ratepaygov->comg_3; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_3 = 0;
                                        $keep_3 = 0;
                                        $com_3 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 2){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_2 = $request->tod[$key]*($keep->keepset/100);
                                        $keep_2 = $keep->keepset;
                                        $com_2 = $ratepaygov->comg_3; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_2 = 0;
                                        $keep_2 = 0;
                                        $com_2 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 1){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_1 = $request->tod[$key]*($keep->keepset/100);
                                        $keep_1 = $keep->keepset;
                                        $com_1 = $ratepaygov->comg_3; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_1 = 0;
                                        $keep_1 = 0;
                                        $com_1 = 0;
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
                                    $keep = Keep::where('member_id', $master->id)->first();
                                    $amount_6 = $request->tod[$key]*($keep->keepset/100);
                                    $keep_6 = $keep->keepset;
                                    $com_6 = $ratepaygov->comg_6;  
                                    $master = Member::find($master->useradd); 
                                }else{
                                    $amount_6 = 0;
                                    $keep_6 = 0;
                                    $com_6 = 0;
                                    $master = $master; 
                                }
                                
                                if($master){
                                if($master->level == 5){
                                    $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                    $keep = Keep::where('member_id', $master->id)->first();
                                    $amount_5 = $request->tod[$key]*($keep->keepset/100);
                                    $keep_5 = $keep->keepset;
                                    $com_5 = $ratepaygov->comg_6; 
                                    $master = Member::find($master->useradd); 
                                
                                }else{
                                    $amount_5 = 0;
                                    $keep_5 = 0;
                                    $com_5 = 0;
                                    $master = $master; 
                                }
                                }
                                if($master){
                                    if($master->level == 4){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_4 = $request->tod[$key]*($keep->keepset/100);
                                        $keep_4 = $keep->keepset;
                                        $com_4 = $ratepaygov->comg_6; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_4 = 0;
                                        $keep_4 = 0;
                                        $com_4 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 3){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_3 = $request->tod[$key]*($keep->keepset/100);
                                        $keep_3 = $keep->keepset;
                                        $com_3 = $ratepaygov->comg_6; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_3 = 0;
                                        $keep_3 = 0;
                                        $com_3 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 2){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_2 = $request->tod[$key]*($keep->keepset/100);
                                        $keep_2 = $keep->keepset;
                                        $com_2 = $ratepaygov->comg_6; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_2 = 0;
                                        $keep_2 = 0;
                                        $com_2 = 0;
                                        $master = $master ; 
                                    }
                                }
                                if($master){
                                    if($master->level == 1){
                                        $ratepaygov = Ratepaygov::where('member_id', $master->id)->first();
                                        $keep = Keep::where('member_id', $master->id)->first();
                                        $amount_1 = $request->tod[$key]*($keep->keepset/100);
                                        $keep_1 = $keep->keepset;
                                        $com_1 = $ratepaygov->comg_6; 
                                        $master = Member::find($master->useradd);   
                                    }else{
                                        $amount_1 = 0;
                                        $keep_1 = 0;
                                        $com_1 = 0;
                                        $master = $master ; 
                                    }
                                }
                            }     
                        }
               
                        $userbets = Userbet::create([
                            'member_id' => $id,
                            'ticket_id'=>$tickets->id,
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
                            'amount_2' => $amount_2,
                            'keep_2' => $keep_2,
                            'com_2' => $com_2,
                            'amount_3' => $amount_3,
                            'keep_3' => $keep_3,
                            'com_3' => $com_3,
                            'amount_4' => $amount_4,
                            'keep_4' => $keep_4,
                            'com_4' => $com_4,
                            'amount_5' => $amount_5,
                            'keep_5' => $keep_5,
                            'com_5' => $com_5,
                            'amount_6' => $amount_6,
                            'keep_6' => $keep_6,
                            'com_6' => $com_6,
                            'amount_7' => $request->tod[$key],
                            'keep_7' => '0',
                            'com_7' => $com_7
                        
                        ]); 
                    }
                }      
    }    
        //return response()->json(['userbet_id'=>$id, 'data_request'=>$data_request, 'add'=>$add, 'userbets'=>$userbets]);
        return response()->json([
            'data_request'=>$data_request,
            'member'=>$member
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

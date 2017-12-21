<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userbet;
use App\Member;
use App\Lotto;
use App\Ticket;
use App\Keep;
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
        $member = Member::find($id);
        $dt = Carbon::now();
        $datenow = $dt->format('Y-m-d h:i:s');  
        $keepuseradd = $member->useradd;
        $keep = Keep::where('member_id',$keepuseradd)->first();
        $Agcoms = Member::where('id',$useradd)->first();
        // dd($Agcom);
        // dd($keep->keepset);
       // $useradds = Member::where('useradd', $useradd)->first();

        //$lottos = Lotto::where('day_on','>=','2017-12-19 16:30:00')->where('day_off','<=','2017-12-19 16:30:00')->get();
        $lottos = Lotto::where('day_on','<=',$datenow)->where('day_off','>=',$datenow)->first();

        $tickets = $this->createTicket($id,$lottos,30);

        $data_request = $request->all();

        $nums = $request->num;
        foreach ($nums as $key => $num) {
                if($num){
                    $type = $this->checktype($num);
                        if($request->top[$key]){
                            $userbet_top = $this->createTop($id,$request->num,$request->top,$key,$type,$useradd,$tickets,$datenow,$member,$keep,$Agcoms);
                        }

                        if($request->bottom[$key]){
                            $userbet_bottom = $this->createBottom($id,$request->num,$request->bottom,$key,$type,$useradd,$tickets,$datenow,$member,$keep,$Agcoms);
                        }
                        if($request->tod[$key]){
                            $userbet_tod = $this->createTod($id,$request->num,$request->tod,$key,$type,$useradd,$tickets,$datenow,$member,$keep,$Agcoms);
                        }
                    }
                
               
        }
       
        //return response()->json(['userbet_id'=>$id, 'data_request'=>$data_request, 'add'=>$add, 'userbets'=>$userbets]);
        return response()->json([
            'data_request'=>$data_request,
            //'userbet_top'=>$userbet_top, 
            // 'userbet_bottom'=>$userbet_bottom, 
            // 'userbet_tod'=>$userbet_tod,
            // 'type'=>$request->num[0],
            // 'type_count'=>$type
            'member'=>$member
            ]);
    }

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

    protected function createTop($id,$num,$top,$key,$type,$useradd,$tickets,$datenow,$member,$keep,$Agcoms){
        if($type==3){
            $typetop = $member->ratepaygov->comg_1;
            $paytop = $member->ratepaygov->payoutg_1;
            $Agtopamount = $top[$key]*($keep->keepset/100);
            $Agcom = $Agcoms->ratepaygov->comg_1;
        }elseif($type==2){
            $typetop = $member->ratepaygov->comg_4;
            $paytop = $member->ratepaygov->payoutg_4;
            $Agtopamount = $top[$key]*($keep->keepset/100);
            $Agcom = $Agcoms->ratepaygov->comg_4;
        }elseif($type==1){
            $typetop = $member->ratepaygov->comg_7;
            $paytop = $member->ratepaygov->payoutg_7;
            $Agtopamount = $top[$key]*($keep->keepset/100);
            $Agcom = $Agcoms->ratepaygov->comg_7;
        }
            $userbets = Userbet::create([
                'member_id' => $id,
                'ticket_id'=>$tickets->id,
                'latepay' => 'หวยรัฐ70',
                'date_time' => $datenow,
                'pay' => $paytop,
                'com_mem' => $typetop,
                'agent_amount' => $Agtopamount,
                'agent_keep' => $keep->keepset,
                'agent_com' => $Agcom,
                'company_amount' => '0',
                'company_com' => '0',
                'company_keep' => '0',
                'note' => '0',
                'useradd' => $useradd,
                'bet_num' => $num[$key],
                'type' => "top".$type,
                'amount' => $top[$key]
            ]); 
        return $userbets;
    }
   

    
    protected function createBottom($id,$num,$bottom,$key,$type,$useradd,$tickets,$datenow,$member,$keep,$Agcoms){
        if($type==3){
            $typebottom = $member->ratepaygov->comg_2;
            $paybottom = $member->ratepaygov->payoutg_2;
            $Agbottomamount = $bottom[$key]*($keep->keepset/100);
            $Agcom = $Agcoms->ratepaygov->comg_2;
        }elseif($type==2){
            $typebottom = $member->ratepaygov->comg_5;
            $paybottom = $member->ratepaygov->payoutg_5;
            $Agbottomamount = $bottom[$key]*($keep->keepset/100);
            $Agcom = $Agcoms->ratepaygov->comg_5;
        }elseif($type==1){
            $typebottom = $member->ratepaygov->comg_8;
            $paybottom = $member->ratepaygov->payoutg_8;
            $Agbottomamount = $bottom[$key]*($keep->keepset/100);
            $Agcom = $Agcoms->ratepaygov->comg_8;
        }
            $userbets = Userbet::create([
                'member_id' => $id,
                'ticket_id'=>$tickets->id,
                'latepay' => 'หวยรัฐ70',
                'date_time' => $datenow,
                'pay' => $paybottom,
                'com_mem' => $typebottom,
                'agent_amount' => $Agbottomamount,
                'agent_keep' => $keep->keepset,
                'agent_com' => $Agcom,
                'company_amount' => '0',
                'company_com' => '0',
                'company_keep' => '0',
                'note' => '0',
                'useradd' => $useradd,
                'bet_num' => $num[$key],
                'type' => "bottom".$type,
                'amount' => $bottom[$key]
            ]); 
        return $userbets;
    }

    protected function createTod($id,$num,$tod,$key,$type,$useradd,$tickets,$datenow,$member,$keep,$Agcoms){
        if($type==3){
            $typetod = $member->ratepaygov->comg_3;
            $paytod = $member->ratepaygov->payoutg_3;
            $Agtodamount = $tod[$key]*($keep->keepset/100);
            $Agcom = $Agcoms->ratepaygov->comg_3;
        }elseif($type==2){
            $typetod = $member->ratepaygov->comg_6;
            $paytod = $member->ratepaygov->payoutg_6;
            $Agtodamount = $tod[$key]*($keep->keepset/100);
            $Agcom = $Agcoms->ratepaygov->comg_6;
        }
            $userbets = Userbet::create([
                'member_id' => $id,
                'ticket_id'=>$tickets->id,
                'latepay' => 'หวยรัฐ70',
                'date_time' => $datenow,
                'pay' => $paytod,
                'com_mem' => $typetod,
                'agent_amount' => $Agtodamount,
                'agent_keep' => $keep->keepset,
                'agent_com' => $Agcom,
                'company_amount' => '0',
                'company_com' => '0',
                'company_keep' => '0',
                'note' => '0',
                'useradd' => $useradd,
                'bet_num' => $num[$key],
                'type' => "tod".$type,
                'amount' => $tod[$key]
            ]); 
        return $userbets;
    }
}

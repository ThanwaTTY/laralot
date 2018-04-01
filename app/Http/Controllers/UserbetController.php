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
use App\Bet_result;
use Carbon\Carbon;
use Illuminate\Validation;
use Illuminate\Validation\Rule;

class UserbetController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        //echo $id;
        return view('play.bet.index2');
        //return view('play.bet.index2');
    }

    public function home()
    {
        return view('play.bet.index');
    }
    
  public function store(Request $request)
    {
        // $rules =[
        //     'num.*' => 'required',

        // ];

        //  $datas = request()->except([ '_token' ]);
        //  //dd($datas);
        //          return response()->json([
        //     'rules'=>true,

             
        // ]);
        //  $this->validate($request, $rules);






        $id = auth()->user()->id;
        $useradd = auth()->user()->useradd;
        $useradddetail = auth()->user()->useradddetail;
        $useradd_detail = $useradddetail;

/// แปลงเป็น loop
                $useradd_detail_loop = explode(" ", $useradddetail);
                rsort($useradd_detail_loop);//rsort = เป็นฟังก์ชันสำหรับการเรียงข้อมูลจากมากไปน้อย
                //print_r($useradd_detail_loop);


        $member = Member::find($id);
        $dt = Carbon::now();
        $datenow = $dt->format('Y-m-d h:i:s');  
        $keepuseradd = $member->useradd;
        $keep = Keep::where('member_id',$keepuseradd)->first();
        // $Agcoms = Member::where('id',$useradd)->first();


        $lottos = Lotto::where('day_on','<=',$datenow)->where('day_off','>=',$datenow)->first();
        
        

  
        $tickets = $this->createTicket($id,$lottos,30);

        $data_request = $request->all();
        //$check = 0;
        foreach ($request->num as $key => $num) {
            $row =$key+1;
            if ($num) {

                $check[$key]="true ".$key;
                $bet_num[$key]=$request->num[$key];
                $type = $this->checktype($num);
                if($type==3){
                    $d_type[$key]=$type."ตัว";
                }elseif ($type==2) {
                    $d_type[$key]=$type."ตัว";
                }elseif ($type==1) {
                    $d_type[$key]=$type."ตัว";
                }
                //
                
                //$TypeBet = $this->IsTypeBet($member->id,$tickets,$lottos,$datenow,$num,$type,$request->top[$key],$request->bottom[$key],$request->tod[$key],$member,$useradd_detail_loop,$useradd,$keep);
                if($type==3){
                    /////////////////// check limit

                    /////////////////// top3
                    
                    if ($request->top[$key]) {
                        $check_after_bet = Userbet::where('member_id',$id)->where('bet_num',$num)->where('type','top'.$type)->where('lotto_id',$lottos->id)->get();
                        $BetUp = 0;
                        $BetUp_array[] = 0;
                        // ยอดเกิน

                        for ($i=1; $i <=6 ; $i++) { 
                            $comg[$i]=0;
                                // ค่าคอมมิชชั่น
                            $payoutg[$i]=0;
                                // อัตราจ่าย
                            $limitBet[$i]=0;
                                // ลิมิตอั่น มาตราฐาน 
                            $limit_amount[$i]=0;
                                // รายการอั้นที่เล่นแล้ว
                            $total_limit[$i]=0;
                                // ลิมิตอั้นคงเหลือ ที่สามารถรับได้
                        }

                        foreach ($check_after_bet as $loop_limit => $limit) {
                            $limit_amount[1] += $limit->amount_1;
                            $limit_amount[2] += $limit->amount_2;
                            $limit_amount[3] += $limit->amount_3;
                            $limit_amount[4] += $limit->amount_4;
                            $limit_amount[5] += $limit->amount_5;
                            $limit_amount[6] += $limit->amount_6;
                            // ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                        }
                        for ($i=6; $i >= 1; $i--) { 
                            $amount_keep[$i] = number_format(($request->top[$key]*($keep['keepset'.$i]/100)), 2, '.', '');
                            //ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                        }

                        $payoutg[7] = $member->ratepaygov->payoutg_1;
                        $comg[7] = $member->ratepaygov->comg_1;
                        $useradd_detail_loopsort = $useradd_detail_loop;//rsort = เป็นฟังก์ชันสำหรับการเรียงข้อมูลจากมากไปน้อย
  
                        foreach( $member->getParents() as $user ) {
                                $level_useradd = $user->level;
                                $limitBet[$level_useradd] = $user->limit->top3;
                                // $limit_admin = $user->getLimit();
                                $total_limit[$level_useradd] = $limitBet[$level_useradd] - $limit_amount[$level_useradd];
                                $ratepaygov[$user->useradd] = $user->getLatepaygov();
                                $keep_begin = $user->getKeep();
                                $comg[$level_useradd] = $ratepaygov[$user->useradd]['comg_1'];
                                $payoutg[$level_useradd] = $ratepaygov[$user->useradd]['payoutg_1'];
                                
                                //////////////////// check bet pass
                                
                                $resultkeepover[$level_useradd] = $keep_begin->keepover;
                                
                                if($keep_begin->keepover==1){ // เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = number_format($amount_keep[$level_useradd]+(-$BetUp), 2, '.', '');//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว + ของเกินที่ยกมา
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เล่นไป
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        // $count_datalimittotal_data[$level_useradd] = number_format($datalimittotal[$level_useradd] - $data[$level_useradd], 2, '.', '');
                                        $BetUpcount[$level_useradd] = ($datalimittotal[$level_useradd]-$data[$level_useradd]); 
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  1";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp = $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  2";
                                            $BetUp = 0;
                                            $amount_keep[$level_useradd] = $data[$level_useradd];                                           
                                        }
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  3";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  4";
                                        }

                                    }
                                }else{ //ไม่เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  5";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  6";                                         
                                        }
                                            
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  7";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];     
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  8";                                          
                                        }
                                            
                                    }
                                }
                                
                                ///////////////////    
                        }
                        $limite_paybets = Limite_paybet::where('member_id',$user->id)->where('lotto_id',$lottos->id)->where('type','top3')->where('bet_num',$num)->first();
                        if($limite_paybets){
                        //    dump($limite_paybets->bet_num); 
                            $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                            $datalimit[$level_useradd] = $limite_paybets->limite_amount;// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                            $total_limit[$level_useradd] = $datalimit[$level_useradd] - $limit_amount[$level_useradd];
                            $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                            $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                            if($BetUpcount[$level_useradd]<=0){
                                $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุดที่ตั้งอั้น ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  limit 1";
                                // $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                $BetUp += $BetUpcount[$level_useradd];
                                // $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];     
                            }else{
                                $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุดที่ตั้งอั้น ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  limit 2";                                          
                            }
                            
                        }
                        
                            if($BetUpcount[1]>=0){
                                $massage[] = "insert success";
                                $error["td-0-row-".$row]=true;
                                    $userbets[] = $this->Userbet_Create($id,$tickets,$lottos,'หวยรัฐ70',$datenow,$useradd,$useradddetail,$num,'top3',$amount_keep,$keep,$comg,$payoutg,$request->top[$key],$key);                                
                            }else{
                                $massage[] = "insert fail";
                                $error["td-0-row-".$row]=false;
                            }
                    }
                    /////////////////// bottom3
                    
                    if ($request->bottom[$key]) {
                        $test = "Active";
                        $check_after_bet = Userbet::where('member_id',$id)->where('bet_num',$num)->where('type','bottom'.$type)->where('lotto_id',$lottos->id)->get();
                        $BetUp = 0;
                        $BetUp_array[] = 0;
                        // ยอดเกิน

                        for ($i=1; $i <=6 ; $i++) { 
                            $comg[$i]=0;
                                // ค่าคอมมิชชั่น
                            $payoutg[$i]=0;
                                // อัตราจ่าย
                            $limitBet[$i]=0;
                                // ลิมิตอั่น มาตราฐาน 
                            $limit_amount[$i]=0;
                                // รายการอั้นที่เล่นแล้ว
                            $total_limit[$i]=0;
                                // ลิมิตอั้นคงเหลือ ที่สามารถรับได้
                        }

                        foreach ($check_after_bet as $loop_limit => $limit) {
                            $limit_amount[1] += $limit->amount_1;
                            $limit_amount[2] += $limit->amount_2;
                            $limit_amount[3] += $limit->amount_3;
                            $limit_amount[4] += $limit->amount_4;
                            $limit_amount[5] += $limit->amount_5;
                            $limit_amount[6] += $limit->amount_6;
                            // ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                        }
                        for ($i=6; $i >= 1; $i--) { 
                            $amount_keep[$i] = number_format(($request->bottom[$key]*($keep['keepset'.$i]/100)), 2, '.', '');
                            //ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                        }

                        $payoutg[7] = $member->ratepaygov->payoutg_2;
                        $comg[7] = $member->ratepaygov->comg_2;
                        $useradd_detail_loopsort = $useradd_detail_loop;//rsort = เป็นฟังก์ชันสำหรับการเรียงข้อมูลจากมากไปน้อย
  
                        foreach( $member->getParents() as $user ) {
                                $level_useradd = $user->level;
                                $limitBet[$level_useradd] = $user->limit->bottom3;
                                // $limit_admin = $user->getLimit();
                                $total_limit[$level_useradd] = $limitBet[$level_useradd] - $limit_amount[$level_useradd];
                                $ratepaygov[$user->useradd] = $user->getLatepaygov();
                                $keep_begin = $user->getKeep();
                                $comg[$level_useradd] = $ratepaygov[$user->useradd]['comg_2'];
                                $payoutg[$level_useradd] = $ratepaygov[$user->useradd]['payoutg_2'];
                                
                                //////////////////// check bet pass
                                
                                $resultkeepover[$level_useradd] = $keep_begin->keepover;
                                
                                if($keep_begin->keepover==1){ // เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = number_format($amount_keep[$level_useradd]+(-$BetUp), 2, '.', '');//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว + ของเกินที่ยกมา
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เล่นไป
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        // $count_datalimittotal_data[$level_useradd] = number_format($datalimittotal[$level_useradd] - $data[$level_useradd], 2, '.', '');
                                        $BetUpcount[$level_useradd] = ($datalimittotal[$level_useradd]-$data[$level_useradd]); 
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  1";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp = $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  2";
                                            $BetUp = 0;
                                            $amount_keep[$level_useradd] = $data[$level_useradd];                                           
                                        }
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  3";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  4";
                                        }

                                    }
                                }else{ //ไม่เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  5";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  6";                                         
                                        }
                                            
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  7";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];     
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  8";                                          
                                        }
                                            
                                    }
                                }
                                
                                ///////////////////    
                        }
                            if($BetUpcount[1]>=0){
                                $massage[] = "insert success";
                                $error["td-1-row-".$row]=true;
                                    $userbets[] = $this->Userbet_Create($id,$tickets,$lottos,'หวยรัฐ70',$datenow,$useradd,$useradddetail,$num,'bottom3',$amount_keep,$keep,$comg,$payoutg,$request->bottom[$key],$key);                                
                            }else{
                                $massage[] = "insert fail";
                                $error["td-1-row-".$row]=false;                              
                            }
                    }
                    /////////////////// tod3
                    
                    if ($request->tod[$key]) {
                        $test = "Active";
                        $check_after_bet = Userbet::where('member_id',$id)->where('bet_num',$num)->where('type','tod'.$type)->where('lotto_id',$lottos->id)->get();
                        $BetUp = 0;
                        $BetUp_array[] = 0;
                        // ยอดเกิน

                        for ($i=1; $i <=6 ; $i++) { 
                            $comg[$i]=0;
                                // ค่าคอมมิชชั่น
                            $payoutg[$i]=0;
                                // อัตราจ่าย
                            $limitBet[$i]=0;
                                // ลิมิตอั่น มาตราฐาน 
                            $limit_amount[$i]=0;
                                // รายการอั้นที่เล่นแล้ว
                            $total_limit[$i]=0;
                                // ลิมิตอั้นคงเหลือ ที่สามารถรับได้
                        }

                        foreach ($check_after_bet as $loop_limit => $limit) {
                            $limit_amount[1] += $limit->amount_1;
                            $limit_amount[2] += $limit->amount_2;
                            $limit_amount[3] += $limit->amount_3;
                            $limit_amount[4] += $limit->amount_4;
                            $limit_amount[5] += $limit->amount_5;
                            $limit_amount[6] += $limit->amount_6;
                            // ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                        }
                        for ($i=6; $i >= 1; $i--) { 
                            $amount_keep[$i] = number_format(($request->tod[$key]*($keep['keepset'.$i]/100)), 2, '.', '');
                            //ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                        }

                        $payoutg[7] = $member->ratepaygov->payoutg_3;
                        $comg[7] = $member->ratepaygov->comg_3;
                        $useradd_detail_loopsort = $useradd_detail_loop;//rsort = เป็นฟังก์ชันสำหรับการเรียงข้อมูลจากมากไปน้อย
                        
                        foreach( $member->getParents() as $user ) {
                                $level_useradd = $user->level;
                                $limitBet[$level_useradd] = $user->limit->tod3;
                                // $limit_admin = $user->getLimit();
                                $total_limit[$level_useradd] = $limitBet[$level_useradd] - $limit_amount[$level_useradd];
                                $ratepaygov[$user->useradd] = $user->getLatepaygov();
                                $keep_begin = $user->getKeep();
                                $comg[$level_useradd] = $ratepaygov[$user->useradd]['comg_3'];
                                $payoutg[$level_useradd] = $ratepaygov[$user->useradd]['payoutg_3'];
                                
                                //////////////////// check bet pass
                                
                                $resultkeepover[$level_useradd] = $keep_begin->keepover;
                                
                                if($keep_begin->keepover==1){ // เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = number_format($amount_keep[$level_useradd]+(-$BetUp), 2, '.', '');//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว + ของเกินที่ยกมา
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เล่นไป
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        // $count_datalimittotal_data[$level_useradd] = number_format($datalimittotal[$level_useradd] - $data[$level_useradd], 2, '.', '');
                                        $BetUpcount[$level_useradd] = ($datalimittotal[$level_useradd]-$data[$level_useradd]); 
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  1";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp = $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  2";
                                            $BetUp = 0;
                                            $amount_keep[$level_useradd] = $data[$level_useradd];                                           
                                        }
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  3";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  4";
                                        }

                                    }
                                }else{ //ไม่เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  5";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  6";                                         
                                        }
                                            
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  7";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];     
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  8";                                          
                                        }
                                            
                                    }
                                }
                                
                                ///////////////////    
                        }
                        
                            if($BetUpcount[1]>=0){
                                $massage[] = "insert success";
                                $error["td-2-row-".$row]=true;                                                             
                                    $userbets[] = $this->Userbet_Create($id,$tickets,$lottos,'หวยรัฐ70',$datenow,$useradd,$useradddetail,$num,'tod3',$amount_keep,$keep,$comg,$payoutg,$request->tod[$key],$key);                                                                    
                            }else{
                                $massage[] = "insert fail";
                                $error["td-2-row-".$row]=false;                                                            
                            }
                    }
                    
                }elseif($type==2){
                    /////////////////// top2
                    if ($request->top[$key]) {
                        $check_after_bet = Userbet::where('member_id',$id)->where('bet_num',$num)->where('type','top'.$type)->where('lotto_id',$lottos->id)->get();
                        $BetUp = 0;
                        $BetUp_array[] = 0;
                        // ยอดเกิน

                        for ($i=1; $i <=6 ; $i++) { 
                            $comg[$i]=0;
                                // ค่าคอมมิชชั่น
                            $payoutg[$i]=0;
                                // อัตราจ่าย
                            $limitBet[$i]=0;
                                // ลิมิตอั่น มาตราฐาน 
                            $limit_amount[$i]=0;
                                // รายการอั้นที่เล่นแล้ว
                            $total_limit[$i]=0;
                                // ลิมิตอั้นคงเหลือ ที่สามารถรับได้
                        }

                        foreach ($check_after_bet as $loop_limit => $limit) {
                            $limit_amount[1] += $limit->amount_1;
                            $limit_amount[2] += $limit->amount_2;
                            $limit_amount[3] += $limit->amount_3;
                            $limit_amount[4] += $limit->amount_4;
                            $limit_amount[5] += $limit->amount_5;
                            $limit_amount[6] += $limit->amount_6;
                            // ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                        }
                        for ($i=6; $i >= 1; $i--) { 
                            $amount_keep[$i] = number_format(($request->top[$key]*($keep['keepset'.$i]/100)), 2, '.', '');
                            //ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                        }

                        $payoutg[7] = $member->ratepaygov->payoutg_4;
                        $comg[7] = $member->ratepaygov->comg_4;
                        $useradd_detail_loopsort = $useradd_detail_loop;//rsort = เป็นฟังก์ชันสำหรับการเรียงข้อมูลจากมากไปน้อย
  
                        foreach( $member->getParents() as $user ) {
                                $level_useradd = $user->level;
                                $limitBet[$level_useradd] = $user->limit->top2;
                                // $limit_admin = $user->getLimit();
                                $total_limit[$level_useradd] = $limitBet[$level_useradd] - $limit_amount[$level_useradd];
                                $ratepaygov[$user->useradd] = $user->getLatepaygov();
                                $keep_begin = $user->getKeep();
                                $comg[$level_useradd] = $ratepaygov[$user->useradd]['comg_4'];
                                $payoutg[$level_useradd] = $ratepaygov[$user->useradd]['payoutg_4'];
                                
                                //////////////////// check bet pass
                                
                                $resultkeepover[$level_useradd] = $keep_begin->keepover;
                                
                                if($keep_begin->keepover==1){ // เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = number_format($amount_keep[$level_useradd]+(-$BetUp), 2, '.', '');//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว + ของเกินที่ยกมา
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เล่นไป
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        // $count_datalimittotal_data[$level_useradd] = number_format($datalimittotal[$level_useradd] - $data[$level_useradd], 2, '.', '');
                                        $BetUpcount[$level_useradd] = ($datalimittotal[$level_useradd]-$data[$level_useradd]); 
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  1";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp = $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  2";
                                            $BetUp = 0;
                                            $amount_keep[$level_useradd] = $data[$level_useradd];                                           
                                        }
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  3";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  4";
                                        }

                                    }
                                }else{ //ไม่เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  5";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  6";                                         
                                        }
                                            
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  7";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];     
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  8";                                          
                                        }
                                            
                                    }
                                }
                                
                                ///////////////////    
                        }
                            if($BetUpcount[1]>=0){
                                $massage[] = "insert success";
                                $error["td-0-row-".$row]=true;                                                              
                                    $userbets[] = $this->Userbet_Create($id,$tickets,$lottos,'หวยรัฐ70',$datenow,$useradd,$useradddetail,$num,'top2',$amount_keep,$keep,$comg,$payoutg,$request->top[$key],$key);                                
                            }else{
                                $massage[] = "insert fail";
                                $error["td-0-row-".$row]=false;                                                                                              
                            }
                    }
                    /////////////////// bottom2
                    
                    if ($request->bottom[$key]) {
                        // $test = "Active";
                        $check_after_bet = Userbet::where('member_id',$id)->where('bet_num',$num)->where('type','bottom'.$type)->where('lotto_id',$lottos->id)->get();
                        $BetUp = 0;
                        $BetUp_array[] = 0;
                        // ยอดเกิน

                        for ($i=1; $i <=6 ; $i++) { 
                            $comg[$i]=0;
                                // ค่าคอมมิชชั่น
                            $payoutg[$i]=0;
                                // อัตราจ่าย
                            $limitBet[$i]=0;
                                // ลิมิตอั่น มาตราฐาน 
                            $limit_amount[$i]=0;
                                // รายการอั้นที่เล่นแล้ว
                            $total_limit[$i]=0;
                                // ลิมิตอั้นคงเหลือ ที่สามารถรับได้
                        }

                        foreach ($check_after_bet as $loop_limit => $limit) {
                            $limit_amount[1] += $limit->amount_1;
                            $limit_amount[2] += $limit->amount_2;
                            $limit_amount[3] += $limit->amount_3;
                            $limit_amount[4] += $limit->amount_4;
                            $limit_amount[5] += $limit->amount_5;
                            $limit_amount[6] += $limit->amount_6;
                            // ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                        }
                        for ($i=6; $i >= 1; $i--) { 
                            $amount_keep[$i] = number_format(($request->bottom[$key]*($keep['keepset'.$i]/100)), 2, '.', '');
                            //ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                        }

                        $payoutg[7] = $member->ratepaygov->payoutg_5;
                        $comg[7] = $member->ratepaygov->comg_5;
                        $useradd_detail_loopsort = $useradd_detail_loop;//rsort = เป็นฟังก์ชันสำหรับการเรียงข้อมูลจากมากไปน้อย
  
                        foreach( $member->getParents() as $user ) {
                                $level_useradd = $user->level;
                                $limitBet[$level_useradd] = $user->limit->bottom2;
                                // $limit_admin = $user->getLimit();
                                $total_limit[$level_useradd] = $limitBet[$level_useradd] - $limit_amount[$level_useradd];
                                $ratepaygov[$user->useradd] = $user->getLatepaygov();
                                $keep_begin = $user->getKeep();
                                $comg[$level_useradd] = $ratepaygov[$user->useradd]['comg_5'];
                                $payoutg[$level_useradd] = $ratepaygov[$user->useradd]['payoutg_5'];
                                
                                //////////////////// check bet pass
                                
                                $resultkeepover[$level_useradd] = $keep_begin->keepover;
                                
                                if($keep_begin->keepover==1){ // เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = number_format($amount_keep[$level_useradd]+(-$BetUp), 2, '.', '');//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว + ของเกินที่ยกมา
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เล่นไป
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        // $count_datalimittotal_data[$level_useradd] = number_format($datalimittotal[$level_useradd] - $data[$level_useradd], 2, '.', '');
                                        $BetUpcount[$level_useradd] = ($datalimittotal[$level_useradd]-$data[$level_useradd]); 
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  1";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp = $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  2";
                                            $BetUp = 0;
                                            $amount_keep[$level_useradd] = $data[$level_useradd];                                           
                                        }
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  3";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  4";
                                        }

                                    }
                                }else{ //ไม่เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  5";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  6";                                         
                                        }
                                            
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  7";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];     
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  8";                                          
                                        }
                                            
                                    }
                                }
                                
                                ///////////////////    
                        }
                            if($BetUpcount[1]>=0){
                                $massage[] = "insert success";
                                $error["td-1-row-".$row]=true;                                                                                               
                                    $userbets[] = $this->Userbet_Create($id,$tickets,$lottos,'หวยรัฐ70',$datenow,$useradd,$useradddetail,$num,'bottom2',$amount_keep,$keep,$comg,$payoutg,$request->bottom[$key],$key);                                
                            }else{
                                $massage[] = "insert fail";
                                $error["td-1-row-".$row]=false;                                                                                              
                            }
                    }
                    /////////////////// tod2
                    
                    if ($request->tod[$key]) {
                        $test = "Active";
                        $check_after_bet = Userbet::where('member_id',$id)->where('bet_num',$num)->where('type','tod'.$type)->where('lotto_id',$lottos->id)->get();
                        $BetUp = 0;
                        $BetUp_array[] = 0;
                        // ยอดเกิน

                        for ($i=1; $i <=6 ; $i++) { 
                            $comg[$i]=0;
                                // ค่าคอมมิชชั่น
                            $payoutg[$i]=0;
                                // อัตราจ่าย
                            $limitBet[$i]=0;
                                // ลิมิตอั่น มาตราฐาน 
                            $limit_amount[$i]=0;
                                // รายการอั้นที่เล่นแล้ว
                            $total_limit[$i]=0;
                                // ลิมิตอั้นคงเหลือ ที่สามารถรับได้
                        }

                        foreach ($check_after_bet as $loop_limit => $limit) {
                            $limit_amount[1] += $limit->amount_1;
                            $limit_amount[2] += $limit->amount_2;
                            $limit_amount[3] += $limit->amount_3;
                            $limit_amount[4] += $limit->amount_4;
                            $limit_amount[5] += $limit->amount_5;
                            $limit_amount[6] += $limit->amount_6;
                            // ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                        }
                        for ($i=6; $i >= 1; $i--) { 
                            $amount_keep[$i] = number_format(($request->tod[$key]*($keep['keepset'.$i]/100)), 2, '.', '');
                            //ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                        }

                        $payoutg[7] = $member->ratepaygov->payoutg_6;
                        $comg[7] = $member->ratepaygov->comg_6;
                        $useradd_detail_loopsort = $useradd_detail_loop;//rsort = เป็นฟังก์ชันสำหรับการเรียงข้อมูลจากมากไปน้อย
                        
                        foreach( $member->getParents() as $user ) {
                                $level_useradd = $user->level;
                                $limitBet[$level_useradd] = $user->limit->tod2;
                                // $limit_admin = $user->getLimit();
                                $total_limit[$level_useradd] = $limitBet[$level_useradd] - $limit_amount[$level_useradd];
                                $ratepaygov[$user->useradd] = $user->getLatepaygov();
                                $keep_begin = $user->getKeep();
                                $comg[$level_useradd] = $ratepaygov[$user->useradd]['comg_6'];
                                $payoutg[$level_useradd] = $ratepaygov[$user->useradd]['payoutg_6'];
                                
                                //////////////////// check bet pass
                                
                                $resultkeepover[$level_useradd] = $keep_begin->keepover;
                                
                                if($keep_begin->keepover==1){ // เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = number_format($amount_keep[$level_useradd]+(-$BetUp), 2, '.', '');//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว + ของเกินที่ยกมา
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เล่นไป
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        // $count_datalimittotal_data[$level_useradd] = number_format($datalimittotal[$level_useradd] - $data[$level_useradd], 2, '.', '');
                                        $BetUpcount[$level_useradd] = ($datalimittotal[$level_useradd]-$data[$level_useradd]); 
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  1";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp = $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  2";
                                            $BetUp = 0;
                                            $amount_keep[$level_useradd] = $data[$level_useradd];                                           
                                        }
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  3";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  4";
                                        }

                                    }
                                }else{ //ไม่เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  5";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  6";                                         
                                        }
                                            
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  7";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];     
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  8";                                          
                                        }
                                            
                                    }
                                }
                                
                                ///////////////////    
                        }
                        
                            if($BetUpcount[1]>=0){
                                $massage[] = "insert success";
                                $error["td-2-row-".$row]=true; ;                                                                                              
                                $userbets[] = $this->Userbet_Create($id,$tickets,$lottos,'หวยรัฐ70',$datenow,$useradd,$useradddetail,$num,'tod2',$amount_keep,$keep,$comg,$payoutg,$request->tod[$key],$key);                                                                    
                            }else{
                                $massage[] = "insert fail";
                                $error["td-2-row-".$row]=false;                                                                                              
                            }
                    }
                }elseif($type==1){
                    /////////////////// top1
                    if ($request->top[$key]) {
                        $check_after_bet = Userbet::where('member_id',$id)->where('bet_num',$num)->where('type','top'.$type)->where('lotto_id',$lottos->id)->get();
                        $BetUp = 0;
                        $BetUp_array[] = 0;
                        // ยอดเกิน

                        for ($i=1; $i <=6 ; $i++) { 
                            $comg[$i]=0;
                                // ค่าคอมมิชชั่น
                            $payoutg[$i]=0;
                                // อัตราจ่าย
                            $limitBet[$i]=0;
                                // ลิมิตอั่น มาตราฐาน 
                            $limit_amount[$i]=0;
                                // รายการอั้นที่เล่นแล้ว
                            $total_limit[$i]=0;
                                // ลิมิตอั้นคงเหลือ ที่สามารถรับได้
                        }

                        foreach ($check_after_bet as $loop_limit => $limit) {
                            $limit_amount[1] += $limit->amount_1;
                            $limit_amount[2] += $limit->amount_2;
                            $limit_amount[3] += $limit->amount_3;
                            $limit_amount[4] += $limit->amount_4;
                            $limit_amount[5] += $limit->amount_5;
                            $limit_amount[6] += $limit->amount_6;
                            // ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                        }
                        for ($i=6; $i >= 1; $i--) { 
                            $amount_keep[$i] = number_format(($request->top[$key]*($keep['keepset'.$i]/100)), 2, '.', '');
                            //ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                        }

                        $payoutg[7] = $member->ratepaygov->payoutg_7;
                        $comg[7] = $member->ratepaygov->comg_7;
                        $useradd_detail_loopsort = $useradd_detail_loop;//rsort = เป็นฟังก์ชันสำหรับการเรียงข้อมูลจากมากไปน้อย
  
                        foreach( $member->getParents() as $user ) {
                                $level_useradd = $user->level;
                                $limitBet[$level_useradd] = $user->limit->top1;
                                // $limit_admin = $user->getLimit();
                                $total_limit[$level_useradd] = $limitBet[$level_useradd] - $limit_amount[$level_useradd];
                                $ratepaygov[$user->useradd] = $user->getLatepaygov();
                                $keep_begin = $user->getKeep();
                                $comg[$level_useradd] = $ratepaygov[$user->useradd]['comg_7'];
                                $payoutg[$level_useradd] = $ratepaygov[$user->useradd]['payoutg_7'];
                                
                                //////////////////// check bet pass
                                
                                $resultkeepover[$level_useradd] = $keep_begin->keepover;
                                
                                if($keep_begin->keepover==1){ // เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = number_format($amount_keep[$level_useradd]+(-$BetUp), 2, '.', '');//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว + ของเกินที่ยกมา
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เล่นไป
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        // $count_datalimittotal_data[$level_useradd] = number_format($datalimittotal[$level_useradd] - $data[$level_useradd], 2, '.', '');
                                        $BetUpcount[$level_useradd] = ($datalimittotal[$level_useradd]-$data[$level_useradd]); 
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  1";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp = $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  2";
                                            $BetUp = 0;
                                            $amount_keep[$level_useradd] = $data[$level_useradd];                                           
                                        }
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  3";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  4";
                                        }

                                    }
                                }else{ //ไม่เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  5";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  6";                                         
                                        }
                                            
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  7";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];     
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  8";                                          
                                        }
                                            
                                    }
                                }
                                
                                ///////////////////    
                        }
                            if($BetUpcount[1]>=0){
                                $massage[] = "insert success";
                                $error["td-0-row-".$row]=true;                                                                                              
                                $userbets[] = $this->Userbet_Create($id,$tickets,$lottos,'หวยรัฐ70',$datenow,$useradd,$useradddetail,$num,'top1',$amount_keep,$keep,$comg,$payoutg,$request->top[$key],$key);                                
                            }else{
                                $massage[] = "insert fail";
                                $error["td-0-row-".$row]=false;                                                                                              
                            }
                    }
                    /////////////////// bottom1
                    
                    if ($request->bottom[$key]) {
                        // $test = "Active";
                        $check_after_bet = Userbet::where('member_id',$id)->where('bet_num',$num)->where('type','bottom'.$type)->where('lotto_id',$lottos->id)->get();
                        $BetUp = 0;
                        $BetUp_array[] = 0;
                        // ยอดเกิน

                        for ($i=1; $i <=6 ; $i++) { 
                            $comg[$i]=0;
                                // ค่าคอมมิชชั่น
                            $payoutg[$i]=0;
                                // อัตราจ่าย
                            $limitBet[$i]=0;
                                // ลิมิตอั่น มาตราฐาน 
                            $limit_amount[$i]=0;
                                // รายการอั้นที่เล่นแล้ว
                            $total_limit[$i]=0;
                                // ลิมิตอั้นคงเหลือ ที่สามารถรับได้
                        }

                        foreach ($check_after_bet as $loop_limit => $limit) {
                            $limit_amount[1] += $limit->amount_1;
                            $limit_amount[2] += $limit->amount_2;
                            $limit_amount[3] += $limit->amount_3;
                            $limit_amount[4] += $limit->amount_4;
                            $limit_amount[5] += $limit->amount_5;
                            $limit_amount[6] += $limit->amount_6;
                            // ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                        }
                        for ($i=6; $i >= 1; $i--) { 
                            $amount_keep[$i] = number_format(($request->bottom[$key]*($keep['keepset'.$i]/100)), 2, '.', '');
                            //ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                        }

                        $payoutg[7] = $member->ratepaygov->payoutg_8;
                        $comg[7] = $member->ratepaygov->comg_8;
                        $useradd_detail_loopsort = $useradd_detail_loop;//rsort = เป็นฟังก์ชันสำหรับการเรียงข้อมูลจากมากไปน้อย
  
                        foreach( $member->getParents() as $user ) {
                                $level_useradd = $user->level;
                                $limitBet[$level_useradd] = $user->limit->bottom1;
                                // $limit_admin = $user->getLimit();
                                $total_limit[$level_useradd] = $limitBet[$level_useradd] - $limit_amount[$level_useradd];
                                $ratepaygov[$user->useradd] = $user->getLatepaygov();
                                $keep_begin = $user->getKeep();
                                $comg[$level_useradd] = $ratepaygov[$user->useradd]['comg_8'];
                                $payoutg[$level_useradd] = $ratepaygov[$user->useradd]['payoutg_8'];
                                
                                //////////////////// check bet pass
                                
                                $resultkeepover[$level_useradd] = $keep_begin->keepover;
                                
                                if($keep_begin->keepover==1){ // เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = number_format($amount_keep[$level_useradd]+(-$BetUp), 2, '.', '');//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว + ของเกินที่ยกมา
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เล่นไป
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        // $count_datalimittotal_data[$level_useradd] = number_format($datalimittotal[$level_useradd] - $data[$level_useradd], 2, '.', '');
                                        $BetUpcount[$level_useradd] = ($datalimittotal[$level_useradd]-$data[$level_useradd]); 
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  1";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp = $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  2";
                                            $BetUp = 0;
                                            $amount_keep[$level_useradd] = $data[$level_useradd];                                           
                                        }
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  3";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  4";
                                        }

                                    }
                                }else{ //ไม่เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  5";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  6";                                         
                                        }
                                            
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่
                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  7";
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp += $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];     
                                        }else{
                                            $result[$level_useradd] = " ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  8";                                          
                                        }
                                            
                                    }
                                }
                                
                                ///////////////////    
                        }
                            if($BetUpcount[1]>=0){
                                $massage[] = "insert success";
                                $error["td-1-row-".$row]=true;                                                                                               
                                $userbets[] = $this->Userbet_Create($id,$tickets,$lottos,'หวยรัฐ70',$datenow,$useradd,$useradddetail,$num,'bottom1',$amount_keep,$keep,$comg,$payoutg,$request->bottom[$key],$key);                                
                            }else{
                                $massage[] = "insert fail";
                                $error["td-1-row-".$row]=false;                                                                                               
                            }
                    }
                }






                //////////////////////////////////////////////////////////

            }else{
                //$check[$key]="false ".$key;
                //$v_num[$key]=$request->num[$key];
            // $check[$key]='null';
            // $v_num[$key]='null';
            // $d_type[$key]='null';
            }
            
        }


        

        return response()->json([
            'data_request'=>$data_request,
            'useradd_detail_loop'=>$useradd_detail_loop,
            'check'=>$check,
            'bet_num'=>$bet_num,
            'd_type'=>$d_type,
            // 'TypeBet'=>$TypeBet,
            //'num_array'=>$num_array.
            // 'master'=>$master,
            // 'ratepaygov'=>$ratepaygov,
            // 'keep'=>$keep,
            // // 'keep_begin'=>$keep_begin,
            // 'amount_keep'=>$amount_keep,
            // // 'keep_'=>$keep_,
            // 'comg'=>$comg,
            // 'payoutg'=>$payoutg,
            // 'check_after_bet'=>$check_after_bet,

            // 'limit_amount'=>$limit_amount,
            // 'limit'=>$limit,
                'total_limit'=>$total_limit,
                'data'=>$data,
                'datalimit'=>$datalimit,
                'datalimittotal'=>$datalimittotal,
                'result'=>$result,
            // 'resultkeepover'=>$resultkeepover,
            // 'BetUp_array'=>$BetUp_array,
                // 'BetUpcount'=>$BetUpcount,
            // 'BetUp'=>$BetUp,
            // 'useradd_detail_loopsort'=>$useradd_detail_loopsort,
            // 'count_datalimittotal_data'=>$count_datalimittotal_data,
                'massage'=>$massage,
            // 'test'=>$test,
                // 'limit_admin'->$limit_admin,
                // 'testArray'=>$testArray,
            // 'userbets'=>$userbets,
            'error'=>$error,
            
             
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

   // protected function IsTypeBet($id,$tickets,$lottos,$datenow,$num,$type,$top,$bottom,$tod,$member,$useradd_detail_loop,$useradd,$keep){
    //     //return $useradd_detail_loop;
    //     //if($type==3){
    //         if ($top) {
    //             for ($i=1; $i <=6 ; $i++) { 
    //                 $comg[$i]=0;
    //                 $payoutg[$i]=0;
    //             }
    //             if($type==3){
    //                 $ratepaygovcomgtype = 'comg_1';
    //                 $ratepaygovpayoutgtype = 'payoutg_1';
    //                 $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
    //                 $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];
                    
    //             }elseif($type==2){
    //                 $ratepaygovcomgtype = 'comg_4';
    //                 $ratepaygovpayoutgtype = 'payoutg_4';
    //                 $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
    //                 $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];

    //             }elseif($type==1){
    //                 $ratepaygovcomgtype = 'comg_7';
    //                 $ratepaygovpayoutgtype = 'payoutg_7';
    //                 $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
    //                 $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];
                    
    //             }
    //             foreach ($useradd_detail_loop as $key => $ID_useradd) {
    //                 if($ID_useradd){
    //                     $master[$ID_useradd] = Member::find($ID_useradd);
    //                     $level_useradd = $master[$ID_useradd]->level;
                        
    //                     $ratepaygov[$ID_useradd] = Ratepaygov::where('member_id', $master[$ID_useradd]->id)->first();
    //                     for ($i=6; $i >= 1; $i--) { 
    //                         $amount_keep[$i] = $top*($keep['keepset'.$i]/100);

    //                     }
    //                     $comg[$level_useradd] = $ratepaygov[$ID_useradd][$ratepaygovcomgtype];  
    //                     $payoutg[$level_useradd] = $ratepaygov[$ID_useradd][$ratepaygovpayoutgtype];
    //                 }
    //             }

    //             $userbets = $this->Userbet_Create($id,$tickets->id,$lottos->id,'หวยรัฐ70',$datenow,$useradd,$member->useradddetail,$num,"top".$type,$amount_keep,$keep,$comg,$payoutg,$top);
    //         }
    //         if($bottom) {
    //             for ($i=1; $i <=6 ; $i++) { 
    //                 $comg[$i]=0;
    //                 $payoutg[$i]=0;
    //             }
    //             if($type==3){
    //                 $ratepaygovcomgtype = 'comg_2';
    //                 $ratepaygovpayoutgtype = 'payoutg_2';
    //                 $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
    //                 $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];
                    
    //             }elseif($type==2){
    //                 $ratepaygovcomgtype = 'comg_5';
    //                 $ratepaygovpayoutgtype = 'payoutg_5';
    //                 $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
    //                 $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];

    //             }elseif($type==1){
    //                 $ratepaygovcomgtype = 'comg_8';
    //                 $ratepaygovpayoutgtype = 'payoutg_8';
    //                 $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
    //                 $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];
                    
    //             }
    //             foreach ($useradd_detail_loop as $key => $ID_useradd) {
    //                 if($ID_useradd){
    //                     $master[$ID_useradd] = Member::find($ID_useradd);
    //                     $level_useradd = $master[$ID_useradd]->level;
                        
    //                     $ratepaygov[$ID_useradd] = Ratepaygov::where('member_id', $master[$ID_useradd]->id)->first();
    //                     for ($i=6; $i >= 1; $i--) { 
    //                         $amount_keep[$i] = $bottom*($keep['keepset'.$i]/100);

    //                     }
    //                     $comg[$level_useradd] = $ratepaygov[$ID_useradd][$ratepaygovcomgtype];  
    //                     $payoutg[$level_useradd] = $ratepaygov[$ID_useradd][$ratepaygovpayoutgtype];
    //                 }
    //             }

    //             $userbets = $this->Userbet_Create($id,$tickets->id,$lottos->id,'หวยรัฐ70',$datenow,$useradd,$member->useradddetail,$num,"bottom".$type,$amount_keep,$keep,$comg,$payoutg,$bottom);
    //         }
    //         if($tod) {
    //             for ($i=1; $i <=6 ; $i++) { 
    //                 $comg[$i]=0;
    //                 $payoutg[$i]=0;
    //             }
    //             if($type==3){
    //                 $ratepaygovcomgtype = 'comg_3';
    //                 $ratepaygovpayoutgtype = 'payoutg_3';
    //                 $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
    //                 $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];
                    
    //             }elseif($type==2){
    //                 $ratepaygovcomgtype = 'comg_6';
    //                 $ratepaygovpayoutgtype = 'payoutg_6';
    //                 $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
    //                 $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];

    //             }
    //             foreach ($useradd_detail_loop as $key => $ID_useradd) {
    //                 if($ID_useradd){
    //                     $master[$ID_useradd] = Member::find($ID_useradd);
    //                     $level_useradd = $master[$ID_useradd]->level;
                        
    //                     $ratepaygov[$ID_useradd] = Ratepaygov::where('member_id', $master[$ID_useradd]->id)->first();
    //                     for ($i=6; $i >= 1; $i--) { 
    //                         $amount_keep[$i] = $tod*($keep['keepset'.$i]/100);

    //                     }
    //                     $comg[$level_useradd] = $ratepaygov[$ID_useradd][$ratepaygovcomgtype];  
    //                     $payoutg[$level_useradd] = $ratepaygov[$ID_useradd][$ratepaygovpayoutgtype];
    //                 }
    //             }

    //             $userbets = $this->Userbet_Create($id,$tickets->id,$lottos->id,'หวยรัฐ70',$datenow,$useradd,$member->useradddetail,$num,"tod".$type,$amount_keep,$keep,$comg,$payoutg,$tod);
    //         }
            
    //     //}elseif($type==2){

    //     //}elseif($type==1){

    //     //}
    //     if($userbets){
    //         return "success!";
    //     }else{
    //         return "ERROR [can't insert data too database]";
    //     }
        
    //     // return "success!";
   // }



    protected function checktype($num){
         $datacheck = strlen($num);
         return $datacheck;
    }


    // protected function Userbet_Create()
    protected function Userbet_Create($id,$tickets,$lottos,$latepay,$datenow,$useradd,$useradddetail,$num,$type,$amount_keep,$keep,$comg,$payoutg,$amount,$key)
    {
       
        $userbets = Userbet::create([
            'member_id' => $id,
            'ticket_id'=> $tickets->id,
            'lotto_id'=> $lottos->id,
            'latepay' => $latepay,
            'date_time' => $datenow,
            'pay' => $payoutg[2],
            'note' => '0',
            'useradd' => $useradd,
            'useradddetail' => $useradddetail,
            'bet_num' => $num,
            'type' => $type,
            'amount_1' => $amount_keep[1],
            'keep_1' => $keep->keepset1,
            'com_1' =>  $comg[1],
            'pay_1' =>  $payoutg[1],
            'amount_2' => $amount_keep[2],
            'keep_2' => $keep->keepset2,
            'com_2' => $comg[2],
            'pay_2' =>  $payoutg[2],
            'amount_3' => $amount_keep[3],
            'keep_3' => $keep->keepset3,
            'com_3' => $comg[3],
            'pay_3' =>  $payoutg[3],
            'amount_4' => $amount_keep[4],
            'keep_4' => $keep->keepset4,
            'com_4' => $comg[4],
            'pay_4' =>  $payoutg[4],
            'amount_5' => $amount_keep[5],
            'keep_5' => $keep->keepset5,
            'com_5' => $comg[5],
            'pay_5' =>  $payoutg[5],
            'amount_6' => $amount_keep[6],
            'keep_6' => $keep->keepset6,
            'com_6' => $comg[6],
            'pay_6' =>  $payoutg[6],
            'amount_7' => $amount,
            'keep_7' => '0',
            'com_7' => $comg[7],
            'pay_7' =>  $payoutg[7],
        
        ]); 
        
            Bet_result::create([
            'member_id' => $id,
            'userbet_id' => $userbets->id,
            'ticket_id'=> $tickets->id,
            'lotto_id'=> $lottos->id,
            'latepay' => $latepay,
            'date_time' => $datenow,
            'pay' => $payoutg[2],
            'note' => '0',
            'useradd' => $useradd,
            'useradddetail' => $useradddetail,
            'bet_num' => $num,
            'type' => $type,
            'amount_1' => $amount_keep[1],
            'keep_1' => $keep->keepset1,
            'com_1' =>  $comg[1],
            'pay_1' =>  $payoutg[1],
            'amount_2' => $amount_keep[2],
            'keep_2' => $keep->keepset2,
            'com_2' => $comg[2],
            'pay_2' =>  $payoutg[2],
            'amount_3' => $amount_keep[3],
            'keep_3' => $keep->keepset3,
            'com_3' => $comg[3],
            'pay_3' =>  $payoutg[3],
            'amount_4' => $amount_keep[4],
            'keep_4' => $keep->keepset4,
            'com_4' => $comg[4],
            'pay_4' =>  $payoutg[4],
            'amount_5' => $amount_keep[5],
            'keep_5' => $keep->keepset5,
            'com_5' => $comg[5],
            'pay_5' =>  $payoutg[5],
            'amount_6' => $amount_keep[6],
            'keep_6' => $keep->keepset6,
            'com_6' => $comg[6],
            'pay_6' =>  $payoutg[6],
            'amount_7' => $amount,
            'keep_7' => '0',
            'com_7' => $comg[7],
            'pay_7' =>  $payoutg[7],
 
            ]);
        


        if($userbets){
            $return[$type."[".$key."]"] = true;
            return $return;
        }else {
            $return['top3'.$key] = false;
            return $return;
        }
        // return true;

        
    }
    
    protected function CountAmount_keep($amount_keep,$limit_amount,$total_limit,$datalimittotal,$level_useradd){
        $data[$level_useradd] = $amount_keep[$level_useradd];
        $datalimit[$level_useradd] = $limit_amount[$level_useradd];
        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];
        $count_datalimittotal_data[$level_useradd] = $datalimittotal[$level_useradd] - $data[$level_useradd];
        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
        return $BetUpcount[$level_useradd];

    }

    protected function CheckBetCount($BetUpcount)
    {
        $testArray[1] = 10;
        return $testArray[1]=10;
    }
    
}

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
                //print_r($useradd_detail_loop);


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
        //$check = 0;
        foreach ($request->num as $key => $num) {
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

                    ///////////////////
                    if ($request->top[$key]) {

                        $check_after_bet = Userbet::where('member_id',$id)->where('bet_num',$num)->where('type','top'.$type)->where('lotto_id',$lottos->id)->get();

                        $BetUp = 0;
                        $BetUp_array[] = 0;
                        // ยอดเกิน

                        for ($i=1; $i <=6 ; $i++) { 
                            $comg_1[$i]=0;
                                // ค่าคอมมิชชั่น
                            $payoutg_1[$i]=0;
                                // อัตราจ่าย
                            $limittop3[$i]=0;
                                // ลิมิตอั่น มาตราฐาน 
                            $limit_amount[$i]=0;
                                // รายการอั้นที่เล่นแล้ว
                            $total_limit[$i]=0;
                                // ลิมิตอั้นคงเหลือ ที่สามารถรับได้
                        }
                        //$useradd_detail_loop_rsort = rsort($useradd_detail_loop);


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
                            // $amount_keep[$i] = $request->top[$key]*($keep['keepset'.$i]/100);
                            $amount_keep[$i] = number_format(($request->top[$key]*($keep['keepset'.$i]/100)), 2, '.', '');
                            //ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว

                            //$amount_keep[$i] = $top*($keep['keepset'.$i]/100);
                            //$keep_[$i] = $keep['keepset'.$i];
                        }
                        //$limit_amint = 
                        // return response()->json([
                        //     'result'=>'complate',
                        // ]);

                        $pay_7 = $member->ratepaygov->payoutg_1;
                        $com_7 = $member->ratepaygov->comg_1;
                        $useradd_detail_loopsort = rsort($useradd_detail_loop);//rsort = เป็นฟังก์ชันสำหรับการเรียงข้อมูลจากมากไปน้อย
                        foreach ($useradd_detail_loop as $loopuser_add => $ID_useradd) {
                            if($ID_useradd){
                                $master[$ID_useradd] = Member::find($ID_useradd);
                                $level_useradd = $master[$ID_useradd]->level;
                                
                                $limit_admin = Limite::where('member_id',$ID_useradd)->latest()->first();
                                $limittop3[$level_useradd] = $limit_admin->top3;
                                $total_limit[$level_useradd] = $limittop3[$level_useradd] - $limit_amount[$level_useradd] ;


                                
                                $ratepaygov[$ID_useradd] = Ratepaygov::where('member_id', $master[$ID_useradd]->id)->first();
                                $keep_begin = Keep::where('member_id', $ID_useradd)->first();

                                    $comg_1[$level_useradd] = $ratepaygov[$ID_useradd]['comg_1'];  
                                    $payoutg_1[$level_useradd] = $ratepaygov[$ID_useradd]['payoutg_1'];


                                //////////////////// check bet pass

                                //$value_comg_1[$+] = $total_limit[$level_useradd]-$amount_keep[$i];
                                $resultkeepover[$level_useradd] = $keep_begin->keepover;
                                if($keep_begin->keepover==1){ // เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = number_format($amount_keep[$level_useradd]+(-$BetUp), 2, '.', '');//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว + ของเกินที่ยกมา
                                        // $data_BetUp[$level_useradd] = $amount_keep[$level_useradd]+$BetUp;
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เล่นไป

                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ
                                        // $BetUp = $total_limit[$level_useradd] - $amount_keep[$level_useradd];

                                        

                                        $count_datalimittotal_data[$level_useradd] = number_format($datalimittotal[$level_useradd] - $data[$level_useradd], 2, '.', '');

                                        // $BetUpcount[$level_useradd] = ($limittop3[$level_useradd]-$amount_keep[$level_useradd]); 
                                        $BetUpcount[$level_useradd] = ($datalimittotal[$level_useradd]-$data[$level_useradd]); 
                                        
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = $loopuser_add." เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  1";
                                            
                                        
                                            $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                            $BetUp = $BetUpcount[$level_useradd];
                                            $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                

                                            
                                        }else{
                                            $result[$level_useradd] = $loopuser_add." เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$data[$level_useradd]." = รับได้+ยอดยกมา ".$data[$level_useradd]." = ".$amount_keep[$level_useradd]." + ".$BetUp." BetUp < 0  2";
                                            $BetUp = 0;
                                            $amount_keep[$level_useradd] = $data[$level_useradd];                                           
                                        }
                                        
                                        

                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];
                                        // $data[$level_useradd] = 'ไม่มียอดยกมา';
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];

                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];
                                        // $BetUp = $total_limit[$level_useradd] - $amount_keep[$level_useradd];

                                        $count_datalimittotal_data[$level_useradd] = $datalimittotal[$level_useradd] - $data[$level_useradd];


                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = $loopuser_add." เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  3";
                                            
                                            if($BetUpcount[$level_useradd]<=0){
                                                $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                                $BetUp += $BetUpcount[$level_useradd];
                                                $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                            }
                                            // $BetUp = $total_limit[$level_useradd];
                                        }else{
                                            $result[$level_useradd] = $loopuser_add." เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  4";
                                            // $BetUp = $total_limit[$level_useradd]; 

                                        }

                                    }
                                }else{ //ไม่เก็บของเกิน
                                    if($BetUp<0){ // มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];//ยอดเข้าตามลำดับที่คำนวนจากหุ้นแล้ว
                                        // $data[$level_useradd] = 'มียอดยกมา';
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];// ลิมิตตามเลเวล ของ Admin ที่เหลืออยู่

                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];// ลิมิตอั้นคงเหลือ

                                        $count_datalimittotal_data[$level_useradd] = $datalimittotal[$level_useradd] - $data[$level_useradd];
                                        

                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = $loopuser_add." ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  5";
                                            

                                            if($BetUpcount[$level_useradd]<=0){
                                                $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                                $BetUp += $BetUpcount[$level_useradd];
                                                $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];                                                
                                            }
                                            // $BetUp = $total_limit[$level_useradd];
                                        }else{
                                            $result[$level_useradd] = $loopuser_add." ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$datalimittotal[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  6";
                                            // $BetUp = $total_limit[$level_useradd];                                            
                                        }
                                            
                                    }else{ // ไม่มียอดยกมา
                                        $data[$level_useradd] = $amount_keep[$level_useradd];
                                        // $data[$level_useradd] = 'ไม่มียอดยกมา';
                                        $datalimit[$level_useradd] = $limit_amount[$level_useradd];

                                        $datalimittotal[$level_useradd] = $total_limit[$level_useradd];

                                        $count_datalimittotal_data[$level_useradd] =$datalimittotal[$level_useradd] - $data[$level_useradd];

                                        
                                        $BetUpcount[$level_useradd] = ($total_limit[$level_useradd]-$amount_keep[$level_useradd]);
                                        if($BetUpcount[$level_useradd]<=0){
                                            $result[$level_useradd] = $loopuser_add." ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  7";
                                            
                                            
                                            if($BetUpcount[$level_useradd]<=0){
                                                $amount_keep[$level_useradd] = number_format($total_limit[$level_useradd], 2, '.', '');
                                                $BetUp += $BetUpcount[$level_useradd];
                                                $BetUp_array[$level_useradd] = $BetUpcount[$level_useradd];    
                                                $test = $BetUp;    
                                                // $amount_keep[$level_useradd] =                                           
                                            }else{
                                                // $amount_keep[$level_useradd] = 
                                            }

                                            // $BetUp = $total_limit[$level_useradd];
                                        }else{
                                            $result[$level_useradd] = $loopuser_add." ไม่เก็บของเกิน รับเข้า ".$amount_keep[$level_useradd]." มียอดยกมา ".$BetUp." รับสูงสุด ".$datalimittotal[$level_useradd]." ลิมิตอั้นคงเหลือ ".$BetUpcount[$level_useradd]." = ".$total_limit[$level_useradd]." - ".$amount_keep[$level_useradd]." BetUp > 0  8";
                                            // $BetUp = $total_limit[$level_useradd];                                            
                                        }
                                            
                                    }
                                }
                                


                                ///////////////////    

                            }
                        }
                           if($BetUpcount[1]>=0){
                            // if(-1>=0){
                                $massage = "insert success";
                                    $userbets = Userbet::create([
                                        'member_id' => $id,
                                        'ticket_id'=>$tickets->id,
                                        'lotto_id'=>$lottos->id,
                                        'latepay' => 'หวยรัฐ70',
                                        'date_time' => $datenow,
                                        'pay' => $pay_7,
                                        'note' => '0',
                                        'useradd' => $useradd,
                                        'useradddetail' => $useradddetail,
                                        'bet_num' => $num,
                                        'type' => 'top3',
                                        'amount_1' => $amount_keep[1],
                                        'keep_1' => $keep->keepset1,
                                        'com_1' =>  $comg_1[1],
                                        'pay_1' =>  $payoutg_1[1],
                                        'amount_2' => $amount_keep[2],
                                        'keep_2' => $keep->keepset2,
                                        'com_2' => $comg_1[2],
                                        'pay_2' =>  $payoutg_1[2],
                                        'amount_3' => $amount_keep[3],
                                        'keep_3' => $keep->keepset3,
                                        'com_3' => $comg_1[3],
                                        'pay_3' =>  $payoutg_1[3],
                                        'amount_4' => $amount_keep[4],
                                        'keep_4' => $keep->keepset4,
                                        'com_4' => $comg_1[4],
                                        'pay_4' =>  $payoutg_1[4],
                                        'amount_5' => $amount_keep[5],
                                        'keep_5' => $keep->keepset5,
                                        'com_5' => $comg_1[5],
                                        'pay_5' =>  $payoutg_1[5],
                                        'amount_6' => $amount_keep[6],
                                        'keep_6' => $keep->keepset6,
                                        'com_6' => $comg_1[6],
                                        'pay_6' =>  $payoutg_1[6],
                                        'amount_7' => $request->top[$key],
                                        'keep_7' => "0",
                                        'com_7' => $com_7,
                                        'pay_7' =>  $pay_7,
                                    
                                    ]); 
                                
                            }else{
                                $massage = "insert fail";
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
            'keep'=>$keep,
            // 'keep_begin'=>$keep_begin,
            'amount_keep'=>$amount_keep,
            // 'keep_'=>$keep_,
            // 'comg_1'=>$comg_1,
            // 'payoutg_1'=>$payoutg_1,
            // 'check_after_bet'=>$check_after_bet,
            'limit_amount'=>$limit_amount,
            'limittop3'=>$limittop3,
            'total_limit'=>$total_limit,
            'data'=>$data,
            'datalimit'=>$datalimit,
            'datalimittotal'=>$datalimittotal,
            'result'=>$result,
            'resultkeepover'=>$resultkeepover,
            'BetUp_array'=>$BetUp_array,
            'BetUpcount'=>$BetUpcount,
            'BetUp'=>$BetUp,
            'useradd_detail_loopsort'=>$useradd_detail_loopsort,
            'count_datalimittotal_data'=>$count_datalimittotal_data,
            'massage'=>$massage,
            'test'=>$test,
            
             
        ]);



        /*$nums = $request->num;
        */
        /*
        

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
        */
        /*foreach ($request->num as $key => $num) {
            if ($num) {
                $value = true;
            }
                $value = false;
        }*/


        /*
        foreach ($nums as $key => $num) {
           $numm = $num;
           $keep = Keep::where('member_id', $useradd)->first();
           $master2 = Member::find($useradd);
           $type = $this->checktype($num);

           $listbettop3 = 0;
           $listbetbottom3 = 0;
           $listbettod3 = 0;
           $listbettop2 = 0;
           $listbetbottom2 = 0;
           $listbettod2 = 0;
           $listbettop1 = 0;
           $listbetbottom1 = 0;

                if($request->top[$key]){
                    if($type ==3){
                        $listbettop3 = Userbet::where('lotto_id', $lottos->id)->where('member_id', $id)->where('bet_num',$num)->where('type' , 'top3')->get();
                    }if ($type == 2) {
                        $listbettop2 = Userbet::where('lotto_id', $lottos->id)->where('member_id', $id)->where('bet_num',$num)->where('type' , 'top2')->get();
                    }if ($type == 1) {
                        $listbettop1 = Userbet::where('lotto_id', $lottos->id)->where('member_id', $id)->where('bet_num',$num)->where('type' , 'top1')->get();
                    }
                }if($request->bottom[$key]){
                    if($type ==3){
                        $listbetbottom3 = Userbet::where('lotto_id', $lottos->id)->where('member_id', $id)->where('bet_num',$num)->where('type' , 'bottom3')->get();
                    }if ($type == 2) {
                        $listbetbottom2 = Userbet::where('lotto_id', $lottos->id)->where('member_id', $id)->where('bet_num',$num)->where('type' , 'bottom2')->get();
                    }if ($type == 1) {
                        $listbetbottom1 = Userbet::where('lotto_id', $lottos->id)->where('member_id', $id)->where('bet_num',$num)->where('type' , 'bottom1')->get();
                    }
                }if($request->tod[$key]){
                    if($type ==3){
                        $listbettod3 = Userbet::where('lotto_id', $lottos->id)->where('member_id', $id)->where('bet_num',$num)->where('type' , 'tod3')->get();
                    }if ($type == 2) {
                        $listbettod2 = Userbet::where('lotto_id', $lottos->id)->where('member_id', $id)->where('bet_num',$num)->where('type' , 'tod2')->get();
                    }
                }

            
            //    return response()->json([
            //     'listbettop3'=>$listbettop3,
            //     'listbetbottom3'=>$listbetbottom3,
            //     'listbettod3'=>$listbettod3,
            //     'listbettop2'=>$listbettop2,
            //     'listbetbottom2'=>$listbetbottom2,
            //     'listbettod2'=>$listbettod2,
            //     'listbettop1'=>$listbettop1,
            //     'listbetbottom1'=>$listbetbottom1,
            
                
            //     ]);
      
           if($master2){
               if($master2->level ==6){
                   $keepover_6 = 6;
                   $limitecheck6 = Limite::where('member_id', $master2->id)->where('lotto_id', $lottos->id)->latest()->first();
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
                    $limitecheck5 = Limite::where('member_id', $master2->id)->where('lotto_id', $lottos->id)->latest()->first();
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
                    $limitecheck4 = Limite::where('member_id', $master2->id)->where('lotto_id', $lottos->id)->latest()->first();
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
                    $limitecheck3 = Limite::where('member_id', $master2->id)->where('lotto_id', $lottos->id)->latest()->first();
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
                    $limitecheck2 = Limite::where('member_id', $master2->id)->where('lotto_id', $lottos->id)->latest()->first();
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
                    $limitecheck1 = Limite::where('member_id', $master2->id)->where('lotto_id', $lottos->id)->latest()->first();
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

          $checktop3 =0;
          $checkbottom3 =0;
          $checktod3 =0;
          $checktop2 =0;
          $checkbottom2 =0;
          $checktod2 =0;
          $checktop1 =0;
          $checkbottom1 =0;

            foreach ($nums as $key => $num) {
                if($num){
                    $type = $this->checktype($num);

                    if($request->top[$key]){
                        if($type == 3){
                            if($request->top[$key]>$limitecheckAlltop3){
                                $checktop3 = 0;
                            }else{
                                $checktop3 = 1;
                            }
                        }elseif($type == 2){
                            if($request->top[$key]>$limitecheckAlltop2){
                                $checktop2 = 0;
                            }else{
                                $checktop2 = 1;
                            }
                        }elseif($type == 1){
                            if($request->top[$key]>$limitecheckAlltop1){
                                $checktop1 = 0;
                            }else{
                                $checktop1 = 1;
                            }
                        }
                    }
                    if($request->bottom[$key]){
                        if($type == 3){
                            if($request->bottom[$key]>$limitecheckAllbottom3){
                                $checkbottom3 = 0;
                            }else{
                                $checkbottom3 = 1;
                            }
                        }elseif($type == 2){
                            if($request->bottom[$key]>$limitecheckAllbottom2){
                                $checkbottom2 = 0;
                            }else{
                                $checkbottom2 = 1;
                            }
                        }elseif($type == 1){
                            if($request->bottom[$key]>$limitecheckAllbottom1){
                                $checkbottom1 = 0;
                            }else{
                                $checkbottom1 = 1;
                            }
                        }
                    }
                    if($request->tod[$key]){
                        if($type == 3){
                            if($request->tod[$key]>$limitecheckAlltod3){
                                $checktod3 = 0;
                            }else{
                                $checktod3 = 1;
                            }
                        }elseif($type == 2){
                             if($request->tod[$key]>$limitecheckAlltod2){
                                $checktod2 = 0;
                            }else{
                                $checktod2 = 1;
                            }
                        }
                    }

                }
            }

            $checkalltop = $checktop3+$checkbottom3+$checktod3+$checktop2+$checkbottom2+$checktod2+$checktop1+$checkbottom1;

            if($checkalltop){
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
                                                        $limite = Limite::where('member_id', $master->id)->where('lotto_id', $lottos->id)->latest()->first();
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
                                                        $limite = Limite::where('member_id', $master->id)->where('lotto_id', $lottos->id)->latest()->first();
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
                                                                $limit_amounttotal = Userbet::where('bet_num',$num)->sum('amount_1');
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
                                    if($userbets){
                                        $top[$key] = true;
                                    }else{
                                        $top[$key] = false;                    
                                    }
                                    
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
                                                    $amount_2 = $request->tod[$key]*($keep->keepset2/100);                                   
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
                 $checkpass = "บันทึกสำเร็จค่ะ";
                 $value_return = true;
            }else{
                 $checkpass = "บันทึกไม่สำเร็จค่ะ";
                 $value_return = false;
                 
            }
            // return response()->json([
           
          
        //return response()->json(['userbet_id'=>$id, 'data_request'=>$data_request, 'add'=>$add, 'userbets'=>$userbets]);
        return response()->json([
            'data_request'=>$data_request,
            'checkpass'=>$checkpass,
            'value_return'=>$value_return,
            'top'=>$top
            
            ]);
        */
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

    protected function IsTypeBet($id,$tickets,$lottos,$datenow,$num,$type,$top,$bottom,$tod,$member,$useradd_detail_loop,$useradd,$keep){
        //return $useradd_detail_loop;
        //if($type==3){
            if ($top) {
                for ($i=1; $i <=6 ; $i++) { 
                    $comg[$i]=0;
                    $payoutg[$i]=0;
                }
                if($type==3){
                    $ratepaygovcomgtype = 'comg_1';
                    $ratepaygovpayoutgtype = 'payoutg_1';
                    $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
                    $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];
                    
                }elseif($type==2){
                    $ratepaygovcomgtype = 'comg_4';
                    $ratepaygovpayoutgtype = 'payoutg_4';
                    $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
                    $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];

                }elseif($type==1){
                    $ratepaygovcomgtype = 'comg_7';
                    $ratepaygovpayoutgtype = 'payoutg_7';
                    $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
                    $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];
                    
                }
                foreach ($useradd_detail_loop as $key => $ID_useradd) {
                    if($ID_useradd){
                        $master[$ID_useradd] = Member::find($ID_useradd);
                        $level_useradd = $master[$ID_useradd]->level;
                        
                        $ratepaygov[$ID_useradd] = Ratepaygov::where('member_id', $master[$ID_useradd]->id)->first();
                        for ($i=6; $i >= 1; $i--) { 
                            $amount_keep[$i] = $top*($keep['keepset'.$i]/100);

                        }
                        $comg[$level_useradd] = $ratepaygov[$ID_useradd][$ratepaygovcomgtype];  
                        $payoutg[$level_useradd] = $ratepaygov[$ID_useradd][$ratepaygovpayoutgtype];
                    }
                }

                $userbets = $this->Userbet_Create($id,$tickets->id,$lottos->id,'หวยรัฐ70',$datenow,$useradd,$member->useradddetail,$num,"top".$type,$amount_keep,$keep,$comg,$payoutg,$top);
            }
            if($bottom) {
                for ($i=1; $i <=6 ; $i++) { 
                    $comg[$i]=0;
                    $payoutg[$i]=0;
                }
                if($type==3){
                    $ratepaygovcomgtype = 'comg_2';
                    $ratepaygovpayoutgtype = 'payoutg_2';
                    $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
                    $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];
                    
                }elseif($type==2){
                    $ratepaygovcomgtype = 'comg_5';
                    $ratepaygovpayoutgtype = 'payoutg_5';
                    $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
                    $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];

                }elseif($type==1){
                    $ratepaygovcomgtype = 'comg_8';
                    $ratepaygovpayoutgtype = 'payoutg_8';
                    $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
                    $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];
                    
                }
                foreach ($useradd_detail_loop as $key => $ID_useradd) {
                    if($ID_useradd){
                        $master[$ID_useradd] = Member::find($ID_useradd);
                        $level_useradd = $master[$ID_useradd]->level;
                        
                        $ratepaygov[$ID_useradd] = Ratepaygov::where('member_id', $master[$ID_useradd]->id)->first();
                        for ($i=6; $i >= 1; $i--) { 
                            $amount_keep[$i] = $bottom*($keep['keepset'.$i]/100);

                        }
                        $comg[$level_useradd] = $ratepaygov[$ID_useradd][$ratepaygovcomgtype];  
                        $payoutg[$level_useradd] = $ratepaygov[$ID_useradd][$ratepaygovpayoutgtype];
                    }
                }

                $userbets = $this->Userbet_Create($id,$tickets->id,$lottos->id,'หวยรัฐ70',$datenow,$useradd,$member->useradddetail,$num,"bottom".$type,$amount_keep,$keep,$comg,$payoutg,$bottom);
            }
            if($tod) {
                for ($i=1; $i <=6 ; $i++) { 
                    $comg[$i]=0;
                    $payoutg[$i]=0;
                }
                if($type==3){
                    $ratepaygovcomgtype = 'comg_3';
                    $ratepaygovpayoutgtype = 'payoutg_3';
                    $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
                    $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];
                    
                }elseif($type==2){
                    $ratepaygovcomgtype = 'comg_6';
                    $ratepaygovpayoutgtype = 'payoutg_6';
                    $payoutg[7] = $member->ratepaygov[$ratepaygovpayoutgtype];
                    $comg[7] = $member->ratepaygov[$ratepaygovcomgtype];

                }
                foreach ($useradd_detail_loop as $key => $ID_useradd) {
                    if($ID_useradd){
                        $master[$ID_useradd] = Member::find($ID_useradd);
                        $level_useradd = $master[$ID_useradd]->level;
                        
                        $ratepaygov[$ID_useradd] = Ratepaygov::where('member_id', $master[$ID_useradd]->id)->first();
                        for ($i=6; $i >= 1; $i--) { 
                            $amount_keep[$i] = $tod*($keep['keepset'.$i]/100);

                        }
                        $comg[$level_useradd] = $ratepaygov[$ID_useradd][$ratepaygovcomgtype];  
                        $payoutg[$level_useradd] = $ratepaygov[$ID_useradd][$ratepaygovpayoutgtype];
                    }
                }

                $userbets = $this->Userbet_Create($id,$tickets->id,$lottos->id,'หวยรัฐ70',$datenow,$useradd,$member->useradddetail,$num,"tod".$type,$amount_keep,$keep,$comg,$payoutg,$tod);
            }
            
        //}elseif($type==2){

        //}elseif($type==1){

        //}
        if($userbets){
            return "success!";
        }else{
            return "ERROR [can't insert data too database]";
        }
        
        // return "success!";
    }



    protected function checktype($num){
         $datacheck = strlen($num);
         return $datacheck;
    }


    protected function Userbet_Create($id,$ticketsid,$lottosid,$latepay,$datenow,$useradd,$useradddetail,$num,$type,$amount_keep,$keep,$comg,$payoutg,$amount){
        $userbets = Userbet::create([
            'member_id' => $id,
            'ticket_id'=>$ticketsid,
            'lotto_id'=>$lottosid,
            'latepay' => $latepay,
            'date_time' => $datenow,
            'pay' => $payoutg[7],
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
            return true;
        }else {
            return false;
        }

        
    }
    
    
}

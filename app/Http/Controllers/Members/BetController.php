<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Userbet;
use App\Member;
use App\Ratepaygov;


class BetController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        
        $useradd = auth()->user()->useradd;
        $members = Member::where('id','!=' ,$id)->where('helper',0)->get();
        // $members = Member::get();
        $sum = 0;
        //$ratepaygovs = Ratepaygov::get();
        $userbets = Userbet::with('member')->select(DB::Raw('SUM(amount) as sum_amount, member_id'))
                            ->orderBy('bet_num', 'desc')
                            ->groupBy('member_id')
                            ->get();
        //dd($userbets);
        // echo "<ul>userbets";
        foreach ($userbets as $key => $userbet) {
            // echo "<li>".$userbet->member_id. "</li>";
            $ratepaygovs[$userbet->member_id] = Ratepaygov::where("ratepaygov_id",$userbet->member_id)->first();
            $userbets_counts[] = Userbet::where("member_id",$userbet->member_id)->get();
            $amountmember = $userbet->sum_amount;
            $sum += $userbet->sum_amount;
        }
        // echo "<BR></ul>";
        // echo "<li>ratepaygovs</li>";
        //foreach ($ratepaygovs as $key => $ratepaygov) {
            // echo "<li>".$ratepaygov."</li>";
        //}
        // echo "<BR>";
        // echo "userbets_counts<BR>";
        $sum_com = 0;
        foreach ($userbets_counts as $loop => $userbets_count) {
            // echo "== loop".$loop."==";
            // echo " ".$userbets_count."";
            $com[$loop] = 0;
            // echo "<ul>";
            foreach ($userbets_count as $key => $userbets_C) {
                // echo "==".$key."==";
                //$com[$userbets_C->member_id] = 0;
                // echo "<li>".$userbets_C->amount." ";
                if($userbets_C->type=="top3"){
                    //echo $ratepaygovs[$userbets_C->member_id]->comg_1." %<BR>";
                    //echo (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_1)/100);
                    $com[$loop] += (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_1)/100);
                }elseif ($userbets_C->type=="bottom3") {
                    //echo $ratepaygovs[$userbets_C->member_id]->comg_2." %<BR>";
                    //echo (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_2)/100);
                    $com[$loop] += (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_2)/100);
                }elseif ($userbets_C->type=="tod3") {
                    //echo $ratepaygovs[$userbets_C->member_id]->comg_3." %<BR>";
                    //echo (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_3)/100);
                    $com[$loop] += (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_3)/100);
                }elseif ($userbets_C->type=="top2") {
                    //echo $ratepaygovs[$userbets_C->member_id]->comg_4." %<BR>";
                    //echo (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_4)/100);
                    $com[$loop] += (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_4)/100);
                }elseif ($userbets_C->type=="bottom2") {
                    //echo $ratepaygovs[$userbets_C->member_id]->comg_5." %<BR>";
                    //echo (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_5)/100);
                    $com[$loop] += (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_5)/100);
                }elseif ($userbets_C->type=="tod2") {
                    //echo $ratepaygovs[$userbets_C->member_id]->comg_6." %<BR>";
                    //echo (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_6)/100);
                    $com[$loop] += (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_6)/100);
                }
                // echo "</li>";
            }

            $sum_com += $com[$loop];
            // echo "</ul>";
        }
        // echo $sum_com;
        /////////////////////sum Member////////////////////////////
                    $alltotalmember = 0;
                    foreach($userbets_counts as $loop => $userbets_count){
                        $summember[$loop] = 0;
                        foreach ($userbets_count as $key => $userbets_C) {
                            
                            $summember[$loop] += ($userbets_C->amount);
                        }
                    }
                        // echo "<li>". $com[$loop]." ";
                        // echo "<li>". $summember[$loop]." ";
                       
                    foreach($userbets_counts as $loop => $userbets_count){
                        
                        $totalmember[$loop] = 0;
                        foreach ($userbets_count as $key => $userbets_C) {
                            $totalmember[$loop] = $summember[$loop] - $com[$loop];
                           
                        }
                           
                        $alltotalmember += $totalmember[$loop];
                    }
                   

            ////////////////////////////////////////////////////////
                   
         
        return view('listlottery.listlotuser.index', compact('userbets','sum','com','totalmember','sumcom','alltotalmember','sum_com'));
    }

   
}

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
    public function listlotpoint()
    {

        $userbets = Userbet::with('member')->select(DB::Raw('SUM(amount) as sum_amount, member_id'))
                                ->orderBy('bet_num', 'desc')
                                ->groupBy('member_id')
                                ->get();

        $sumtop3 = Userbet::where('type','top3')->sum('amount');
        $sumtop2 = Userbet::where('type','top2')->sum('amount');
        $sumbottom3 = Userbet::where('type','bottom3')->sum('amount');
        $sumbottom2 = Userbet::where('type','bottom2')->sum('amount');
        $sumtod3 = Userbet::where('type','tod3')->sum('amount');
        $sumtod2 = Userbet::where('type','tod2')->sum('amount');
        $sumtop1 = Userbet::where('type','top1')->sum('amount');
        $sumbottom1 = Userbet::where('type','bottom1')->sum('amount');
        $allsumbuy = $sumtop3+$sumtop2+$sumbottom3+$sumbottom2+$sumtod3+$sumtod2+$sumtop1+$sumbottom1;
        $userbets_counts[0] = "";
        foreach($userbets as $key => $userbet)
        {
            $ratepaygovs[$userbet->member_id] = Ratepaygov::where("ratepaygov_id",$userbet->member_id)->first();
            $userbets_counts[$key] = Userbet::where('member_id', $userbet->member_id)->get();
            // echo "<li>".$ratepaygovs[$userbet->member_id]."</li>";
        }
        $top3coms = 0;
        $bottom3coms = 0;
        $tod3coms = 0;
        $top2coms = 0;
        $bottom2coms = 0;
        $tod2coms = 0;
        $top1coms = 0;
        $bottom1coms = 0;
        //  if($userbets_counts){
        //      dd($userbets_counts);
        //  }else{
        //      dd("null");
        //  }
        
        if($userbets_counts){
            foreach($userbets_counts as $loop => $userbets_count){

                $top3com[$loop] = 0;
                $bottom3com[$loop] = 0;
                $tod3com[$loop] = 0;
                $top2com[$loop] = 0;
                $bottom2com[$loop] = 0;
                $tod2com[$loop] = 0;
                $top1com[$loop] = 0;
                $bottom1com[$loop] = 0;
                if($userbets_count){
                    foreach($userbets_count as $key => $userbet_C){

                        if($userbet_C->type == "top3"){
                            $top3com[$loop]  += (($userbet_C->amount*$ratepaygovs[$userbet_C->member_id]->comg_1)/100);
                        
                        }
                        if($userbet_C->type == "bottom3"){
                            $bottom3com[$loop]  += (($userbet_C->amount*$ratepaygovs[$userbet_C->member_id]->comg_2)/100);
                        
                        }
                        if($userbet_C->type == "tod3"){
                            $tod3com[$loop]  += (($userbet_C->amount*$ratepaygovs[$userbet_C->member_id]->comg_3)/100);
                        
                        }
                        if($userbet_C->type == "top2"){
                            $top2com[$loop]  += (($userbet_C->amount*$ratepaygovs[$userbet_C->member_id]->comg_4)/100);
                        
                        }
                        if($userbet_C->type == "bottom2"){
                            $bottom2com[$loop]  += (($userbet_C->amount*$ratepaygovs[$userbet_C->member_id]->comg_5)/100);
                        
                        }
                        if($userbet_C->type == "tod2"){
                            $tod2com[$loop]  += (($userbet_C->amount*$ratepaygovs[$userbet_C->member_id]->comg_6)/100);
                        
                        }
                        if($userbet_C->type == "top1"){
                            $top1com[$loop]  += (($userbet_C->amount*$ratepaygovs[$userbet_C->member_id]->comg_7)/100);
                        
                        }
                        if($userbet_C->type == "bottom1"){
                            $bottom1com[$loop]  += (($userbet_C->amount*$ratepaygovs[$userbet_C->member_id]->comg_8)/100);
            
                        }
                        
                        // echo "<li>".$top3coms[$loop]." ";
                    }
                    $top3coms += $top3com[$loop];
                    $bottom3coms += $bottom3com[$loop];
                    $tod3coms += $tod3com[$loop];
                    $top2coms += $top2com[$loop];
                    $bottom2coms += $bottom2com[$loop];
                    $tod2coms += $tod2com[$loop];
                    $top1coms += $top1com[$loop];
                    $bottom1coms += $bottom1com[$loop];
                }
            }
        }
        $allcom = $top3coms + $bottom3coms + $tod3coms + 
                    $top2coms + $bottom2coms + $tod2coms + 
                    $top1coms +$bottom1coms;

        $alltake = $allsumbuy-$allcom;

        return view('listlottery.listlotpoint.index', compact('sumtop3','sumtop2','sumbottom3',
                                                              'sumbottom2','sumtod3','sumtod2',
                                                              'sumtop1','sumbottom1','top3coms',
                                                              'bottom3coms','tod3coms','top2coms',
                                                              'bottom2coms','tod2coms','top1coms',
                                                              'bottom1coms','allcom','allsumbuy','alltake'));
    }

    public function listlotuser()
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
        $userbets_counts[0] = '';
        foreach ($userbets as $key => $userbet) {
            // echo "<li>".$userbet->member_id. "</li>";
            $ratepaygovs[$userbet->member_id] = Ratepaygov::where("ratepaygov_id",$userbet->member_id)->first();
            $userbets_counts[$key] = Userbet::where("member_id",$userbet->member_id)->get();
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
        if($userbets_counts){
            foreach ($userbets_counts as $loop => $userbets_count) {
                // echo "== loop".$loop."==";
                // echo " ".$userbets_count."";
                $com[$loop] = 0;
                // echo "<ul>";
                if($userbets_count){
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
                        }elseif ($userbets_C->type=="top1") {
                            //echo $ratepaygovs[$userbets_C->member_id]->comg_6." %<BR>";
                            // echo (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_7)/100);
                            $com[$loop] += (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_7)/100); 
                        }elseif ($userbets_C->type=="bottom1") {
                            //echo $ratepaygovs[$userbets_C->member_id]->comg_6." %<BR>";
                            //echo (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_6)/100);
                            $com[$loop] += (($userbets_C->amount*$ratepaygovs[$userbets_C->member_id]->comg_8)/100);
                        }
                        // echo "</li>";
                    }
                }
                $sum_com += $com[$loop];
                // echo "</ul>";
            }
        }
        // echo $sum_com;
        /////////////////////sum Member////////////////////////////
                    $alltotalmember = 0;
                if($userbets_counts){
                    foreach($userbets_counts as $loop => $userbets_count){
                        $summember[$loop] = 0;
                        if($userbets_count){
                            foreach ($userbets_count as $key => $userbets_C) {
                                
                                $summember[$loop] += ($userbets_C->amount);
                            }
                        }
                    }
                }        // echo "<li>". $com[$loop]." ";
                        // echo "<li>". $summember[$loop]." ";
                if($userbets_counts){
                    foreach($userbets_counts as $loop => $userbets_count){
                        
                        $totalmember[$loop] = 0;
                        if($userbets_count){
                            foreach ($userbets_count as $key => $userbets_C) {
                                $totalmember[$loop] = $summember[$loop] - $com[$loop];
                            
                            }
                        }   
                        $alltotalmember += $totalmember[$loop];
                    }
                }
            //////////////////////////////////////////////////////// 
        return view('listlottery.listlotuser.index', compact('userbets','sum','com','totalmember','sumcom','alltotalmember','sum_com'));
    }

 
   
}

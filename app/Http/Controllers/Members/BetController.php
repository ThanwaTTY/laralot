<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Userbet;
use App\Member;
use App\Ratepaygov;
use App\Keep;


class BetController extends Controller
{
    public function listlotpoint()
    {
        $id = auth()->user()->id;

        $userbets = Userbet::with('member')->select(DB::Raw('SUM(amount) as sum_amount, member_id'))
                                ->orderBy('bet_num', 'desc')
                                ->groupBy('member_id')
                                ->get();

        $sumtop3 = Userbet::where('useradd', $id)->where('type','top3')->sum('amount');
        $sumtop2 = Userbet::where('useradd', $id)->where('type','top2')->sum('amount');
        $sumbottom3 = Userbet::where('useradd', $id)->where('type','bottom3')->sum('amount');
        $sumbottom2 = Userbet::where('useradd', $id)->where('type','bottom2')->sum('amount');
        $sumtod3 = Userbet::where('useradd', $id)->where('type','tod3')->sum('amount');
        $sumtod2 = Userbet::where('useradd', $id)->where('type','tod2')->sum('amount');
        $sumtop1 = Userbet::where('useradd', $id)->where('type','top1')->sum('amount');
        $sumbottom1 = Userbet::where('useradd', $id)->where('type','bottom1')->sum('amount');
        $allsumbuy = $sumtop3+$sumtop2+$sumbottom3+$sumbottom2+$sumtod3+$sumtod2+$sumtop1+$sumbottom1;
        $userbets_counts[0] = "";

        foreach($userbets as $key => $userbet)
        {
            $userbets_counts[$key] = Userbet::where('useradd', $id)->where('member_id', $userbet->member_id)->get();
        }
        $top3coms = 0;
        $bottom3coms = 0;
        $tod3coms = 0;
        $top2coms = 0;
        $bottom2coms = 0;
        $tod2coms = 0;
        $top1coms = 0;
        $bottom1coms = 0;
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
                            $top3com[$loop]  += ($userbet_C->amount*($userbet_C->com_mem/100));
                            // echo "<li>".$top3com[$loop]."</li>";
                        }
                        if($userbet_C->type == "bottom3"){
                            $bottom3com[$loop]  += ($userbet_C->amount*($userbet_C->com_mem/100));
                        
                        }
                        if($userbet_C->type == "tod3"){
                            $tod3com[$loop]  += ($userbet_C->amount*($userbet_C->com_mem/100));
                        
                        }
                        if($userbet_C->type == "top2"){
                            $top2com[$loop]  += ($userbet_C->amount*($userbet_C->com_mem/100));
                        
                        }
                        if($userbet_C->type == "bottom2"){
                            $bottom2com[$loop]  += ($userbet_C->amount*($userbet_C->com_mem/100));
                        
                        }
                        if($userbet_C->type == "tod2"){
                            $tod2com[$loop]  += ($userbet_C->amount*($userbet_C->com_mem/100));
                        
                        }
                        if($userbet_C->type == "top1"){
                            $top1com[$loop]  += ($userbet_C->amount*($userbet_C->com_mem/100));
                        
                        }
                        if($userbet_C->type == "bottom1"){
                            $bottom1com[$loop]  += ($userbet_C->amount*($userbet_C->com_mem/100));
            
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
        $userbetkeeps = Userbet::where('useradd', $id)->with('member')->select(DB::Raw('SUM(amount) as sum_amount, useradd'))
                            ->orderBy('bet_num', 'desc')
                            ->groupBy('useradd')
                            ->get();
        $userbets = Userbet::where('useradd', $id)->with('member')->select(DB::Raw('SUM(amount) as sum_amount, member_id'))
                            ->orderBy('bet_num', 'desc')
                            ->groupBy('member_id')
                            ->get();
        // $keeps = Keep::where::('member_id',)
        $sumtop3 = Userbet::where('useradd', $id)->where('type','top3')->sum('amount');
        $sumtop2 = Userbet::where('useradd', $id)->where('type','top2')->sum('amount');
        $sumbottom3 = Userbet::where('useradd', $id)->where('type','bottom3')->sum('amount');
        $sumbottom2 = Userbet::where('useradd', $id)->where('type','bottom2')->sum('amount');
        $sumtod3 = Userbet::where('useradd', $id)->where('type','tod3')->sum('amount');
        $sumtod2 = Userbet::where('useradd', $id)->where('type','tod2')->sum('amount');
        $sumtop1 = Userbet::where('useradd', $id)->where('type','top1')->sum('amount');
        $sumbottom1 = Userbet::where('useradd', $id)->where('type','bottom1')->sum('amount');
        $allsummem = $sumtop3+$sumtop2+$sumbottom3+$sumbottom2+$sumtod3+$sumtod2+$sumtop1+$sumbottom1;
        $userbets_counts[0] = '';
        foreach ($userbets as $key => $userbet) {
            // echo "<li>".$userbet->member_id. "</li>";
            $ratepaygovs[$userbet->member_id] = Ratepaygov::where("member_id",$userbet->member_id)->first();
            $userbets_counts[$key] = Userbet::where("member_id",$userbet->member_id)->get();
            $amountmember = $userbet->sum_amount;
            $sum += $userbet->sum_amount;
        }
        foreach ($userbetkeeps as $key => $userbet) {
            // echo "<li>".$userbet->useradd. "</li>";
            $keeps[$userbet->useradd] = Keep::where("member_id",$userbet->useradd)->first();
            // echo "<li>". $keeps[$userbet->useradd]. "</li>";
        }


        $top3comsmem = 0;
        $bottom3comsmem = 0;
        $tod3comsmem = 0;
        $top2comsmem = 0;
        $bottom2comsmem = 0;
        $tod2comsmem = 0;
        $top1comsmem = 0;
        $bottom1comsmem = 0;
        $sum_com = 0;
        if($userbets_counts){
            foreach ($userbets_counts as $loop => $userbets_count) {
                // echo "== loop".$loop."==";
                // echo " ".$userbets_count."";
                $com[$loop] = 0;
                $top3commem[$loop] = 0;
                $bottom3commem[$loop] = 0;
                $tod3commem[$loop] = 0;
                $top2commem[$loop] = 0;
                $bottom2commem[$loop] = 0;
                $tod2commem[$loop] = 0;
                $top1commem[$loop] = 0;
                $bottom1commem[$loop] = 0;
                // echo "<ul>";
                if($userbets_count){
                    foreach ($userbets_count as $key => $userbets_C) {
                        // echo "==".$key."==";
                        //$com[$userbets_C->member_id] = 0;
                        // echo "<li>".$userbets_C->amount." ";
                        if($userbets_C->type=="top3"){
                            $com[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                            $top3commem[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                        }elseif ($userbets_C->type=="bottom3") {
                            $com[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                            $bottom3commem[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                        }elseif ($userbets_C->type=="tod3") {
                            $com[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                            $tod3commem[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                        }elseif ($userbets_C->type=="top2") {
                            $com[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                            $top2commem[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                        }elseif ($userbets_C->type=="bottom2") {
                            $com[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                            $bottom2commem[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                        }elseif ($userbets_C->type=="tod2") {
                            $com[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                            $tod2commem[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                        }elseif ($userbets_C->type=="top1") {
                            $com[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100))); 
                            $top1commem[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                        }elseif ($userbets_C->type=="bottom1") {
                            $com[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                            $bottom1commem[$loop] += (($userbets_C->amount*($userbets_C->com_mem/100)));
                        }
                        // echo "</li>";
                    }
                }
                $top3comsmem += $top3commem[$loop];
                $bottom3comsmem += $bottom3commem[$loop];
                $tod3comsmem += $tod3commem[$loop];
                $top2comsmem += $top2commem[$loop];
                $bottom2comsmem += $bottom2commem[$loop];
                $tod2comsmem += $tod2commem[$loop];
                $top1comsmem += $top1commem[$loop];
                $bottom1comsmem  += $bottom1commem[$loop];
                $allcommem = $top3comsmem+$bottom3comsmem+$tod3comsmem+$top2comsmem+$bottom2comsmem+$tod2comsmem+$top1comsmem+$bottom1comsmem;
                $sum_com += $com[$loop];
                // echo  $top3comsmem ."</ul>";
            }
        }
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
/////////////////////////////////Agen////////////////////////////////////////////////////////////////////
        $sumAll_keep = 0;
        $sumAll_comAg = 0;
        if($userbets_counts){
            foreach($userbets_counts as $loop => $userbets_count){
                $sum_keep[$loop] = 0;
                $sum_comAg[$loop] = 0;
                if($userbets_count){
                    foreach($userbets_count as $key => $userbets_C){
                        if($userbets_C->type=="top3"){
                            $sum_keep[$loop] += (($userbets_C->amount*($userbets_C->agent_keep/100)));
                            $keepAg = ($userbets_C->amount*($userbets_C->agent_keep/100));
                            $sum_comAg[$loop] += ($keepAg*($userbets_C->agent_com/100));
                             
                        }elseif ($userbets_C->type=="bottom3") {
                            $sum_keep[$loop] += (($userbets_C->amount*($userbets_C->agent_keep/100)));
                            $keepAg = ($userbets_C->amount*($userbets_C->agent_keep/100));
                            $sum_comAg[$loop] += ($keepAg*($userbets_C->agent_com/100));
                        }elseif ($userbets_C->type=="tod3") {
                            $sum_keep[$loop] += (($userbets_C->amount*($userbets_C->agent_keep/100)));
                            $keepAg = ($userbets_C->amount*($userbets_C->agent_keep/100));
                            $sum_comAg[$loop] += ($keepAg*($userbets_C->agent_com/100));
                             
                        }elseif ($userbets_C->type=="top2") {
                            $sum_keep[$loop] += (($userbets_C->amount*($userbets_C->agent_keep/100)));
                            $keepAg = ($userbets_C->amount*($userbets_C->agent_keep/100));
                            $sum_comAg[$loop] += ($keepAg*($userbets_C->agent_com/100));
                            
                        }elseif ($userbets_C->type=="bottom2") {
                            $sum_keep[$loop] += (($userbets_C->amount*($userbets_C->agent_keep/100)));
                            $keepAg = ($userbets_C->amount*($userbets_C->agent_keep/100));
                            $sum_comAg[$loop] += ($keepAg*($userbets_C->agent_com/100));
                        }elseif ($userbets_C->type=="tod2") {
                            $sum_keep[$loop] += (($userbets_C->amount*($userbets_C->agent_keep/100)));
                            $keepAg = ($userbets_C->amount*($userbets_C->agent_keep/100));
                            $sum_comAg[$loop] += ($keepAg*($userbets_C->agent_com/100));
                            
                        }elseif ($userbets_C->type=="top1") {
                            $sum_keep[$loop] += (($userbets_C->amount*($userbets_C->agent_keep/100)));
                            $keepAg = ($userbets_C->amount*($userbets_C->agent_keep/100));
                            $sum_comAg[$loop] += ($keepAg*($userbets_C->agent_com/100));
                        }elseif ($userbets_C->type=="bottom1") {
                            $sum_keep[$loop] += (($userbets_C->amount*($userbets_C->agent_keep/100)));
                            $keepAg = ($userbets_C->amount*($userbets_C->agent_keep/100));
                            $sum_comAg[$loop] += ($keepAg*($userbets_C->agent_com/100));
                        }
                    }  
                                
                }
                // echo  $sum_comAg[$loop] ."</ul>";
                $sumAll_comAg += $sum_comAg[$loop];
                $sumAll_keep += $sum_keep[$loop];
                $sumAll_sum = $sumAll_keep-$sumAll_comAg;
            }
        }



        /////////////////////company////////////////////////////
        $sumAllcompany_keep = 0;
        $sumAllcompany_com = 0;
        if($userbets_counts){
            foreach($userbets_counts as $loop => $userbets_count){
                $sumcompany_keep[$loop] = 0;
                $sumcompany_com[$loop] = 0;
                if($userbets_count){
                    foreach($userbets_count as $key => $userbets_C){
                        if($userbets_C->type=="top3"){
                            $sumcompany_keep[$loop] += (($userbets_C->company_amount));                   
                            $sumcompany_com[$loop] += ($userbets_C->company_com/10); 
                        }elseif ($userbets_C->type=="bottom3") {
                            $sumcompany_keep[$loop] += (($userbets_C->company_amount));  
                            $sumcompany_com[$loop] += ($userbets_C->company_com/10);
                        }elseif ($userbets_C->type=="tod3") {
                            $sumcompany_keep[$loop] += (($userbets_C->company_amount));
                            $sumcompany_com[$loop] += ($userbets_C->company_com/10);
                        }elseif ($userbets_C->type=="top2") {
                            $sumcompany_keep[$loop] += (($userbets_C->company_amount));
                            $sumcompany_com[$loop] += ($userbets_C->company_com/10);
                        }elseif ($userbets_C->type=="bottom2") {
                            $sumcompany_keep[$loop] += (($userbets_C->company_amount));
                            $sumcompany_com[$loop] += ($userbets_C->company_com/10);
                        }elseif ($userbets_C->type=="tod2") {
                            $sumcompany_keep[$loop] += (($userbets_C->company_amount));
                            $sumcompany_com[$loop] += ($userbets_C->company_com/10);
                        }elseif ($userbets_C->type=="top1") {
                            $sumcompany_keep[$loop] += (($userbets_C->company_amount));
                            $sumcompany_com[$loop] += ($userbets_C->company_com/10);
                        }elseif ($userbets_C->type=="bottom1") {
                            $sumcompany_keep[$loop] += (($userbets_C->company_amount));
                            $sumcompany_com[$loop] += ($userbets_C->company_com/10);
                        }
                    }  
                                
                }
                // echo  $sum_comAg[$loop] ."</ul>";
                $sumAllcompany_com += $sumcompany_com[$loop];
                $sumAllcompany_keep += $sumcompany_keep[$loop];
                $sumAllcompany_sum = $sumAllcompany_keep-$sumAllcompany_com;
            }
        }    
   //////////////////////////////////////////Type///////////////////////////////////////////////////
     

        return view('listlottery.listlotuser.index', compact('userbets','sum','com','totalmember','sumcom',
                                                             'alltotalmember','sum_com','sum_keep','sumAll_keep',
                                                             'sum_comAg','sumAll_comAg','sumAll_sum','sumcompany_com',
                                                             'sumAllcompany_com','sumcompany_keep','sumAllcompany_keep',
                                                             'sumAllcompany_sum','sumtop3','sumbottom3','sumtod3',
                                                             'sumtop2','sumbottom2','sumtod2','sumtop1','sumbottom1','allsummem',
                                                             'allcommem','top3comsmem','bottom3comsmem','tod3comsmem','top2comsmem',
                                                             'bottom2comsmem','tod2comsmem','top1comsmem','bottom1comsmem'));
    }

 
   
}

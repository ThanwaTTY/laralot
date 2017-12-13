<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Userbet;
use App\Member;


class BetController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;

        $members = Member::get();

        $userbets = Userbet::with('member')->select(DB::Raw('SUM(amount) as sum_amount, member_id'))
                            ->orderBy('bet_num', 'desc')
                            ->groupBy('member_id')
                            ->get();

        foreach( $userbets as $userbet)
        {
            echo "<li>". $userbet->member->name." sumtop=".$userbet->sum_amount."</li>";
        }
        dd( $userbets );
        // $userbets = Userbet:://orderBy('id', 'desc')
        //          //groupBy('id')
        //          get();
         foreach ($userbets[2] as $key => $userbet)  
        {
             echo $userbet->top;
        }

        dd($userbets[2][0]);
        //$userbets = DB::table('userbets')
                //->groupBy('userbet_id')
                //->having('account_id', '>', 100)
          //      ->get();
        // $userbets = Userbet::groupBy('num')->get();
        // foreach ($userbets as $key => $userbet) {
        //     echo $userbet;
        //     // echo $Carryall->website->id;
        // }

        // $members = Member::where('useradd', $id)->get();
        // $userbets = Userbet::get();

        //$userbets = Member::groupBy('level')->get();
        // foreach ($userbets as $key => $userbet)  
        // {
        //     echo $userbet->userbet_id;
        // }

        // dd($userbetall[$key]);
        //dd($userbets);
        return view('listlottery.listlotuser.index', compact('userbets','userbetall'));
    }
}

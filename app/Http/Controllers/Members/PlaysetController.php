<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Playset;
use App\Member;

class PlaysetController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $helper = auth()->user()->helper;
        $useradd = auth()->user()->useradd;
        $member = Member::find($id)->get();

        $playset = Playset::where('member_id', '!=', $id)->where('member_id', $useradd)->get();
        // $member = Member::where('id', '!=', $id)->where('id', $playset->member_id)->get();
        
        // $playset = Playset::where('member_id', $member)->get();
        // dd($playset);

        // if ($helper==1) {
        // $member = Member::where('id', '!=', $id)->where('helper', 0 )->where('useradd', $useradd)->get();  
        $member = Member::where('helper',0)->where('useradd',$id)->get();
          
        // } else {
        //     $member = Member::where('id', '!=', $id)->where('helper', $helper )->where('useradd', $id)->get();
        // }
        // foreach ($member as $key => $loop) {
        //     $playset[$key] = Playset::where('member_id',$loop->id)->get();
        // }
        // dd($member->playset->min_1);
        return view('user.high-low-number.index' , compact('playset','member'));
    }
}

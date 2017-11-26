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
        // $member = Member::where('id', '!=', $id)->first();
        $playset = Playset::get();

        // $playset = Playset::where('member_id', $member)->get();
        // dd($playset);

        // if ($helper==1) {
        //     $member = Member::where('id', '!=', $id)->where('helper', 0 )->where('useradd', $useradd)->get();            
        // } else {
        //     $member = Member::where('id', '!=', $id)->where('helper', $helper )->where('useradd', $id)->get();
        // }
        // foreach ($member as $key => $loop) {
        //     $playset[$key] = Playset::where('member_id',$loop->id)->get();
        // }
        // dd($playset[0]);
        return view('user.high-low-number.index' , compact('playset'));
    }
}

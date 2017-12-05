<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Opencloselot;
use App\Member;


class OpencloseController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $useradd = auth()->user()->useradd;
        $members = Member::where('id','!=' ,$id)->where('helper',0)->where('useradd',$id)->get();

        return view('user.open-close-lottery.index', compact('members'));
    }

    public function govlot()
    {
        // dd();
        // dd(request('member_ids'));
        foreach(request('member_ids') as $govlot){
            $govlots = Opencloselot::find($govlot);
            if(request('active')){
            $govlots->govlot = request('active');
            }
            $govlots->update();
        }
    }
}

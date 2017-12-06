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

    public function govlot(Request $request)
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
         return back()->withInput(); 
    }
    public function tkslot(Request $request)
    {
        // dd(request('member_ids'));
        foreach(request('member_ids') as $tkslot){
            $tkslots = Opencloselot::find($tkslot);
            if(request('active')){
            $tkslots->tkslot = request('active');
            }
            $tkslots->update();
        }
         return back()->withInput();
    }
    public function setlot(Request $request)
    {
        // dd(request('member_ids'));
        foreach(request('member_ids') as $setlot){
            $setlots = Opencloselot::find($setlot);
            if(request('active')){
            $setlots->setlot = request('active');
            }
            $setlots->update();
        }
         return back()->withInput();
    }
    public function loaslot(Request $request)
    {
        // dd(request('member_ids'));
        foreach(request('member_ids') as $loaslot){
            $loaslots = Opencloselot::find($loaslot);
            if(request('active')){
            $loaslots->loaslot = request('active');
            }
            $loaslots->update();
        }
         return back()->withInput();
    }
    public function malalot(Request $request)
    {
        foreach(request('member_ids') as $malalot){
            $malalots = Opencloselot::find($malalot);
            if(request('active')){
                $malalots->malalot = request('active');
            }
            $malalots->update();
        }
        return back()->withInput();

    }
    public function setabroad(Request $request)
    {
        foreach(request('member_ids') as $setabroad){
            $setabroads = Opencloselot::find($setabroad);
            if(request('active')){
                $setabroads->setabroad = request('active');
            }
            $setabroads->update();
        }
        return back()->withInput();
    }
    public function vnlot(Request $request)
    {
        foreach(request('member_ids') as $vnlot){
            $vnlots = Opencloselot::find($vnlot);
            if(request('active')){
                $vnlots->vnlot = request('active');
            }
            $vnlots->update();
        }
        return back()->withInput();
    }
    //////////////////////////////////////////////////////////////////////////////////////
    public function typebet(Request $request)
    {
        foreach(request('member_ids') as $typebet){
            $typebets = Opencloselot::find($typebet);
            if(request('btg_visible_1')){
                $typebets->typebet = request('btg_visible_1');
            }
            $typebets->update();

        }
         return back()->withInput();
    }
    ///////////////////////////////////////////////////////////////////////////////////////
    public function lotgovuse(Request $request)
    {
        foreach(request('member_ids') as $lotgovuse){
            $lotgovuses = Opencloselot::find($lotgovuse);
            if(request('active')){
                $lotgovuses->lotgovuse = request('active');
            }if(request('btg_active_1')){
                $lotgovuses->lotgov3 = request('btg_active_1');
            }
            $lotgovuses->update();
        }
        return back()->withInput();
    }
    public function lotuse(Request $request)
    {
        foreach(request('member_ids') as $lotuse){
            $lotuses = Opencloselot::find($lotuse);
            if(request('active')){
                $lotuses->lotuse = request('active');
            }if(request('btg_active_1')){
                $lotuses->lot3 = request('btg_active_1');
            }
            $lotuses->update();
        }
        return back()->withInput();
    }
}

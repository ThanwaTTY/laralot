<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ratepay;
use App\Member;


class RateController extends Controller
{
    public function index(){
        // $tab1 = request('tab1','payout');
        // $tab2 = request('tab2',5);
        // $tab3 = request('tab3',1);
        // $order = $request->order;

        // $rates = Ratepay::get();
        $id = auth()->user()->id;
        $useradd = auth()->user()->useradd;
        $members = Member::where('id','!=' ,$id)->where('helper',0)->where('useradd',$id)->get();

         return view('user.commission.index',compact('members'));
    }

    public function payoutg(Request $request)
    {
        foreach(request('member_ids') as $ratepay_id){
            $ratepay = Ratepay::find($ratepay_id);
            //dd($ratepay->payoutg_1);
            if(request('payoutg_1')){
                $ratepay->payoutg_1 = request('payoutg_1');
            }
            if(request('payoutg_2')){
                $ratepay->payoutg_2 = request('payoutg_2');
            }
            if(request('payoutg_3')){
                $ratepay->payoutg_3 = request('payoutg_3');
            }
            if(request('payoutg_4')){
                $ratepay->payoutg_4 = request('payoutg_4');
            }
            if(request('payoutg_5')){
                $ratepay->payoutg_5 = request('payoutg_5');
            }
            if(request('payoutg_6')){
                $ratepay->payoutg_6 = request('payoutg_6');
            }
            if(request('payoutg_7')){
                $ratepay->payoutg_7 = request('payoutg_7');
            }
            if(request('payoutg_8')){
                $ratepay->payoutg_8 = request('payoutg_8');
            }

            $ratepay->update();
           
        }

         return back()->withInput();
    }

    public function payout(Request $request)
    {
        foreach(request('member_ids') as $ratepay_id){
            $ratepay = Ratepay::find($ratepay_id);
            //dd($ratepay->payoutg_1);
            if(request('payout_1')){
                $ratepay->payout_1 = request('payout_1');
            }
            if(request('payout_2')){
                $ratepay->payout_2 = request('payout_2');
            }
            if(request('payout_3')){
                $ratepay->payout_3 = request('payout_3');
            }
            if(request('payout_4')){
                $ratepay->payout_4 = request('payout_4');
            }
            if(request('payout_5')){
                $ratepay->payout_5 = request('payout_5');
            }
            if(request('payout_6')){
                $ratepay->payout_6 = request('payout_6');
            }
            if(request('payout_7')){
                $ratepay->payout_7 = request('payout_7');
            }
            if(request('payout_8')){
                $ratepay->payout_8 = request('payout_8');
            }

            $ratepay->update();
           
        }

         return back()->withInput();
    }

    public function comg(Request $request)
    {
        dd(request('member_ids'));
    }

    public function com(Request $request)
    {
        dd(request('member_ids'));
    }
}

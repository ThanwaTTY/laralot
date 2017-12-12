<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ratepay;
use App\Member;
use App\Ratepaygov;


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
        // dd($members->ratepay);
        // $rate = Ratepaygov::get();
        // dd($rate->member->id);
         return view('user.commission.index',compact('members'));
    }

    public function payoutg(Request $request)
    {
        //$data_request = $request->all();
        $id = $request->input('member_ids');
         //dd(request('max_per_num1'));
        $ratepay = Playset::find($id)->first();
        foreach (request('member_ids') as $ratepay_id) {
            $ratepay = Ratepaygov::find($ratepaygov_id);
            if (request('max_per_num1')) {
                
                $ratepay->max_per_num1 = request('max_per_num1');
            }if (request('max_per_num2')) {
                $ratepay->max_per_num2 = request('max_per_num2');
            }if (request('max_per_num3')) {
                $ratepay->max_per_num3 = request('max_per_num3');
            }if (request('max_per_num4')) {
                $ratepay->max_per_num4 = request('max_per_num4');
            }if (request('max_per_num5')) {
                $ratepay->max_per_num5 = request('max_per_num5');
            }if (request('max_per_num6')) {
                $ratepay->max_per_num6 = request('max_per_num6');
            }if (request('max_per_num7')) {
                $ratepay->max_per_num7 = request('max_per_num7');
            }if (request('max_per_num8')) {
                $ratepay->max_per_num8 = request('max_per_num8');
            }
            
            $ratepay->update();
        }
        return response()->json(['data_request'=>$data_request]);



       /* foreach(request('member_ids') as $ratepaygov_id){

            $ratepay = Ratepaygov::find($ratepaygov_id);
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
    
        */
    
        
    
        
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
        foreach(request('member_ids') as $ratepaygov_id){


            $ratepay = Ratepaygov::find($ratepaygov_id);
            //dd($ratepay->payoutg_1);
            if(request('comg_1')){
                $ratepay->comg_1 = request('comg_1');
            }
            if(request('comg_2')){
                $ratepay->comg_2 = request('comg_2');
            }
            if(request('comg_3')){
                $ratepay->comg_3 = request('comg_3');
            }
            if(request('comg_4')){
                $ratepay->comg_4 = request('comg_4');
            }
            if(request('comg_5')){
                $ratepay->comg_5 = request('comg_5');
            }
            if(request('comg_6')){
                $ratepay->comg_6 = request('comg_6');
            }
            if(request('comg_7')){
                $ratepay->comg_7 = request('comg_7');
            }
            if(request('comg_8')){
                $ratepay->comg_8 = request('comg_8');
            }

            $ratepay->update();


        }

         return back()->withInput();
    }

    public function com(Request $request)
    {
          foreach(request('member_ids') as $ratepay_id){


            $ratepay = Ratepay::find($ratepay_id);
            //dd($ratepay->payoutg_1);
            if(request('com_1')){
                $ratepay->com_1 = request('com_1');
            }
            if(request('com_2')){
                $ratepay->com_2 = request('com_2');
            }
            if(request('com_3')){
                $ratepay->com_3 = request('com_3');
            }
            if(request('com_4')){
                $ratepay->com_4 = request('com_4');
            }
            if(request('com_5')){
                $ratepay->com_5 = request('com_5');
            }
            if(request('com_6')){
                $ratepay->com_6 = request('com_6');
            }
            if(request('com_7')){
                $ratepay->com_7 = request('com_7');
            }
            if(request('com_8')){
                $ratepay->com_8 = request('com_8');
            }

            $ratepay->update();


        }
         return back()->withInput();
    }
}

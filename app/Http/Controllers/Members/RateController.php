<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ratepay;


class RateController extends Controller
{
    public function index(Request $request){
        $tab1 = request('tab1','payout');
        $tab2 = request('tab2',5);
        $tab3 = request('tab3',1);
        $order = $request->order;
        // if ($tab1=='payout') {
        //     if ($tab2==5) {
        //         # code...
        //     } else {
        //         # code...
        //     }
            
        // } else {
        //     if ($tab2==5) {
        //         # code...
        //     } else {
        //         # code...
        //     }
            
        // }
        
        $rates = Ratepay::get();
        
        return view('user.commission.index',compact('tab1','tab2','tab3','order','rates'));
    }
}

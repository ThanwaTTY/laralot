<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\Playset;
use App\Ratepay;
use App\Ratepaygov;
use App\Opencloselot;
use Illuminate\Database\QueryException;
use Illuminate\Database\PDOException;
use Exception;

class MemberController extends Controller
{
    
    public function register()
    {
       return view('register.register');
    }
    public function registerstore(Request $request)
    {
        $rules =[
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
            'credit' => 'required',
            'name' => 'required',
            'phone' => 'required'
        ];

         Member::create([
            'username' => request('useradd').request('username'),
            'password' => bcrypt(request('password')),
            'level' => request('level'),
            'credit' => request('credit'),
            'name' => request('name'),
            'phone' => request('phone'),
            'useradd' => 0 
            ]);
        session()->flash('massagesuccess', "สมัคสมาชิกสำหรับ TEST ระบบเรียบร้อยเเล้ว");
        return redirect('/admin/login');
    }
    //
    public function create()
    {
        //ถ้าlevelต่ำกว่าคนล๊อกอินไม่สามารถเพิ่มสมาชิกที่สูงกว่าได้
        // $levels = DB::table('levels')->where('id' , '<' , auth()->user()->level)->get();
         $id = auth()->user()->id;
         $useradd = auth()->user()->useradd;
         $helper = auth()->user()->helper;
        //  $username = $username. '%';
         $credit_auths = Member::find($id);
         $totalcredit = Member::where('id', '!=', $id)->where('useradd', $id)->sum('credit');
         $credit = $credit_auths->credit-$totalcredit;
        // dd($totalcredit);
            $member = Member::get();
            $members = Member::where('id','!=',$id)->where('helper', 0)->where('id', $useradd)->first();
            // $credithelper = Member::where('id','!=',$id)->where('id', $useradd)->sum('credit');

        // dd($credithelper);

        return view('members.create', compact('member', 'credit', 'totalcredit','members','credithelper'));
    }

    public function store(Request $request)
    {
       
         $id = auth()->user()->id;
         $useradd = auth()->user()->useradd;
        //  $username = $username. '%';
        $member = Member::get();
        $members = Member::where('id','!=',$id)->where('helper', 0)->where('id', $useradd)->first();

        if(auth()->user()->helper ==1){
            $memberid = $members->id;
        }else{
            $memberid = auth()->user()->id;
        }
        // dd($memberid);
         $totalcredit = Member::where('id', '!=', $id)->where('useradd', $id)->sum('credit');
         $credithelper = Member::where('id','!=',$id)->where('id', $useradd)->sum('credit');
         $sumcredit = Member::where('id', '!=',$id)->where('useradd', $useradd)->sum('credit');
        //  dd($sumcredit);
        $rules =[
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
            'credit' => 'required',
            'name' => 'required',
            'phone' => 'required',
            // 'min_1' => 'required',
            // 'min_2' => 'required',
            // 'min_3' => 'required',
            // 'min_4' => 'required',
            // 'min_5' => 'required',
            // 'min_6' => 'required',
            // 'min_7' => 'required',
            // 'min_8' => 'required',
            // 'max_1' => 'required',
            // 'max_2' => 'required',
            // 'max_3' => 'required',
            // 'max_4' => 'required',
            // 'max_5' => 'required',
            // 'max_6' => 'required',
            // 'max_7' => 'required',
            // 'max_8' => 'required',
            // 'max_per_num1' => 'required',
            // 'max_per_num2' => 'required',
            // 'max_per_num3' => 'required',
            // 'max_per_num4' => 'required',
            // 'max_per_num5' => 'required',
            // 'max_per_num6' => 'required',
            // 'max_per_num7' => 'required',
            // 'max_per_num8' => 'required',
        ];
        // dd(required->min_1);
         $useradd = auth()->user()->id;

        if(auth()->user()->helper == 1)
        {
         $credits = $credithelper - $sumcredit;
        //  dd($credits);
         $credit = request('credit');
         $total = $credit + $totalcredit;

        }else{
         $credits = auth()->user()->credit;
         $credit = request('credit');
         $total = $credit + $totalcredit;
        }


        $this->validate($request, $rules);
      
        if ($credits >= $total) {
           $membercreate = Member::create([
            'username' => request('useradd').request('username'),
            'password' => bcrypt(request('password')),
            'level' => request('level'),
            'credit' => request('credit'),
            'name' => request('name'),
            'phone' => request('phone'),
            'useradd' => $memberid
            ]);
            
           
             Playset::create([
            'member_id' => $membercreate->id,
            'min_1' => request('min_1'),'max_1' => request('max_1'),'max_per_num1' => request('max_per_num1'),
            'min_2' => request('min_2'),'max_2' => request('max_2'),'max_per_num2' => request('max_per_num2'),
            'min_3' => request('min_3'),'max_3' => request('max_3'),'max_per_num3' => request('max_per_num3'),
            'min_4' => request('min_4'),'max_4' => request('max_4'),'max_per_num4' => request('max_per_num4'),
            'min_5' => request('min_5'),'max_5' => request('max_5'),'max_per_num5' => request('max_per_num5'),
            'min_6' => request('min_6'),'max_6' => request('max_6'),'max_per_num6' => request('max_per_num6'),
            'min_7' => request('min_7'),'max_7' => request('max_7'),'max_per_num7' => request('max_per_num7'),
            'min_8' => request('min_8'),'max_8' => request('max_8'),'max_per_num8' => request('max_per_num8')
            ]);

            Ratepaygov::create([
            'ratepaygov_id' => $membercreate->id,
            'payoutg_1' => request('payoutg_1'),'comg_1' => request('comg_1'),
            'payoutg_2' => request('payoutg_2'),'comg_2' => request('comg_2'),
            'payoutg_3' => request('payoutg_3'),'comg_3' => request('comg_3'),
            'payoutg_4' => request('payoutg_4'),'comg_4' => request('comg_4'),
            'payoutg_5' => request('payoutg_5'),'comg_5' => request('comg_5'),
            'payoutg_6' => request('payoutg_6'),'comg_6' => request('comg_6'),
            'payoutg_7' => request('payoutg_7'),'comg_7' => request('comg_7'),
            'payoutg_8' => request('payoutg_8'),'comg_8' => request('comg_8'),
            ]);

            Ratepay::create([
            'ratepay_id' => $membercreate->id,
            'payout_1' => request('payout_1'),'com_1' => request('com_1'),
            'payout_2' => request('payout_2'),'com_2' => request('com_2'),
            'payout_3' => request('payout_3'),'com_3' => request('com_3'),
            'payout_4' => request('payout_4'),'com_4' => request('com_4'),
            'payout_5' => request('payout_5'),'com_5' => request('com_5'),
            'payout_6' => request('payout_6'),'com_6' => request('com_6'),
            'payout_7' => request('payout_7'),'com_7' => request('com_7'),
            'payout_8' => request('payout_8'),'com_8' => request('com_8')          
            ]);

            Opencloselot::create([
            'openclose_id' => $membercreate->id,
            'govlot' => 1,
            'tkslot' => 1,
            'setlot' => 1,
            'loaslot' => 1,
            'malalot' => 1,
            'setabroad' => 1,
            'vnlot' => 1,
            'typebet' => 1,        
            'lotgovuse' => 1,
            'lotgov3' => 1,
            'lotuse' => 1,
            'lot3' => 1
            ]);

            
           
            session()->flash('massagesuccess','เพิ่มสมาชิกเรียบร้อยเเล้ว');
            return redirect('/members/create');
        } else {
            session()->flash('massage', 'เครติดเกินจำนวนเงิน');
            return redirect('/members/create');
        }
     

    }

    public function edit()
    {
        $id = auth()->user()->id;
        $helper = auth()->user()->helper;
        $useradd = auth()->user()->useradd;

        if ($helper==1) {
            $member = Member::where('id', '!=', $id)->where('helper', 0 )->where('useradd', $useradd)->get();
        } else {
            $member = Member::where('id', '!=', $id)->where('helper', $helper )->where('useradd', $id)->get();
        }
                
        return view('members/edit', compact('member') );
    }
    public function update(Request $request, $id)
    {
            $members = Member::find($id);
            // dd($members->name);
            // $members = Member::where('id', $members->id)->first();
        if (request('name')) {
            $members->name = request('name');
        }
        if (request('phone')) {
            $members->phone = request('phone');
        }
        if (request('password')==null) {
            $members->status = request('status');
        }

        if (request('password')) {
            $members->password = bcrypt(request('password'));
        }


            $members->update();

         return redirect('/members/edit');
    }
}

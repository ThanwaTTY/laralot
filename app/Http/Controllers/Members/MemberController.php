<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\Playset;
use App\Ratepay;
use App\Ratepaygov;
use App\Opencloselot;
use App\Keep;
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
            'min_1' => 'required',
            'min_2' => 'required',
            'min_3' => 'required',
            'min_4' => 'required',
            'min_5' => 'required',
            'min_6' => 'required',
            'min_7' => 'required',
            'min_8' => 'required',
            'max_1' => 'required',
            'max_2' => 'required',
            'max_3' => 'required',
            'max_4' => 'required',
            'max_5' => 'required',
            'max_6' => 'required',
            'max_7' => 'required',
            'max_8' => 'required',
            'max_per_num1' => 'required',
            'max_per_num2' => 'required',
            'max_per_num3' => 'required',
            'max_per_num4' => 'required',
            'max_per_num5' => 'required',
            'max_per_num6' => 'required',
            'max_per_num7' => 'required',
            'max_per_num8' => 'required',
            'payout_1' => 'required',
            'com_1' => 'required',
            'payout_2' => 'required',
            'com_2' => 'required',
            'payout_3' => 'required',
            'com_3'=> 'required',
            'payout_4' => 'required',
            'com_4' => 'required',
            'payout_5' => 'required',
            'com_5' => 'required',
            'payout_6' => 'required',
            'com_6' => 'required',
            'payout_7' => 'required',
            'com_7' => 'required',
            'payout_8' => 'required',
            'com_8'=> 'required',
            'payoutg_1' => 'required',
            'comg_1' => 'required',
            'payoutg_2' => 'required',
            'comg_2' => 'required',
            'payoutg_3' => 'required',
            'comg_3' => 'required',
            'payoutg_4' => 'required',
            'comg_4' => 'required',
            'payoutg_5' => 'required',
            'comg_5' => 'required',
            'payoutg_6' => 'required',
            'comg_6' => 'required',
            'payoutg_7' => 'required',
            'comg_7' => 'required',
            'payoutg_8' => 'required',
            'comg_8' => 'required'
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
            Playset::create( array_merge(request()->all(),['member_id'=> $membercreate->id]) );
            Ratepaygov::create( array_merge(request()->all(),['member_id' => $membercreate->id]) );
            Ratepay::create( array_merge(request()->all(), ['member_id' => $membercreate->id]) );
            Keep::create( array_merge(request()->all(), ['member_id' => $membercreate->id]) );
            Opencloselot::create([
            'member_id' => $membercreate->id,
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

    public function edit(Request $request)
    {
        $member = $this->memberList();
        
        if( request()->ajax() )
        {
            return view('members/table', compact('member'));
        }

        return view('members/edit', compact('member') );

    }

    // helper function
    protected function memberList()
    {
        $helper = auth()->user()->helper;
        $id = auth()->user()->id;

        $query = Member::where('id', '!=', $id)->orderBy( request('order', 'name'), request('type','asc'));

        if ($helper==1) {
            $query->where('helper', 0 )->where('useradd', auth()->user()->useradd );
        } else {
            $query->where('helper', $helper )->where('useradd', $id );        
        }

        return $query->get();        
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

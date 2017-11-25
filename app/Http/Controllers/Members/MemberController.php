<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;

class MemberController extends Controller
{
    public function register($user, $pass, $credit)
    {
        // return $user.$pass.$credit;
        $Member = Member::find('1');
        if ($Member) {
            # code...
        } else {
            Member::create([
            'username' => $user,
            'password' => bcrypt($pass),
            'level' => '1',
            'credit' => $credit,
            'name' => 'Big boss',
            'phone' => '0000000000',
            'useradd' => '0'
            ]);
            session()->flash('massage', 'เพิ่ม Boss เรียบร้อยแล้ว');
            return redirect('/login');
        }
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

        // dd($members);

        return view('members.create', compact('member', 'credit', 'totalcredit','members'));
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
        //  dd($totalcredit);
        $rules =[
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
            'credit' => 'required',
            'name' => 'required',
            'phone' => 'required'
        ];
         $credits = auth()->user()->credit;
         $credit = request('credit');
         $total = $credit + $totalcredit;
         $useradd = auth()->user()->id;
        //  dd($total);
    //    dd($useradd);
        $this->validate($request, $rules);
        // dd($credits);
        if ($credits >= $total) {
            Member::create([
            'username' => request('useradd').request('username'),
            'password' => bcrypt(request('password')),
            'level' => request('level'),
            'credit' => request('credit'),
            'name' => request('name'),
            'phone' => request('phone'),
            'useradd' => $memberid
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

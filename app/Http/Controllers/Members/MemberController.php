<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\Playset;
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
        // dd($credits);
        if($request->min_1 < 5){
            session()->flash('massage', 'ขั้นต่ำ 3 ตัวบน ต้องมีค่าอย่างน้อย 5');
            return redirect('/members/create');
        }if($request->min_2 < 5){
            session()->flash('massage', 'ขั้นต่ำ 3 ตัวล่าง ต้องมีค่าอย่างน้อย 5');
            return redirect('/members/create');
        }if($request->min_3 < 5){
            session()->flash('massage', 'ขั้นต่ำ 3 ตัวโต๊ด ต้องมีค่าอย่างน้อย 5');
            return redirect('/members/create');
        }if($request->min_4 < 5){
            session()->flash('massage', 'ขั้นต่ำ 2 ตัวบน ต้องมีค่าอย่างน้อย 5');
            return redirect('/members/create');
        }if($request->min_5 < 5){
            session()->flash('massage', 'ขั้นต่ำ 2 ตัวล่าง ต้องมีค่าอย่างน้อย 5');
            return redirect('/members/create');
        }if($request->min_6 < 5){
            session()->flash('massage', 'ขั้นต่ำ 2 ตัวโต๊ด ต้องมีค่าอย่างน้อย 5');
            return redirect('/members/create');
        }if($request->min_7 < 5){
             session()->flash('massage', 'ขั้นต่ำ วิ่งบน ต้องมีค่าอย่างน้อย 5');
            return redirect('/members/create');
        }if($request->min_8 < 5){
             session()->flash('massage', 'ขั้นต่ำ วิ่งล่าง ต้องมีค่าอย่างน้อย 5');
            return redirect('/members/create');
        }if($request->max_1 > 3000){
            session()->flash('massage', 'สูงสุด 3 ตัวบน ต้องมีค่าไม่เกิน 3,000');
            return redirect('/members/create');
        }if($request->max_2 > 3000){
            session()->flash('massage', 'สูงสุด 3 ตัวล่าง ต้องมีค่าไม่เกิน 3,000');
            return redirect('/members/create');
        }if($request->max_3 > 3000){
            session()->flash('massage', 'สูงสุด 3 ตัวโต็ด ต้องมีค่าไม่เกิน 3,000');
            return redirect('/members/create');
        }if($request->max_4 > 10000){
            session()->flash('massage', 'สูงสุด 2 ตัวบน ต้องมีค่าไม่เกิน 10,000');
            return redirect('/members/create');
        }if($request->max_5 > 10000){
            session()->flash('massage', 'สูงสุด 2 ตัวล่าง ต้องมีค่าไม่เกิน 10,000');
            return redirect('/members/create');
        }if($request->max_6 > 10000){
            session()->flash('massage', 'สูงสุด 2 ตัวโต๊ด ต้องมีค่าไม่เกิน 100,000');
            return redirect('/members/create');
        }if($request->max_7 > 100000){
            session()->flash('massage', 'สูงสุด วิ่งบน ต้องมีค่าไม่เกิน 100,000');
            return redirect('/members/create');
        }if($request->max_8 > 100000){
            session()->flash('massage', 'สูงสุด วิ่งล่าง ต้องมีค่าไม่เกิน 100,000');
            return redirect('/members/create');
        }if($request->max_per_num1 > 10000){
            session()->flash('massage', 'สูงสุดต่อเลข 3 ตัวบน ต้องมีค่าไม่เกิน 10,000');
            return redirect('/members/create');
        }if($request->max_per_num2 > 100000){
            session()->flash('massage', 'สูงสุดต่อเลข 3 ตัวล่าง ต้องมีค่าไม่เกิน 100,000');
            return redirect('/members/create');
        }if($request->max_per_num3 > 30000){
            session()->flash('massage', 'สูงสุดต่อเลข 3 ตัวโต๊ด ต้องมีค่าไม่เกิน 30,000');
            return redirect('/members/create');
        }if($request->max_per_num4 > 100000){
            session()->flash('massage', 'สูงสุดต่อเลข 2 ตัวบน ต้องมีค่าไม่เกิน 100,000');
            return redirect('/members/create');
        }if($request->max_per_num5 > 100000){
            session()->flash('massage', 'สูงสุดต่อเลข 2 ตัวล่าง ต้องมีค่าไม่เกิน 100,000');
            return redirect('/members/create');
        }if($request->max_per_num6 > 100000){
            session()->flash('massage', 'สูงสุดต่อเลข 2 ตัวโต๊ด ต้องมีค่าไม่เกิน 100,000');
            return redirect('/members/create');
        }if($request->max_per_num7 > 300000){
            session()->flash('massage', 'สูงสุดต่อเลข วิ่งบน ต้องมีค่าไม่เกิน 300,000');
            return redirect('/members/create');
        }if($request->max_per_num8 > 300000){
            session()->flash('massage', 'สูงสุดต่อเลข วิ่งบน ต้องมีค่าไม่เกิน 300,000');
            return redirect('/members/create');
        }
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

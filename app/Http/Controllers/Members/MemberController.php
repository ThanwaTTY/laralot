<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;

class MemberController extends Controller
{
    //
    public function create()
    {
        //ถ้าlevelต่ำกว่าคนล๊อกอินไม่สามารถเพิ่มสมาชิกที่สูงกว่าได้
        // $levels = DB::table('levels')->where('id' , '<' , auth()->user()->level)->get();
        $member = Member::get();
        return view('members.create', compact('member'));
    }

    public function store(Request $request)
    {
         $id = auth()->user()->id;
         $username = auth()->user()->username;
         $username = $username. '%';
         $totalcredit = Member::where('id','!=',$id)->where('username','like',$username)->sum('credit');
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
        //  dd($total);
       
        $this->validate($request, $rules);
        // dd($credits);
        if($credits >= $total){          
           Member::create([
           'username' => request('useradd').request('username'),
           'password' => bcrypt(request('password')),
           'level' => request('level'),
           'credit' => request('credit'),
           'name' => request('name'),
           'phone' => request('phone')
        ]);
        
        return redirect('/members/create');
        }else{
            session()->flash('massage', 'เครติดเกินจำนวนเงิน');
            return redirect('/members/create');
        }
    }

    public function edit()
    {
        $id = auth()->user()->id;
        $username = auth()->user()->username;
        $username = $username.'%';
        // dd($username);
        // $member = Member::where('level','>',$level)->get();

        $member = Member::where('id','!=',$id)->where('username','like',$username)->get();
        // $member = Member::where('id','!=',$id)->where('username','like',$username)->sum('credit');
        // dd($member);
        

        return view('members/edit', compact('member') ); 
    }
    public function update(Request $request,$id)
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
            if(request('password')==null){
                $members->status = request('status');
            }

            if(request('password')) {
                $members->password = bcrypt(request('password'));
            }


            $members->update();

         return redirect('/members/edit');
    }
}

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
        $rules =[
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
            'credit' => 'required',
            'name' => 'required',
            'phone' => 'required'
        ];

        $this->validate($request, $rules);
        Member::create([
           'username' => request('useradd').request('username'),
           'password' => bcrypt(request('password')),
           'level' => request('level'),
           'credit' => request('credit'),
           'name' => request('name'),
           'phone' => request('phone')
        ]);
        return redirect('/members/create');
    }

    public function edit()
    {
        $level = auth()->user()->level;
        $member = Member::where('level','>',$level)->get();


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

            if(request('password')) {
                $members->password = bcrypt(request('password'));
            }

            // if(request('status')){
                $members->status = request('status');
            // }
            $members->update();

         return redirect('/members/edit');
    }
}

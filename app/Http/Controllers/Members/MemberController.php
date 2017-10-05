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
        return view('members.create');
    }

    public function store()
    {
        Member::create([
           'username' => request('username'),
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
        $member = Member::where('level','<',$level)->get();


        return view('members/edit', compact('member') ); 
    }
    public function update(Request $request,$id)
    {
            $members = Member::find($id);
            // dd($members->name);
            // $members = Member::where('id', $members->id)->first();
            $members->name = request('name');
            $members->phone = request('phone');    

            if(request('password')) {
                $members->password = bcrypt(request('password'));
            }
            $members->update();

         return redirect('/members/edit');
    }
}

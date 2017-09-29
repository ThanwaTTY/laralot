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
}

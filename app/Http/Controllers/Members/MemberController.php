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
        Member::create( request()->only('level', 'username', 'password', 'credit', 'name', 'phone') );

        return redirect('/members/create');
    }
}

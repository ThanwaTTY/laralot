<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\Helperset;
class HelperController extends Controller
{
    public function create()
    {
        $member = Member::get();
        // dd($member);
        return view('helper.create', compact('member'));
    }

    public function store(Request $request)
    {
        //dd();
        $rules =[
            'username' => 'required',
            'password' => 'required',
            'name' => 'required',
            'phone' => 'required'
        ];
            $this->validate($request, $rules);
        
        $member = Member::create([
            'username' => request('useradd').request('username'),
            'password' => bcrypt(request('password')),
            'level' => auth()->user()->level,
            'name' => request('name'),
            'credit' => auth()->user()->credit,
            'phone' => request('phone'),
            'useradd' => auth()->user()->id,
            'helper' => '1'
        ]);

        Helperset::create([
            'helper_id'=> $member->id ,
            'listplay' => request('listplay'),
            'member' => request('member'),
            'listkeep' => request('listkeep'),
            'winlose' => request('winlose'),
            'transfer' => request('transfer'),
            'manage' => request('manage'),
            'cancelplay' => request('cancelplay')
        ]);
         return redirect('/helper/create');
    }
}

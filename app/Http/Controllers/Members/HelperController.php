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
            'credit' => '0',
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
         session()->flash('massagesuccess','เพิ่มผู้ช่วยรียบร้อยเเล้ว');
         return redirect('/helper/create');
    }

    public function edit()
    {
        $id = auth()->user()->id;
        //dump($id);
        $useradd = auth()->user()->useradd;
  
        // $member = Member::get();
        //dd($member2);
        //$helperSet = Helperset::get();
        $members = Member::where('helper', 1 )->where('useradd', $id)->get();
        // dd($members);
        // foreach ($members as $key => $member) {
        //     $helperSets[$key] = Helperset::where('helper_id',$member[$key]->id)->first();
        // }
        //dd($helperSets);
        //$helperSets = Helperset::where('helper_id')->get();
        //dd($member[0]->id);
        //dd();
        return view('helper.managehelper', compact('members','helperSets'));
    }

    public function editin($id)
    {

        // dd($id);
        $member = Member::where('id' , $id)->first();
        // dd($member->id);
        return view('helper.edit' , compact('member'));

    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $member->name = request('name');
        $member->password = bcrypt(request('password'));
        $member->phone = request('phone');
        $member->status = request('status');
        $member->helperset->listplay = request('listplay');
        $member->helperset->member = request('member');
        $member->helperset->listkeep = request('listkeep');
        $member->helperset->winlose = request('winlose');
        $member->helperset->transfer = request('transfer');
        $member->helperset->manage = request('manage');
        $member->helperset->cancelplay = request('cancelplay');
        // dd($member->helperset->listplay);
        // dd($member->status);
        $member->update();
        $member->helperset->update();
        session()->flash('massagesuccess','เเก้ไขข้อมูลผู้ช่วยเรียบร้อยเเล้ว');
        return back()->withInput();
    }


    public function show()
    {
        return view('helper.show');
    }
}

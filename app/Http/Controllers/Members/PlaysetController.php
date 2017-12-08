<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Playset;
use App\Member;

class PlaysetController extends Controller
{
    public function index()
    {
        $member = $this->userHightlow();
        if(request()->ajax() )
        {
            return view('user.high-low-number.table1', compact('member'));
        }
        return view('user.high-low-number.index', compact('member'));
    }
    protected function userHightlow()
    {
        $id = auth()->user()->id;
        $helper = auth()->user()->helper;
        $useradd = auth()->user()->useradd;
        $query = Member::where('id','!=',$id)->orderBy( request('order','name'), request('type','asc'));
        
        $query->where('helper', 0)->where('useradd', $id);

        return $query->get();

    }

    public function min(Request $request)
    {

        // $name = $request->all();
         $id = $request->input('member_ids');
         $playset = Playset::find($id)->first();
        // dd($playset->min_1);
        // dd(request('member_ids'));
        foreach (request('member_ids') as $playset_id) {
            $playset = Playset::find($playset_id);
            // dd($playset->min_1);
            if (request('min_1')) {
                $playset->min_1 = request('min_1');
            }if (request('min_2')) {
                $playset->min_2 = request('min_2');
            }if (request('min_3')) {
                $playset->min_3 = request('min_3');
            }if (request('min_4')) {
                $playset->min_4 = request('min_4');
            }if (request('min_5')) {
                $playset->min_5 = request('min_5');
            }if (request('min_6')) {
                $playset->min_6 = request('min_6');
            }if (request('min_7')) {
                $playset->min_7 = request('min_7');
            }if (request('min_8')) {
                $playset->min_8 = request('min_8');
            }
            
            $playset->update();
        }

        //$playset->update();
        // if (request('min_1')) {
        //     $playset->min_1 = request('min_1');
        // }
       
        //$playset->update();
        
        //dd($id);
        $position = [];
        $successes = [];
        $fails = [];
        foreach (request('member_ids') as $member_id) {
            if (request('min_1') > 0) {
                $successes['min_1'][] = $member_id;
                $position[]='min_1';
            }

            if (request('min_2') > 0) {
                $successes['min_2'][] = $member_id;
            }

            if (request('min_3') > 0) {
                $successes['min_3'][] = $member_id;
            }

            if (request('min_4') > 0) {
                $successes['min_4'][] = $member_id;
            }

            if (request('min_5') > 0) {
                $successes['min_5'][] = $member_id;
            }

            if (request('min_6') > 0) {
                $successes['min_6'][] = $member_id;
            }

            if (request('min_7') > 0) {
                $successes['min_7'][] = $member_id;
            }

            if (request('min_8') > 0) {
                $successes['min_8'][] = $member_id;
            }
        }


        return response()->json(['success'=>$successes, 'fails'=>$fails, 'playset'=>$playset, 'id'=>$id]);
        //return ;
        //return back()->withInput();
    }

    public function max(Request $request)
    {
        foreach (request('member_ids') as $playset_id) {
            $playset = Playset::find($playset_id);
            // dd($playset->max_1);
            if (request('max_1')) {
                $playset->max_1 = request('max_1');
            }if (request('max_2')) {
                $playset->max_2 = request('max_2');
            }if (request('max_3')) {
                $playset->max_3 = request('max_3');
            }if (request('max_4')) {
                $playset->max_4 = request('max_4');
            }if (request('max_5')) {
                $playset->max_5 = request('max_5');
            }if (request('max_6')) {
                $playset->max_6 = request('max_6');
            }if (request('max_7')) {
                $playset->max_7 = request('max_7');
            }if (request('max_8')) {
                $playset->max_8 = request('max_8');
            }

            $playset->update();
        }

        return back()->withInput();
    }

    public function max_per_num(Request $request)
    {
        // dd();
        foreach (request('member_ids') as $playset_id) {
            $playset = Playset::find($playset_id);
            // dd($playset->max_1);
            if (request('max_per_num_1')) {
                $playset->max_per_num1 = request('max_per_num_1');
            }if (request('max_per_num_2')) {
                $playset->max_per_num2 = request('max_per_num_2');
            }if (request('max_per_num_3')) {
                $playset->max_per_num3 = request('max_per_num_3');
            }if (request('max_per_num_4')) {
                $playset->max_per_num4 = request('max_per_num_4');
            }if (request('max_per_num_5')) {
                $playset->max_per_num5 = request('max_per_num_5');
            }if (request('max_per_num_6')) {
                $playset->max_per_num6 = request('max_per_num_6');
            }if (request('max_per_num_7')) {
                $playset->max_per_num7 = request('max_per_num_7');
            }if (request('max_per_num_8')) {
                $playset->max_per_num8 = request('max_per_num_8');
            }

            $playset->update();
        }

        return back()->withInput();
    }
}

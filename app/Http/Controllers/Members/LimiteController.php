<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LimiteController extends Controller
{
   public function index(){
    return view('listlottery.settingof.index');
   }

   public function store(Request $request){

    $data_request = $request->all();
    // $data_request = "AAAAAA";

    return response()->json([
        'data_request'=>$data_request
        ]);
   }
}

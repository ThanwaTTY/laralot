<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingtypeController extends Controller
{
    public function index(){
        return view('listlottery.settingtype.index');
    }
}

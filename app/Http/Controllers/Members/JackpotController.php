<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JackpotController extends Controller
{
    public function index(){
        return view('report.jackpot.index');
    }
}

<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResultjackpotController extends Controller
{
    public function index(){
        return view('report.resultjackpot.index');
    }
}

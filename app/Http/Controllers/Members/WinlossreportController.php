<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WinlossreportController extends Controller
{
    public function index(){
        return view('report.winlossreport.index');
    }
}

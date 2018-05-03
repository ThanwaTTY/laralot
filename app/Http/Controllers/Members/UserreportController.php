<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserreportController extends Controller
{
    public function index(){
        return view('report.userreport.index');
    }
}

<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagebalanceController extends Controller
{
    public function index(){
        return view('money.manage-balance.index');
    }
}

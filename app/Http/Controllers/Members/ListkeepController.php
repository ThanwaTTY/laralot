<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListkeepController extends Controller
{
    public function index(){
        return view('user.listkeep.index');
    }
}

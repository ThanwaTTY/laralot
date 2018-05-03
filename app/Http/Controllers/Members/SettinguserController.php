<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettinguserController extends Controller
{
    public function index(){
        return view('shopmanagement.settinguser.index');
    }
}

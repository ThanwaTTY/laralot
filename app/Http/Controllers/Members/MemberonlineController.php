<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberonlineController extends Controller
{
    public function index(){
        return view('user.useronline.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getlogin()
    {
        return view('login.login');
    }

    public function postLogin(Request $request){
        // dd('postlogin');
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];

        $inputs = request()->except(['_token']);
        $this->validate($request, $rules);
        if(auth()->attempt($inputs)) {
             return redirect()->intended('/');
        } else {
            session()->flash('massage', 'E-mail or Password not Correct');
            return redirect('/login');
        }
    }

      public function logout(){
            auth()->logout();
        return redirect('/login');
    }

}

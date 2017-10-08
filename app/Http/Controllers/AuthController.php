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
            if(auth()->user()->status == 0){
             return redirect()->intended('/');
             }
             elseif(auth()->user()->status == 1){
                session()->flash('massage', 'username ของคุณถูกระงับ');
                return redirect('/login');
             }
             elseif(auth()->user()->status == 2){
            // session()->flash('massage', 'username ของคุณไม่สามารถเล่นได้');
             return redirect()->intended('/');
             
             }
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

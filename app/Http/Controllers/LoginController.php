<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function index(){
        return view('login',[
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request){

       $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials, true)){
            $request->session()->regenerate();

            if($request->remember){
                Cookie::queue('user',$request->email, 120);
                Cookie::queue('user',$request->password, 120);
            }
           
            return redirect()->intended('/');
        }

       return back()->with('loginError','Login Failed!!');
    }

    public function logout(Request $request){
        Auth::logout();

        Cookie::queue(Cookie::forget('user'));
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('register',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
       
       $validated_data = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|alpha_num|confirmed',
            'password_confirmation' => 'required',
            'gender'=> 'required',
            'DOB' => 'required|before:today|after:01-01-1990',
            'country' => 'required'
        ]);
        $validated_data['password'] = bcrypt($validated_data['password']);
        $validated_data['role'] = 'customer';

       User::create($validated_data);

       return redirect('/login')->with('success','Registration Success, Please Login !');
    }
}

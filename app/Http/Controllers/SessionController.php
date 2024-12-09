<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }
    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);

        $infologin=[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($infologin)){
            return 'sukses';
        }else{
            return redirect('sesi')->withErrors('Username dan paswword yang dimasukkan tidak valid');
        }
    }
}

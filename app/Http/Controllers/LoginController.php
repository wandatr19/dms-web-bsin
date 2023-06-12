<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/home');
        }
        return redirect()->route('login')->with('failed', 'Email atau Password tidak sesuai');
    }
    public function logout (Request $request){
        activity()->withoutLogs(function () use ($request) {
            Auth::logout();
        });
        return redirect('/');
    }

}

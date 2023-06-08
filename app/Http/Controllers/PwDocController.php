<?php

namespace App\Http\Controllers;

use App\Models\PasswordDoc;
use Illuminate\Http\Request;

class PwDocController extends Controller
{
    //
    public function index()
    {
        return view('pwdoc');
    }
    public function store(Request $request)
    {
        $password = $request->input('password');
        PasswordDoc::create([
            'password' => $password,
        ]);
        return redirect()->back()->with('success', 'Password saved successfully');
    }
    public function update()
    {
    }
}

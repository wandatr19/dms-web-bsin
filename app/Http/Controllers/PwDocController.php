<?php

namespace App\Http\Controllers;

use App\Models\PasswordDoc;
use Illuminate\Http\Request;

class PwDocController extends Controller
{
    //
    public function index()
    {
        $passwordDoc = PasswordDoc::first();
        return view('pwdoc', compact('passwordDoc'));
    }
    public function store(Request $request)
    {
        $password = $request->input('password');
        PasswordDoc::create([
            'password' => $password,
        ]);
        return redirect()->back()->with('success', 'Password saved successfully');
    }
    public function update(Request $request)
    {
        activity()->withoutLogs(function () use ($request) {
            $password = $request->input('password');
            $passwordDoc = PasswordDoc::first();
            $passwordDoc->password = $password;
            $passwordDoc->save();
        });

        return redirect()->back()->with('success', 'Password berhasil diganti');
    }
}

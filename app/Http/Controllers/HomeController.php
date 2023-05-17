<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function treebr(){
        return view('treebranch');
    }
    public function masterlist(){
        return view('masterlist');
    }
    public function adduser(){
        return view('admin.adduser');
    }
    public function listuser(){
        return view('admin.listuser');
    }
    public function history(){
        return view('admin.history');
    }
    public function mech(){
        return view('mechanical.mech');
    }
    public function elect(){
        return view('electrical.electrical');
    }
    public function util(){
        return view('utility.utility');
    }
    public function others(){
        return view('others.others');
    }
    public function civil(){
        return view('civil.civil');
    }
}

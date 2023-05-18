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

    // layer2 mechanical
    public function banbury(){
        return view('mechanical.layer2.banbury');
    }
    public function strainer(){
        return view('mechanical.layer2.strainer');
    }
    public function utility(){
        return view('mechanical.layer2.utility');
    }
    public function polyfilm(){
        return view('mechanical.layer2.polyfilm');
    }
    public function calender(){
        return view('mechanical.layer2.calender');
    }
    public function bexter(){
        return view('mechanical.layer2.bexter');
    }
    public function qct(){
        return view('mechanical.layer2.qct');
    }
}

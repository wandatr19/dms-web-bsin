<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/relogin', function () {
    return view('auth.relogin');
});

Route::get('/changepass', function () {
    return view('auth.changepass');
});

// Embed PDF
// Route::get('/masterlist','MasterListController@index');

Route::get('/masterlist', function () {
    return view('masterlist');
});

Route::get('/treebranch', function () {
    return view('treebranch');
});

Route::get('/home/mech', function () {
    return view('mechanical.mech');
});

Route::get('/home/mech/p1', function () {
    return view('mechanical.p1area');
});

Route::get('/home/mech/p2', function () {
    return view('mechanical.p2area');
});

Route::get('/home/mech/p3', function () {
    return view('mechanical.p3area');
});

Route::get('/home/mech/p4', function () {
    return view('mechanical.p4area');
});

Route::get('/home/mech/p5', function () {
    return view('mechanical.p5area');
});

Route::get('/home/mech/p6', function () {
    return view('mechanical.p6area');
});

Route::get('/home/mech/p7', function () {
    return view('mechanical.p7area');
});

Route::get('/home/mech/p8', function () {
    return view('mechanical.p8area');
});

Route::get('/home/mech/p1/bunbury', function () {
    return view('mechanical.layer3.bunbury');
});

Route::get('/home/mech/p1/strainer', function () {
    return view('mechanical.layer3.strainer');
});

Route::get('/home/mech/p1/polyfilm', function () {
    return view('mechanical.layer3.polyfilm');
});

Route::get('/home/electrical', function () {
    return view('electrical.electrical');
});
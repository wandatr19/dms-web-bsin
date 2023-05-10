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

Route::get('/mech', function () {
    return view('mechanical.mech');
});
<?php

use App\Http\Controllers\LoginController;
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
})->name('login');

Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth','App\Http\Middleware\CekRole:admin,user']], function() {
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::get('/masterlist', 'App\Http\Controllers\HomeController@masterlist')->name('masterlist');
    Route::get('/treebranch', 'App\Http\Controllers\HomeController@treebr')->name('treebr');
    Route::get('/home/mechanical', 'App\Http\Controllers\HomeController@mech')->name('mech');
    Route::get('/home/electrical', 'App\Http\Controllers\HomeController@elect')->name('elect');
    Route::get('/home/civil', 'App\Http\Controllers\HomeController@civil')->name('civil');
    Route::get('/home/utility', 'App\Http\Controllers\HomeController@util')->name('util');
    Route::get('/home/others', 'App\Http\Controllers\HomeController@others')->name('others');

    Route::get('/home/mechanical/banbury', 'App\Http\Controllers\HomeController@banbury')->name('banbury');
    Route::get('/home/mechanical/strainer', 'App\Http\Controllers\HomeController@strainer')->name('strainer');
    Route::get('/home/mechanical/utility', 'App\Http\Controllers\HomeController@utility')->name('utility');
    Route::get('/home/mechanical/polyfilm', 'App\Http\Controllers\HomeController@polyfilm')->name('polyfilm');
    Route::get('/home/mechanical/calender', 'App\Http\Controllers\HomeController@calender')->name('calender');
    Route::get('/home/mechanical/bexter', 'App\Http\Controllers\HomeController@bexter')->name('bexter');
    Route::get('/home/mechanical/qct', 'App\Http\Controllers\HomeController@qct')->name('qct');
});

Route::group(['middleware' => ['auth','App\Http\Middleware\CekRole:admin']], function() {
    Route::get('/adduser', 'App\Http\Controllers\HomeController@adduser')->name('adduser');
    Route::get('/listuser', 'App\Http\Controllers\UserController@index')->name('listuser');
    Route::get('/history', 'App\Http\Controllers\HomeController@history')->name('history');
});



// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/relogin', function () {
//     return view('auth.relogin');
// });

// Route::get('/changepass', function () {
//     return view('auth.changepass');
// });

// // Embed PDF
// // Route::get('/masterlist','MasterListController@index');

// Route::get('/masterlist', function () {
//     return view('masterlist');
// });

// Route::get('/treebranch', function () {
//     return view('treebranch');
// });

// Route::get('/home/mech', function () {
//     return view('mechanical.mech');
// });

// Route::get('/home/mech/p1', function () {
//     return view('mechanical.p1area');
// });

// Route::get('/home/mech/p2', function () {
//     return view('mechanical.p2area');
// });

// Route::get('/home/mech/p3', function () {
//     return view('mechanical.p3area');
// });

// Route::get('/home/mech/p4', function () {
//     return view('mechanical.p4area');
// });

// Route::get('/home/mech/p5', function () {
//     return view('mechanical.p5area');
// });

// Route::get('/home/mech/p6', function () {
//     return view('mechanical.p6area');
// });

// Route::get('/home/mech/p7', function () {
//     return view('mechanical.p7area');
// });

// Route::get('/home/mech/p8', function () {
//     return view('mechanical.p8area');
// });

// Route::get('/home/mech/p1/bunbury', function () {
//     return view('mechanical.layer3.bunbury');
// });

// Route::get('/home/mech/p1/strainer', function () {
//     return view('mechanical.layer3.strainer');
// });

// Route::get('/home/mech/p1/polyfilm', function () {
//     return view('mechanical.layer3.polyfilm');
// });

// Route::get('/home/electrical', function () {
//     return view('electrical.electrical');
// });
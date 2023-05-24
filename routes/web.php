<?php

use App\Http\Controllers\BanburyController;
use App\Http\Controllers\MasterListController;
use App\Http\Controllers\StrainerController;
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
    //Search
    Route::get('/search', [BanburyController::class, 'searchUser'])->name('searchdoc');
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::get('/treebranch', 'App\Http\Controllers\HomeController@treebr')->name('treebr');
    Route::get('/home/mechanical', 'App\Http\Controllers\HomeController@mech')->name('mech');
    Route::get('/home/electrical', 'App\Http\Controllers\HomeController@elect')->name('elect');
    Route::get('/home/civil', 'App\Http\Controllers\HomeController@civil')->name('civil');
    Route::get('/home/utility', 'App\Http\Controllers\HomeController@util')->name('util');
    Route::get('/home/others', 'App\Http\Controllers\HomeController@others')->name('others');
    //Mechanical
    Route::get('/home/mechanical/banbury', 'App\Http\Controllers\HomeController@banbury')->name('banbury');
    Route::post('/home/mechanical/add-banbury', [BanburyController::class, 'upload'])->name('upbanbury');
    Route::get('/home/mechanical/banbury/{id}', 'App\Http\Controllers\HomeController@show')->name('show-banbury');
    Route::get('/home/mechanical/banbury/delete/{id}', [BanburyController::class, 'deleteUser'])->name('deleteBB');

    Route::get('/home/mechanical/strainer', [StrainerController::class, 'strainer'])->name('strainer');
    Route::post('/home/mechanical/add-strainer', [StrainerController::class, 'upload'])->name('upstrainer');
    Route::get('/home/mechanical/strainer/delete/{id}', [StrainerController::class, 'deleteUser'])->name('deleteStrainer');
    Route::get('/home/mechanical/strainer/{doc_name}/open', [StrainerController::class, 'show'])->name('showstrainer');


    Route::get('/home/mechanical/utility', 'App\Http\Controllers\HomeController@utility')->name('utility');
    Route::get('/home/mechanical/polyfilm', 'App\Http\Controllers\HomeController@polyfilm')->name('polyfilm');
    Route::get('/home/mechanical/calender', 'App\Http\Controllers\HomeController@calender')->name('calender');
    Route::get('/home/mechanical/bexter', 'App\Http\Controllers\HomeController@bexter')->name('bexter');
    Route::get('/home/mechanical/qct', 'App\Http\Controllers\HomeController@qct')->name('qct');
    Route::get('/home/mechanical/1ndct', 'App\Http\Controllers\HomeController@ndct')->name('ndct');
    Route::get('/home/mechanical/8ct', 'App\Http\Controllers\HomeController@dlpn_ct')->name('8ct');
    Route::get('/home/mechanical/bead', 'App\Http\Controllers\HomeController@bead')->name('bead');
    Route::get('/home/mechanical/monowire', 'App\Http\Controllers\HomeController@monowire')->name('monowire');
    Route::get('/home/mechanical/rtb', 'App\Http\Controllers\HomeController@rtb')->name('rtb');
    Route::get('/home/mechanical/plycutting1', 'App\Http\Controllers\HomeController@plycutting1')->name('plycutting1');
    Route::get('/home/mechanical/plycutting2', 'App\Http\Controllers\HomeController@plycutting2')->name('plycutting2');
    Route::get('/home/mechanical/srbelt1', 'App\Http\Controllers\HomeController@srbelt1')->name('srbelt1');
    Route::get('/home/mechanical/srbelt2', 'App\Http\Controllers\HomeController@srbelt2')->name('srbelt2');
    Route::get('/home/mechanical/psp', 'App\Http\Controllers\HomeController@psp')->name('psp');
    Route::get('/home/mechanical/il2rh', 'App\Http\Controllers\HomeController@il2rh')->name('il2rh');
    Route::get('/home/mechanical/kbn2', 'App\Http\Controllers\HomeController@kbn2')->name('kbn2');
    Route::get('/home/mechanical/k1-s', 'App\Http\Controllers\HomeController@k1-s')->name('k1-s');
    Route::get('/home/mechanical/hf-1', 'App\Http\Controllers\HomeController@hf-1')->name('hf-1');
    Route::get('/home/mechanical/cure', 'App\Http\Controllers\HomeController@cure')->name('cure');
    Route::get('/home/mechanical/apdd-1', 'App\Http\Controllers\HomeController@apdd1')->name('apdd-1');
    Route::get('/home/mechanical/inner_apdd1', 'App\Http\Controllers\HomeController@inner_apdd1')->name('inner_apdd1');
    Route::get('/home/mechanical/white_buff', 'App\Http\Controllers\HomeController@white_buff')->name('white_buff');
    Route::get('/home/mechanical/rim_flow', 'App\Http\Controllers\HomeController@rim_flow')->name('rim_flow');
    Route::get('/home/mechanical/uniformity', 'App\Http\Controllers\HomeController@uniformity')->name('uniformity');
    Route::get('/home/mechanical/hp_lrp', 'App\Http\Controllers\HomeController@hp_lrp')->name('hp_lrp');
    Route::get('/home/mechanical/lw_buff', 'App\Http\Controllers\HomeController@lw_buff')->name('lw_buff');
    Route::get('/home/mechanical/rework', 'App\Http\Controllers\HomeController@rework')->name('rework');
    Route::get('/home/mechanical/tire_repair', 'App\Http\Controllers\HomeController@tire_repair')->name('tire_repair');
    Route::get('/home/mechanical/furniture', 'App\Http\Controllers\HomeController@furniture')->name('furniture');
    Route::get('/home/mechanical/cement_house', 'App\Http\Controllers\HomeController@cement_house')->name('cement_house');

    

    //Electrical
    //Masterlist
    Route::get('/masterlist', 'App\Http\Controllers\MasterListController@mstrlist')->name('masterlist');
    Route::post('/add-masterlist', 'App\Http\Controllers\MasterListController@upload')->name('upload-mstr');
    Route::get('masterlist/{id}', [MasterListController::class, 'show'])->name('mstrlist.show');





});

Route::group(['middleware' => ['auth', 'App\Http\Middleware\CekRole:admin']], function () {
    Route::get('/listuser', 'App\Http\Controllers\UserController@index')->name('listuser');
    Route::get('/history', 'App\Http\Controllers\HomeController@history')->name('history');

    Route::get('/adduser', 'App\Http\Controllers\UserController@create')->name('adduser');
    Route::post('/save-adduser', 'App\Http\Controllers\UserController@store')->name('save-adduser');
    Route::get('/deleteUser/{id}', 'App\Http\Controllers\UserController@deleteUser')->name('deleteUser');

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
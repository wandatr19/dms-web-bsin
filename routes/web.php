<?php

use App\Http\Controllers\BanburyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MasterListController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StrainerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UtilityController;
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

Route::resource('folders', FolderController::class);

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth','App\Http\Middleware\CekRole:admin,user']], function() {
    //Search
    Route::get('/search', [SearchController::class, 'searchUser'])->name('searchdoc');
    Route::get('/search/{id}', [SearchController::class, 'show'])->name('showdoc');

    //Favorite
    Route::get('/favorite/add/{document}', [FavoriteController::class, 'add'])->name('add-fav');

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/treebranch', [HomeController::class, 'treebr'])->name('treebr');
    Route::get('/home/mechanical', [HomeController::class, 'mech'])->name('mech');
    Route::get('/home/electrical', [HomeController::class, 'elect'])->name('elect');
    Route::get('/home/civil', [HomeController::class, 'civil'])->name('civil');

    Route::get('/home/others', [HomeController::class, 'others'])->name('others');
    //Mechanical Banbury
    Route::get('/home/mechanical/banbury', [BanburyController::class, 'banbury'])->name('banbury');
    Route::post('/home/mechanical/add-banbury', [BanburyController::class, 'upload'])->name('upbanbury');
    Route::get('/home/mechanical/banbury/{id}', [BanburyController::class, 'show'])->name('show-banbury');
    Route::get('/home/opendoc/{id}', [BanburyController::class, 'open'])->name('open-bb');
    Route::get('/home/mechanical/banbury/delete/{id}', [BanburyController::class, 'deleteDoc'])->name('deleteBB');
    Route::get('/home/mechanical/banbury/deleteAll/{category}', [BanburyController::class, 'deleteAll'])->name('deleteBanbury');
    //Strainer
    Route::get('/home/mechanical/strainer', [StrainerController::class, 'strainer'])->name('strainer');
    Route::post('/home/mechanical/add-strainer', [StrainerController::class, 'upload'])->name('upstrainer');
    Route::get('/home/mechanical/strainer/delete/{id}', [StrainerController::class, 'deleteUser'])->name('deleteStrainer');
    Route::get('/home/mechanical/strainer/{id}', [StrainerController::class, 'show'])->name('showstrainer');
    //Polyfilm
    Route::get('/home/mechanical/polyfilm', [HomeController::class, 'polyfilm'])->name('polyfilm');
    //Utility
    Route::get('/home/utility', [UtilityController::class, 'index'])->name('util');
    Route::post('/home/add-utility', [UtilityController::class, 'store'])->name('uputil');
    Route::get('/home/utility/{id}', [UtilityController::class, 'show'])->name('show-util');
    Route::get('/home/utility/delete/{id}', [UtilityController::class, 'delete'])->name('delUtil');
    Route::get('/home/utility/deleteAll/{category}', [BanburyController::class, 'deleteAll'])->name('deleteUtil');



    
    Route::get('/home/mechanical/calender', [HomeController::class, 'calender'])->name('calender');

    Route::get('/home/mechanical/bexter', [HomeController::class, 'bexter'])->name('bexter');
    Route::get('/home/mechanical/qct', [HomeController::class, 'qct'])->name('qct');
    Route::get('/home/mechanical/1ndct', [HomeController::class, 'ndct'])->name('ndct');
    Route::get('/home/mechanical/8ct', [HomeController::class, 'dlpn_ct'])->name('8ct');
    Route::get('/home/mechanical/bead', [HomeController::class, 'bead'])->name('bead');
    Route::get('/home/mechanical/monowire', [HomeController::class, 'monowire'])->name('monowire');
    Route::get('/home/mechanical/rtb', [HomeController::class, 'rtb'])->name('rtb');
    Route::get('/home/mechanical/plycutting1', [HomeController::class, 'plycutting1'])->name('plycutting1');
    Route::get('/home/mechanical/plycutting2', [HomeController::class, 'plycutting2'])->name('plycutting2');
    Route::get('/home/mechanical/srbelt1', [HomeController::class, 'srbelt1'])->name('srbelt1');
    Route::get('/home/mechanical/srbelt2', [HomeController::class, 'srbelt2'])->name('srbelt2');
    Route::get('/home/mechanical/psp', [HomeController::class, 'psp'])->name('psp');
    Route::get('/home/mechanical/il2rh', [HomeController::class, 'il2rh'])->name('il2rh');
    Route::get('/home/mechanical/kbn2', [HomeController::class, 'kbn2'])->name('kbn2');
    Route::get('/home/mechanical/k1-s', [HomeController::class, 'k1-s'])->name('k1-s');
    Route::get('/home/mechanical/hf-1', [HomeController::class, 'hf-1'])->name('hf-1');
    Route::get('/home/mechanical/cure', [HomeController::class, 'cure'])->name('cure');
    Route::get('/home/mechanical/apdd-1', [HomeController::class, 'apdd1'])->name('apdd-1');
    Route::get('/home/mechanical/inner_apdd1', [HomeController::class, 'inner_apdd1'])->name('inner_apdd1');
    Route::get('/home/mechanical/white_buff', [HomeController::class, 'white_buff'])->name('white_buff');
    Route::get('/home/mechanical/rim_flow', [HomeController::class, 'rim_flow'])->name('rim_flow');
    Route::get('/home/mechanical/uniformity', [HomeController::class, 'uniformity'])->name('uniformity');
    Route::get('/home/mechanical/hp_lrp', [HomeController::class, 'hp_lrp'])->name('hp_lrp');
    Route::get('/home/mechanical/lw_buff', [HomeController::class, 'lw_buff'])->name('lw_buff');
    Route::get('/home/mechanical/rework', [HomeController::class, 'rework'])->name('rework');
    Route::get('/home/mechanical/tire_repair', [HomeController::class, 'tire_repair'])->name('tire_repair');
    Route::get('/home/mechanical/furniture', [HomeController::class, 'furniture'])->name('furniture');
    Route::get('/home/mechanical/cement_house', [HomeController::class, 'cement_house'])->name('cement_house');



    //Electrical
    //Masterlist
    Route::get('/masterlist', [MasterListController::class, 'mstrlist'])->name('masterlist');
    Route::post('/add-masterlist', [MasterListController::class, 'upload'])->name('upload-mstr');
    Route::get('masterlist/{id}', [MasterListController::class, 'show'])->name('mstrlist.show');
    Route::get('/masterlist/delete/{id}', [MasterListController::class, 'delete'])->name('deleteML');





});

Route::group(['middleware' => ['auth', 'App\Http\Middleware\CekRole:admin']], function () {
    Route::get('/listuser', [UserController::class, 'index'])->name('listuser');
    Route::get('/history', [HomeController::class, 'history'])->name('history');

    Route::get('/adduser', [UserController::class, 'create'])->name('adduser');
    Route::post('/save-adduser', [UserController::class, 'store'])->name('save-adduser');
    Route::get('/deleteUser/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('edit-user');
    Route::put('/user/{user}', [UserController::class, 'update'])->name('update-user');

    Route::get('/addfolder', [FolderController::class, 'index'])->name('addfolder');
    Route::post('/addfolders', [FolderController::class, 'addFolder'])->name('folder');

});

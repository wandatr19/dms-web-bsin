<?php

use App\Http\Controllers\BanburyController;
use App\Http\Controllers\PolyfilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TreeBrController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MasterListController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StrainerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\PwDocController;
use App\Http\Controllers\CivilController;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\BexterController;
use App\Http\Controllers\QCTController;
use App\Http\Controllers\BeadController;
use App\Http\Controllers\MonowireController;
use App\Http\Controllers\RTBController;
use App\Http\Controllers\PCT1Controller;
use App\Http\Controllers\PCT2Controller;
use App\Http\Controllers\N1DCTController;
use App\Http\Controllers\CT8Controller;
use App\Http\Controllers\SRB1Controller;
use App\Http\Controllers\SRB2Controller;
use App\Http\Controllers\PSPController;
use App\Http\Controllers\IL2RHController;
use App\Http\Controllers\KBN2Controller;
use App\Http\Controllers\K1SController;
use App\Http\Controllers\HF1Controller;
use App\Http\Controllers\CureController;
use App\Http\Controllers\APPD1Controller;
use App\Http\Controllers\WB2Controller;
use App\Http\Controllers\RFController;
use App\Http\Controllers\UniformController;
use App\Http\Controllers\HPLRPController;
use App\Http\Controllers\LWBController;
use App\Http\Controllers\ReworkController;
use App\Http\Controllers\TRController;
use App\Http\Controllers\FurnController;
use App\Http\Controllers\CHController;

use App\Http\Controllers\Mech\Folder1Controller;
use App\Http\Controllers\Mech\Folder2Controller;
use App\Http\Controllers\Mech\Folder3Controller;
use App\Http\Controllers\Mech\Folder4Controller;
use App\Http\Controllers\Mech\Folder5Controller;
use App\Http\Controllers\Mech\Folder6Controller;
use App\Http\Controllers\Mech\Folder7Controller;
use App\Http\Controllers\Mech\Folder8Controller;
use App\Http\Controllers\Mech\Folder9Controller;
use App\Http\Controllers\Mech\Folder10Controller;
use App\Http\Controllers\Mech\Folder11Controller;
use App\Http\Controllers\Mech\Folder12Controller;
use App\Http\Controllers\Mech\Folder13Controller;
use App\Http\Controllers\Mech\Folder14Controller;
use App\Http\Controllers\Mech\Folder15Controller;
use App\Http\Controllers\Mech\Folder16Controller;
use App\Http\Controllers\Mech\Folder17Controller;
use App\Http\Controllers\Mech\Folder18Controller;
use App\Http\Controllers\Mech\Folder19Controller;
use App\Http\Controllers\Mech\Folder20Controller;
use App\Http\Controllers\Mech\Folder21Controller;
use App\Http\Controllers\Mech\Folder22Controller;
use App\Http\Controllers\Mech\Folder23Controller;
use App\Http\Controllers\Mech\Folder24Controller;
use App\Http\Controllers\Mech\Folder25Controller;
use App\Http\Controllers\Mech\Folder26Controller;
use App\Http\Controllers\Mech\Folder27Controller;
use App\Http\Controllers\Mech\Folder28Controller;
use App\Http\Controllers\Mech\Folder29Controller;
use App\Http\Controllers\Mech\Folder30Controller;




use App\Http\Controllers\Elect\EBanburyController;
use App\Http\Controllers\Elect\EStrainerController;
use App\Http\Controllers\Elect\EPolyfilmController;
use App\Http\Controllers\Elect\EBexterController;
use App\Http\Controllers\Elect\ECalenderController;
use App\Http\Controllers\Elect\EQCTController;
use App\Http\Controllers\Elect\E1NDCTController;
use App\Http\Controllers\Elect\E8CTController;
use App\Http\Controllers\Elect\EBeadController;
use App\Http\Controllers\Elect\EMonowireController;
use App\Http\Controllers\Elect\ERTBController;
use App\Http\Controllers\Elect\EPCT1Controller;
use App\Http\Controllers\Elect\EPCT2Controller;
use App\Http\Controllers\Elect\ESRB1Controller;
use App\Http\Controllers\Elect\ESRB2Controller;
use App\Http\Controllers\Elect\EPSPController;
use App\Http\Controllers\Elect\EIL2RHController;
use App\Http\Controllers\Elect\EKBN2Controller;
use App\Http\Controllers\Elect\EK1SController;
use App\Http\Controllers\Elect\EHF1Controller;
use App\Http\Controllers\Elect\ECureController;
use App\Http\Controllers\Elect\EAPPD1Controller;
use App\Http\Controllers\Elect\EInAPPD1Controller;
use App\Http\Controllers\Elect\EWB2Controller;
use App\Http\Controllers\Elect\ERFController;
use App\Http\Controllers\Elect\EUniformController;
use App\Http\Controllers\Elect\EHPLRPController;
use App\Http\Controllers\Elect\ELWBController;
use App\Http\Controllers\Elect\EReworkController;
use App\Http\Controllers\Elect\ETRController;
use App\Http\Controllers\Elect\EFurnController;
use App\Http\Controllers\Elect\ECHController;
use App\Http\Controllers\Elect\EFolder1Controller;
use App\Http\Controllers\Elect\EFolder2Controller;
use App\Http\Controllers\Elect\EFolder3Controller;
use App\Http\Controllers\Elect\EFolder4Controller;
use App\Http\Controllers\Elect\EFolder5Controller;
use App\Http\Controllers\Elect\EFolder6Controller;
use App\Http\Controllers\Elect\EFolder7Controller;
use App\Http\Controllers\Elect\EFolder8Controller;
use App\Http\Controllers\Elect\EFolder9Controller;
use App\Http\Controllers\Elect\EFolder10Controller;
use App\Http\Controllers\Elect\EFolder11Controller;
use App\Http\Controllers\Elect\EFolder12Controller;
use App\Http\Controllers\Elect\EFolder13Controller;
use App\Http\Controllers\Elect\EFolder14Controller;
use App\Http\Controllers\Elect\EFolder15Controller;
use App\Http\Controllers\Elect\EFolder16Controller;
use App\Http\Controllers\Elect\EFolder17Controller;
use App\Http\Controllers\Elect\EFolder18Controller;
use App\Http\Controllers\Elect\EFolder19Controller;
use App\Http\Controllers\Elect\EFolder20Controller;
use App\Http\Controllers\Elect\EFolder21Controller;
use App\Http\Controllers\Elect\EFolder22Controller;
use App\Http\Controllers\Elect\EFolder23Controller;
use App\Http\Controllers\Elect\EFolder24Controller;
use App\Http\Controllers\Elect\EFolder25Controller;
use App\Http\Controllers\Elect\EFolder26Controller;
use App\Http\Controllers\Elect\EFolder27Controller;
use App\Http\Controllers\Elect\EFolder28Controller;
use App\Http\Controllers\Elect\EFolder29Controller;
use App\Http\Controllers\Elect\EFolder30Controller;



use App\Http\Controllers\Area\Area6Controller;
use App\Http\Controllers\Area\Area7Controller;
use App\Http\Controllers\Area\Area8Controller;
use App\Http\Controllers\Area\Area9Controller;
use App\Http\Controllers\Area\Area10Controller;
use App\Http\Controllers\Area\Area11Controller;
use App\Http\Controllers\Area\Area12Controller;
use App\Http\Controllers\Area\Area13Controller;
use App\Http\Controllers\Area\Area14Controller;
use App\Http\Controllers\Area\Area15Controller;
use App\Http\Controllers\Area\Area16Controller;
use App\Http\Controllers\Area\Area17Controller;
use App\Http\Controllers\Area\Area18Controller;
use App\Http\Controllers\Area\Area19Controller;
use App\Http\Controllers\Area\Area20Controller;
use App\Http\Controllers\Area\Area21Controller;
use App\Http\Controllers\Area\Area22Controller;
use App\Http\Controllers\Area\Area23Controller;
use App\Http\Controllers\Area\Area24Controller;
use App\Http\Controllers\Area\Area25Controller;
use App\Http\Controllers\Area\Area26Controller;
use App\Http\Controllers\Area\Area27Controller;
use App\Http\Controllers\Area\Area28Controller;
use App\Http\Controllers\Area\Area29Controller;
use App\Http\Controllers\Area\Area30Controller;
use App\Http\Controllers\Area\Area31Controller;
use App\Http\Controllers\Area\Area32Controller;
use App\Http\Controllers\Area\Area33Controller;
use App\Http\Controllers\Area\Area34Controller;
use App\Http\Controllers\Area\Area35Controller;
use App\Http\Controllers\Area\Area36Controller;
use App\Http\Controllers\Area\Area37Controller;
use App\Http\Controllers\Area\Area38Controller;
use App\Http\Controllers\Area\Area39Controller;
use App\Http\Controllers\Area\Area40Controller;
use App\Http\Controllers\Area\Area41Controller;
use App\Http\Controllers\Area\Area42Controller;
use App\Http\Controllers\Area\Area43Controller;
use App\Http\Controllers\Area\Area44Controller;
use App\Http\Controllers\Area\Area45Controller;
use App\Http\Controllers\Area\Area46Controller;
use App\Http\Controllers\Area\Area47Controller;
use App\Http\Controllers\Area\Area48Controller;
use App\Http\Controllers\Area\Area49Controller;
use App\Http\Controllers\Area\Area50Controller; 








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

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::group(['middleware' => ['auth', 'App\Http\Middleware\CekRole:admin,user', 'history']], function () {
//     Route::get('/home/mechanical/banbury/{id}', [BanburyController::class, 'show'])->name('show-banbury');
// });

Route::group(['middleware' => ['auth','App\Http\Middleware\CekRole:admin,user']], function() {
    //Search
    Route::get('/search', [SearchController::class, 'search'])->name('searchdoc');
    Route::get('/search/{id}', [SearchController::class, 'open'])->name('open-doc');
    Route::get('/search/view/{id}', [SearchController::class, 'view'])->name('view-doc');
    Route::post('/search/pw/{id}', [SearchController::class, 'password'])->name('pw-search');

    Route::get('/treebranch', [TreeBrController::class, 'index'])->name('treebr');
    Route::get('/treebranch/view/{id}', [TreeBrController::class, 'view'])->name('view-tr');


    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/mechanical', [HomeController::class, 'mech'])->name('mech');
    Route::get('/electrical', [HomeController::class, 'elect'])->name('elect');

    //Mechanical Banbury
    Route::get('/mechanical/banbury', [BanburyController::class, 'index'])->name('banbury');
    Route::get('/mechanical/banbury/{id}', [BanburyController::class, 'open'])->name('open-banbury');
    Route::get('/mechanical/banbury/view/{id}', [BanburyController::class, 'view'])->name('view-banbury');
    Route::post('/mechanical/banbury/pw/{id}', [BanburyController::class, 'password'])->name('pw-banbury');
    Route::post('/mechanical/add-banbury', [BanburyController::class, 'upload'])->name('up-banbury');
    Route::get('/mechanical/banbury/delete/{id}', [BanburyController::class, 'delete'])->name('del-banbury');
    Route::get('/mechanical/banbury/deleteAll/{category}', [BanburyController::class, 'destroy'])->name('destroy-banbury');
    //Civil
    Route::get('/civil', [CivilController::class, 'index'])->name('civil');
    Route::post('/add-civil', [CivilController::class, 'upload'])->name('up-civil');
    Route::get('/civil/{id}', [CivilController::class, 'open'])->name('open-civil');
    Route::get('/civil/view/{id}', [CivilController::class, 'view'])->name('view-civil');
    Route::get('/civil/delete/{id}', [CivilController::class, 'delete'])->name('del-civil');
    Route::get('/civil/deleteAll/{category}', [CivilController::class, 'destroy'])->name('destroy-civil');
    Route::post('/civil/pw/{id}', [CivilController::class, 'password'])->name('pw-cv');
    //Strainer
    Route::get('/mechanical/strainer', [StrainerController::class, 'index'])->name('strainer');
    Route::post('/mechanical/add-strainer', [StrainerController::class, 'upload'])->name('up-strainer');
    Route::get('/mechanical/strainer/delete/{id}', [StrainerController::class, 'delete'])->name('del-strainer');
    Route::get('/mechanical/strainer/{id}', [StrainerController::class, 'open'])->name('open-strainer');
    Route::get('/mechanical/strainer/view/{id}', [StrainerController::class, 'view'])->name('view-strainer');
    Route::get('/mechanical/strainer/deleteAll/{category}', [StrainerController::class, 'destroy'])->name('destroy-strainer');
    Route::post('/mechanical/strainer/pw/{id}', [StrainerController::class, 'password'])->name('pw-strainer');
    //Polyfilm
    Route::get('/mechanical/polyfilm', [PolyfilmController::class, 'index'])->name('polyfilm');
    Route::post('/mechanical/add-polyfilm', [PolyfilmController::class, 'upload'])->name('up-polyfilm');
    Route::get('/mechanical/polyfilm/{id}', [PolyfilmController::class, 'open'])->name('open-polyfilm');
    Route::get('/mechanical/polyfilm/view/{id}', [PolyfilmController::class, 'view'])->name('view-polyfilm');
    Route::get('/mechanical/polyfilm/delete/{id}', [PolyfilmController::class, 'delete'])->name('del-polyfilm');
    Route::get('/mechanical/polyfilm/deleteAll/{category}', [PolyfilmController::class, 'destroy'])->name('destroy-polyfilm');
    Route::post('/mechanical/polyfilm/pw/{id}', [PolyfilmController::class, 'password'])->name('pw-polyfilm');
    //Utility
    Route::get('/utility', [UtilityController::class, 'index'])->name('util');
    Route::post('/add-utility', [UtilityController::class, 'upload'])->name('up-util');
    Route::get('/utility/{id}', [UtilityController::class, 'open'])->name('open-util');
    Route::get('/utility/view/{id}', [UtilityController::class, 'view'])->name('view-util');
    Route::get('/utility/delete/{id}', [UtilityController::class, 'delete'])->name('del-util');
    Route::get('/utility/deleteAll/{category}', [UtilityController::class, 'destroy'])->name('destroy-util');
    Route::post('/utility/pw/{id}', [UtilityController::class, 'password'])->name('pw-util');
    //Others
    Route::get('/others', [OthersController::class, 'index'])->name('oth');
    Route::post('/add-others', [OthersController::class, 'upload'])->name('up-oth');
    Route::get('/others/{id}', [OthersController::class, 'open'])->name('open-oth');
    Route::get('/others/view/{id}', [OthersController::class, 'view'])->name('view-oth');
    Route::get('/others/delete/{id}', [OthersController::class, 'delete'])->name('del-oth');
    Route::get('/others/deleteAll/{category}', [OthersController::class, 'destroy'])->name('destroy-oth');
    Route::post('/others/pw/{id}', [OthersController::class, 'password'])->name('pw-oth');
    //Calender
    Route::get('/mechanical/calender', [CalenderController::class, 'index'])->name('calender');
    Route::post('/mechanical/add-calender', [CalenderController::class, 'upload'])->name('up-calender');
    Route::get('/mechanical/calender/{id}', [CalenderController::class, 'open'])->name('open-calender');
    Route::get('/mechanical/calender/view/{id}', [CalenderController::class, 'view'])->name('view-calender');
    Route::get('/mechanical/calender/delete/{id}', [CalenderController::class, 'delete'])->name('del-calender');
    Route::get('/mechanical/calender/deleteAll/{category}', [CalenderController::class, 'destroy'])->name('destroy-calender');
    Route::post('/mechanical/calender/pw/{id}', [CalenderController::class, 'password'])->name('pw-calender');
    //Bexter
    Route::get('/mechanical/bexter', [BexterController::class, 'index'])->name('bexter');
    Route::post('/mechanical/add-bexter', [BexterController::class, 'upload'])->name('up-bexter');
    Route::get('/mechanical/bexter/{id}', [BexterController::class, 'open'])->name('open-bexter');
    Route::get('/mechanical/bexter/view/{id}', [BexterController::class, 'view'])->name('view-bexter');
    Route::get('/mechanical/bexter/delete/{id}', [BexterController::class, 'delete'])->name('del-bexter');
    Route::get('/mechanical/bexter/deleteAll/{category}', [BexterController::class, 'destroy'])->name('destroy-bexter');
    Route::post('/mechanical/bexter/pw/{id}', [BexterController::class, 'password'])->name('pw-bexter');
    //QCT
    Route::get('/mechanical/QCT', [QCTController::class, 'index'])->name('QCT');
    Route::get('/mechanical/QCT/{id}', [QCTController::class, 'open'])->name('open-QCT');
    Route::get('/mechanical/QCT/view/{id}', [QCTController::class, 'view'])->name('view-QCT');
    Route::post('/mechanical/QCT/pw/{id}', [QCTController::class, 'password'])->name('pw-QCT');
    Route::post('/mechanical/add-QCT', [QCTController::class, 'upload'])->name('up-QCT');
    Route::get('/mechanical/QCT/delete/{id}', [QCTController::class, 'delete'])->name('del-QCT');
    Route::get('/mechanical/QCT/deleteAll/{category}', [QCTController::class, 'destroy'])->name('destroy-QCT');
    //Bead
    Route::get('/mechanical/bead', [BeadController::class, 'index'])->name('bead');
    Route::get('/mechanical/bead/{id}', [BeadController::class, 'open'])->name('open-bead');
    Route::get('/mechanical/bead/view/{id}', [BeadController::class, 'view'])->name('view-bead');
    Route::post('/mechanical/bead/pw/{id}', [BeadController::class, 'password'])->name('pw-bead');
    Route::post('/mechanical/add-bead', [BeadController::class, 'upload'])->name('up-bead');
    Route::get('/mechanical/bead/delete/{id}', [BeadController::class, 'delete'])->name('del-bead');
    Route::get('/mechanical/bead/deleteAll/{category}', [BeadController::class, 'destroy'])->name('destroy-bead');
    //Monowire
    Route::get('/mechanical/monowire', [MonowireController::class, 'index'])->name('monowire');
    Route::get('/mechanical/monowire/{id}', [MonowireController::class, 'open'])->name('open-monowire');
    Route::get('/mechanical/monowire/view/{id}', [MonowireController::class, 'view'])->name('view-monowire');
    Route::post('/mechanical/monowire/pw/{id}', [MonowireController::class, 'password'])->name('pw-monowire');
    Route::post('/mechanical/add-monowire', [MonowireController::class, 'upload'])->name('up-monowire');
    Route::get('/mechanical/monowire/delete/{id}', [MonowireController::class, 'delete'])->name('del-monowire');
    Route::get('/mechanical/monowire/deleteAll/{category}', [MonowireController::class, 'destroy'])->name('destroy-monowire');
    //RTB
    Route::get('/mechanical/RTB', [RTBController::class, 'index'])->name('RTB');
    Route::get('/mechanical/RTB/{id}', [RTBController::class, 'open'])->name('open-RTB');
    Route::get('/mechanical/RTB/view/{id}', [RTBController::class, 'view'])->name('view-RTB');
    Route::post('/mechanical/RTB/pw/{id}', [RTBController::class, 'password'])->name('pw-RTB');
    Route::post('/mechanical/add-RTB', [RTBController::class, 'upload'])->name('up-RTB');
    Route::get('/mechanical/RTB/delete/{id}', [RTBController::class, 'delete'])->name('del-RTB');
    Route::get('/mechanical/RTB/deleteAll/{category}', [RTBController::class, 'destroy'])->name('destroy-RTB');
    //PCT1
    Route::get('/mechanical/PCT1', [PCT1Controller::class, 'index'])->name('PCT1');
    Route::get('/mechanical/PCT1/{id}', [PCT1Controller::class, 'open'])->name('open-PCT1');
    Route::get('/mechanical/PCT1/view/{id}', [PCT1Controller::class, 'view'])->name('view-PCT1');
    Route::post('/mechanical/PCT1/pw/{id}', [PCT1Controller::class, 'password'])->name('pw-PCT1');
    Route::post('/mechanical/add-PCT1', [PCT1Controller::class, 'upload'])->name('up-PCT1');
    Route::get('/mechanical/PCT1/delete/{id}', [PCT1Controller::class, 'delete'])->name('del-PCT1');
    Route::get('/mechanical/PCT1/deleteAll/{category}', [PCT1Controller::class, 'destroy'])->name('destroy-PCT1');
    //PCT2
    Route::get('/mechanical/PCT2', [PCT2Controller::class, 'index'])->name('PCT2');
    Route::get('/mechanical/PCT2/{id}', [PCT2Controller::class, 'open'])->name('open-PCT2');
    Route::get('/mechanical/PCT2/view/{id}', [PCT2Controller::class, 'view'])->name('view-PCT2');
    Route::post('/mechanical/PCT2/pw/{id}', [PCT2Controller::class, 'password'])->name('pw-PCT2');
    Route::post('/mechanical/add-PCT2', [PCT2Controller::class, 'upload'])->name('up-PCT2');
    Route::get('/mechanical/PCT2/delete/{id}', [PCT2Controller::class, 'delete'])->name('del-PCT2');
    Route::get('/mechanical/PCT2/deleteAll/{category}', [PCT2Controller::class, 'destroy'])->name('destroy-PCT2');
    //SRB1
    Route::get('/mechanical/SRB1', [SRB1Controller::class, 'index'])->name('SRB1');
    Route::get('/mechanical/SRB1/{id}', [SRB1Controller::class, 'open'])->name('open-SRB1');
    Route::get('/mechanical/SRB1/view/{id}', [SRB1Controller::class, 'view'])->name('view-SRB1');
    Route::post('/mechanical/SRB1/pw/{id}', [SRB1Controller::class, 'password'])->name('pw-SRB1');
    Route::post('/mechanical/add-SRB1', [SRB1Controller::class, 'upload'])->name('up-SRB1');
    Route::get('/mechanical/SRB1/delete/{id}', [SRB1Controller::class, 'delete'])->name('del-SRB1');
    Route::get('/mechanical/SRB1/deleteAll/{category}', [SRB1Controller::class, 'destroy'])->name('destroy-SRB1');

    //SRB2
    Route::get('/mechanical/SRB2', [SRB2Controller::class, 'index'])->name('SRB2');
    Route::get('/mechanical/SRB2/{id}', [SRB2Controller::class, 'open'])->name('open-SRB2');
    Route::get('/mechanical/SRB2/view/{id}', [SRB2Controller::class, 'view'])->name('view-SRB2');
    Route::post('/mechanical/SRB2/pw/{id}', [SRB2Controller::class, 'password'])->name('pw-SRB2');
    Route::post('/mechanical/add-SRB2', [SRB2Controller::class, 'upload'])->name('up-SRB2');
    Route::get('/mechanical/SRB2/delete/{id}', [SRB2Controller::class, 'delete'])->name('del-SRB2');
    Route::get('/mechanical/SRB2/deleteAll/{category}', [SRB2Controller::class, 'destroy'])->name('destroy-SRB2');

    //PSP
    Route::get('/mechanical/PSP', [PSPController::class, 'index'])->name('PSP');
    Route::get('/mechanical/PSP/{id}', [PSPController::class, 'open'])->name('open-PSP');
    Route::get('/mechanical/PSP/view/{id}', [PSPController::class, 'view'])->name('view-PSP');
    Route::post('/mechanical/PSP/pw/{id}', [PSPController::class, 'password'])->name('pw-PSP');
    Route::post('/mechanical/add-PSP', [PSPController::class, 'upload'])->name('up-PSP');
    Route::get('/mechanical/PSP/delete/{id}', [PSPController::class, 'delete'])->name('del-PSP');
    Route::get('/mechanical/PSP/deleteAll/{category}', [PSPController::class, 'destroy'])->name('destroy-PSP');
    //IL2RH
    Route::get('/mechanical/IL2RH', [IL2RHController::class, 'index'])->name('IL2RH');
    Route::get('/mechanical/IL2RH/{id}', [IL2RHController::class, 'open'])->name('open-IL2RH');
    Route::get('/mechanical/IL2RH/view/{id}', [IL2RHController::class, 'view'])->name('view-IL2RH');
    Route::post('/mechanical/IL2RH/pw/{id}', [IL2RHController::class, 'password'])->name('pw-IL2RH');
    Route::post('/mechanical/add-IL2RH', [IL2RHController::class, 'upload'])->name('up-IL2RH');
    Route::get('/mechanical/IL2RH/delete/{id}', [IL2RHController::class, 'delete'])->name('del-IL2RH');
    Route::get('/mechanical/IL2RH/deleteAll/{category}', [IL2RHController::class, 'destroy'])->name('destroy-IL2RH');
    //KBN2
    Route::get('/mechanical/KBN2', [KBN2Controller::class, 'index'])->name('KBN2');
    Route::get('/mechanical/KBN2/{id}', [KBN2Controller::class, 'open'])->name('open-KBN2');
    Route::get('/mechanical/KBN2/view/{id}', [KBN2Controller::class, 'view'])->name('view-KBN2');
    Route::post('/mechanical/KBN2/pw/{id}', [KBN2Controller::class, 'password'])->name('pw-KBN2');
    Route::post('/mechanical/add-KBN2', [KBN2Controller::class, 'upload'])->name('up-KBN2');
    Route::get('/mechanical/KBN2/delete/{id}', [KBN2Controller::class, 'delete'])->name('del-KBN2');
    Route::get('/mechanical/KBN2/deleteAll/{category}', [KBN2Controller::class, 'destroy'])->name('destroy-KBN2');
    //K1S
    Route::get('/mechanical/K1S', [K1SController::class, 'index'])->name('K1S');
    Route::get('/mechanical/K1S/{id}', [K1SController::class, 'open'])->name('open-K1S');
    Route::get('/mechanical/K1S/view/{id}', [K1SController::class, 'view'])->name('view-K1S');
    Route::post('/mechanical/K1S/pw/{id}', [K1SController::class, 'password'])->name('pw-K1S');
    Route::post('/mechanical/add-K1S', [K1SController::class, 'upload'])->name('up-K1S');
    Route::get('/mechanical/K1S/delete/{id}', [K1SController::class, 'delete'])->name('del-K1S');
    Route::get('/mechanical/K1S/deleteAll/{category}', [K1SController::class, 'destroy'])->name('destroy-K1S');
    //HF1
    Route::get('/mechanical/HF1', [HF1Controller::class, 'index'])->name('HF1');
    Route::get('/mechanical/HF1/{id}', [HF1Controller::class, 'open'])->name('open-HF1');
    Route::get('/mechanical/HF1/view/{id}', [HF1Controller::class, 'view'])->name('view-HF1');
    Route::post('/mechanical/HF1/pw/{id}', [HF1Controller::class, 'password'])->name('pw-HF1');
    Route::post('/mechanical/add-HF1', [HF1Controller::class, 'upload'])->name('up-HF1');
    Route::get('/mechanical/HF1/delete/{id}', [HF1Controller::class, 'delete'])->name('del-HF1');
    Route::get('/mechanical/HF1/deleteAll/{category}', [HF1Controller::class, 'destroy'])->name('destroy-HF1');
    //KBN2
    Route::get('/mechanical/cure', [CureController::class, 'index'])->name('cure');
    Route::get('/mechanical/cure/{id}', [CureController::class, 'open'])->name('open-cure');
    Route::get('/mechanical/cure/view/{id}', [CureController::class, 'view'])->name('view-cure');
    Route::post('/mechanical/cure/pw/{id}', [CureController::class, 'password'])->name('pw-cure');
    Route::post('/mechanical/add-cure', [CureController::class, 'upload'])->name('up-cure');
    Route::get('/mechanical/cure/delete/{id}', [CureController::class, 'delete'])->name('del-cure');
    Route::get('/mechanical/cure/deleteAll/{category}', [CureController::class, 'destroy'])->name('destroy-cure');
    //APPD1
    Route::get('/mechanical/APPD1', [APPD1Controller::class, 'index'])->name('APPD1');
    Route::get('/mechanical/APPD1/{id}', [APPD1Controller::class, 'open'])->name('open-APPD1');
    Route::get('/mechanical/APPD1/view/{id}', [APPD1Controller::class, 'view'])->name('view-APPD1');
    Route::post('/mechanical/APPD1/pw/{id}', [APPD1Controller::class, 'password'])->name('pw-APPD1');
    Route::post('/mechanical/add-APPD1', [APPD1Controller::class, 'upload'])->name('up-APPD1');
    Route::get('/mechanical/APPD1/delete/{id}', [APPD1Controller::class, 'delete'])->name('del-APPD1');
    Route::get('/mechanical/APPD1/deleteAll/{category}', [APPD1Controller::class, 'destroy'])->name('destroy-APPD1');
    //InAPPD1
    Route::get('/mechanical/InAPPD1', [InAPPD1Controller::class, 'index'])->name('InAPPD1');
    Route::get('/mechanical/InAPPD1/{id}', [InAPPD1Controller::class, 'open'])->name('open-InAPPD1');
    Route::get('/mechanical/InAPPD1/view/{id}', [InAPPD1Controller::class, 'view'])->name('view-InAPPD1');
    Route::post('/mechanical/InAPPD1/pw/{id}', [InAPPD1Controller::class, 'password'])->name('pw-InAPPD1');
    Route::post('/mechanical/add-InAPPD1', [InAPPD1Controller::class, 'upload'])->name('up-InAPPD1');
    Route::get('/mechanical/InAPPD1/delete/{id}', [InAPPD1Controller::class, 'delete'])->name('del-InAPPD1');
    Route::get('/mechanical/InAPPD1/deleteAll/{category}', [InAPPD1Controller::class, 'destroy'])->name('destroy-InAPPD1');

    //WB2
    Route::get('/mechanical/WB2', [WB2Controller::class, 'index'])->name('WB2');
    Route::get('/mechanical/WB2/{id}', [WB2Controller::class, 'open'])->name('open-WB2');
    Route::get('/mechanical/WB2/view/{id}', [WB2Controller::class, 'view'])->name('view-WB2');
    Route::post('/mechanical/WB2/pw/{id}', [WB2Controller::class, 'password'])->name('pw-WB2');
    Route::post('/mechanical/add-WB2', [WB2Controller::class, 'upload'])->name('up-WB2');
    Route::get('/mechanical/WB2/delete/{id}', [WB2Controller::class, 'delete'])->name('del-WB2');
    Route::get('/mechanical/WB2/deleteAll/{category}', [WB2Controller::class, 'destroy'])->name('destroy-WB2');
    //RF
    Route::get('/mechanical/RF', [RFController::class, 'index'])->name('RF');
    Route::get('/mechanical/RF/{id}', [RFController::class, 'open'])->name('open-RF');
    Route::get('/mechanical/RF/view/{id}', [RFController::class, 'view'])->name('view-RF');
    Route::post('/mechanical/RF/pw/{id}', [RFController::class, 'password'])->name('pw-RF');
    Route::post('/mechanical/add-RF', [RFController::class, 'upload'])->name('up-RF');
    Route::get('/mechanical/RF/delete/{id}', [RFController::class, 'delete'])->name('del-RF');
    Route::get('/mechanical/RF/deleteAll/{category}', [RFController::class, 'destroy'])->name('destroy-RF');

    //Uniform
    Route::get('/mechanical/Uniform', [UniformController::class, 'index'])->name('Uniform');
    Route::get('/mechanical/Uniform/{id}', [UniformController::class, 'open'])->name('open-Uniform');
    Route::get('/mechanical/Uniform/view/{id}', [UniformController::class, 'view'])->name('view-Uniform');
    Route::post('/mechanical/Uniform/pw/{id}', [UniformController::class, 'password'])->name('pw-Uniform');
    Route::post('/mechanical/add-Uniform', [UniformController::class, 'upload'])->name('up-Uniform');
    Route::get('/mechanical/Uniform/delete/{id}', [UniformController::class, 'delete'])->name('del-Uniform');
    Route::get('/mechanical/Uniform/deleteAll/{category}', [UniformController::class, 'destroy'])->name('destroy-Uniform');
    //HPLRP
    Route::get('/mechanical/HPLRP', [HPLRPController::class, 'index'])->name('HPLRP');
    Route::get('/mechanical/HPLRP/{id}', [HPLRPController::class, 'open'])->name('open-HPLRP');
    Route::get('/mechanical/HPLRP/view/{id}', [HPLRPController::class, 'view'])->name('view-HPLRP');
    Route::post('/mechanical/HPLRP/pw/{id}', [HPLRPController::class, 'password'])->name('pw-HPLRP');
    Route::post('/mechanical/add-HPLRP', [HPLRPController::class, 'upload'])->name('up-HPLRP');
    Route::get('/mechanical/HPLRP/delete/{id}', [HPLRPController::class, 'delete'])->name('del-HPLRP');
    Route::get('/mechanical/HPLRP/deleteAll/{category}', [HPLRPController::class, 'destroy'])->name('destroy-HPLRP');
    //LWB
    Route::get('/mechanical/LWB', [LWBController::class, 'index'])->name('LWB');
    Route::get('/mechanical/LWB/{id}', [LWBController::class, 'open'])->name('open-LWB');
    Route::get('/mechanical/LWB/view/{id}', [LWBController::class, 'view'])->name('view-LWB');
    Route::post('/mechanical/LWB/pw/{id}', [LWBController::class, 'password'])->name('pw-LWB');
    Route::post('/mechanical/add-LWB', [LWBController::class, 'upload'])->name('up-LWB');
    Route::get('/mechanical/LWB/delete/{id}', [LWBController::class, 'delete'])->name('del-LWB');
    Route::get('/mechanical/LWB/deleteAll/{category}', [LWBController::class, 'destroy'])->name('destroy-LWB');
    //Rework
    Route::get('/mechanical/Rework', [ReworkController::class, 'index'])->name('Rework');
    Route::get('/mechanical/Rework/{id}', [ReworkController::class, 'open'])->name('open-Rework');
    Route::get('/mechanical/Rework/view/{id}', [ReworkController::class, 'view'])->name('view-Rework');
    Route::post('/mechanical/Rework/pw/{id}', [ReworkController::class, 'password'])->name('pw-Rework');
    Route::post('/mechanical/add-Rework', [ReworkController::class, 'upload'])->name('up-Rework');
    Route::get('/mechanical/Rework/delete/{id}', [ReworkController::class, 'delete'])->name('del-Rework');
    Route::get('/mechanical/Rework/deleteAll/{category}', [ReworkController::class, 'destroy'])->name('destroy-Rework');

    //TR
    Route::get('/mechanical/TR', [TRController::class, 'index'])->name('TR');
    Route::get('/mechanical/TR/{id}', [TRController::class, 'open'])->name('open-TR');
    Route::get('/mechanical/TR/view/{id}', [TRController::class, 'view'])->name('view-TR');
    Route::post('/mechanical/TR/pw/{id}', [TRController::class, 'password'])->name('pw-TR');
    Route::post('/mechanical/add-TR', [TRController::class, 'upload'])->name('up-TR');
    Route::get('/mechanical/TR/delete/{id}', [TRController::class, 'delete'])->name('del-TR');
    Route::get('/mechanical/TR/deleteAll/{category}', [TRController::class, 'destroy'])->name('destroy-TR');
    //Furn
    Route::get('/mechanical/Furn', [FurnController::class, 'index'])->name('Furn');
    Route::get('/mechanical/Furn/{id}', [FurnController::class, 'open'])->name('open-Furn');
    Route::get('/mechanical/Furn/view/{id}', [FurnController::class, 'view'])->name('view-Furn');
    Route::post('/mechanical/Furn/pw/{id}', [FurnController::class, 'password'])->name('pw-Furn');
    Route::post('/mechanical/add-Furn', [FurnController::class, 'upload'])->name('up-Furn');
    Route::get('/mechanical/Furn/delete/{id}', [FurnController::class, 'delete'])->name('del-Furn');
    Route::get('/mechanical/Furn/deleteAll/{category}', [FurnController::class, 'destroy'])->name('destroy-Furn');
    //CH
    Route::get('/mechanical/CH', [CHController::class, 'index'])->name('CH');
    Route::get('/mechanical/CH/{id}', [CHController::class, 'open'])->name('open-CH');
    Route::get('/mechanical/CH/view/{id}', [CHController::class, 'view'])->name('view-CH');
    Route::post('/mechanical/CH/pw/{id}', [CHController::class, 'password'])->name('pw-CH');
    Route::post('/mechanical/add-CH', [CHController::class, 'upload'])->name('up-CH');
    Route::get('/mechanical/CH/delete/{id}', [CHController::class, 'delete'])->name('del-CH');
    Route::get('/mechanical/CH/deleteAll/{category}', [CHController::class, 'destroy'])->name('destroy-CH');

    Route::get('/mechanical/N1DCT', [N1DCTController::class, 'index'])->name('N1DCT');
    Route::get('/mechanical/N1DCT/{id}', [N1DCTController::class, 'open'])->name('open-N1DCT');
    Route::get('/mechanical/N1DCT/view/{id}', [N1DCTController::class, 'view'])->name('view-N1DCT');
    Route::post('/mechanical/N1DCT/pw/{id}', [N1DCTController::class, 'password'])->name('pw-N1DCT');
    Route::post('/mechanical/add-N1DCT', [N1DCTController::class, 'upload'])->name('up-N1DCT');
    Route::get('/mechanical/N1DCT/delete/{id}', [N1DCTController::class, 'delete'])->name('del-N1DCT');
    Route::get('/mechanical/N1DCT/deleteAll/{category}', [N1DCTController::class, 'destroy'])->name('destroy-N1DCT');

    Route::get('/mechanical/CT8', [CT8Controller::class, 'index'])->name('CT8');
    Route::get('/mechanical/CT8/{id}', [CT8Controller::class, 'open'])->name('open-CT8');
    Route::get('/mechanical/CT8/view/{id}', [CT8Controller::class, 'view'])->name('view-CT8');
    Route::post('/mechanical/CT8/pw/{id}', [CT8Controller::class, 'password'])->name('pw-CT8');
    Route::post('/mechanical/add-CT8', [CT8Controller::class, 'upload'])->name('up-CT8');
    Route::get('/mechanical/CT8/delete/{id}', [CT8Controller::class, 'delete'])->name('del-CT8');
    Route::get('/mechanical/CT8/deleteAll/{category}', [CT8Controller::class, 'destroy'])->name('destroy-CT8');
    //Folder1
    Route::get('/mechanical/Folder1', [Folder1Controller::class, 'index'])->name('Folder1');
    Route::get('/mechanical/Folder1/{id}', [Folder1Controller::class, 'open'])->name('open-Folder1');
    Route::get('/mechanical/Folder1/view/{id}', [Folder1Controller::class, 'view'])->name('view-Folder1');
    Route::post('/mechanical/Folder1/pw/{id}', [Folder1Controller::class, 'password'])->name('pw-Folder1');
    Route::post('/mechanical/add-Folder1', [Folder1Controller::class, 'upload'])->name('up-Folder1');
    Route::get('/mechanical/Folder1/delete/{id}', [Folder1Controller::class, 'delete'])->name('del-Folder1');
    Route::get('/mechanical/Folder1/deleteAll/{category}', [Folder1Controller::class, 'destroy'])->name('destroy-Folder1');

    Route::get('/mechanical/Folder2', [Folder2Controller::class, 'index'])->name('Folder2');
    Route::get('/mechanical/Folder2/{id}', [Folder2Controller::class, 'open'])->name('open-Folder2');
    Route::get('/mechanical/Folder2/view/{id}', [Folder2Controller::class, 'view'])->name('view-Folder2');
    Route::post('/mechanical/Folder2/pw/{id}', [Folder2Controller::class, 'password'])->name('pw-Folder2');
    Route::post('/mechanical/add-Folder2', [Folder2Controller::class, 'upload'])->name('up-Folder2');
    Route::get('/mechanical/Folder2/delete/{id}', [Folder2Controller::class, 'delete'])->name('del-Folder2');
    Route::get('/mechanical/Folder2/deleteAll/{category}', [Folder2Controller::class, 'destroy'])->name('destroy-Folder2');

    Route::get('/mechanical/Folder3', [Folder3Controller::class, 'index'])->name('Folder3');
    Route::get('/mechanical/Folder3/{id}', [Folder3Controller::class, 'open'])->name('open-Folder3');
    Route::get('/mechanical/Folder3/view/{id}', [Folder3Controller::class, 'view'])->name('view-Folder3');
    Route::post('/mechanical/Folder3/pw/{id}', [Folder3Controller::class, 'password'])->name('pw-Folder3');
    Route::post('/mechanical/add-Folder3', [Folder3Controller::class, 'upload'])->name('up-Folder3');
    Route::get('/mechanical/Folder3/delete/{id}', [Folder3Controller::class, 'delete'])->name('del-Folder3');
    Route::get('/mechanical/Folder3/deleteAll/{category}', [Folder3Controller::class, 'destroy'])->name('destroy-Folder3');
    //Folder4
    Route::get('/mechanical/Folder4', [Folder4Controller::class, 'index'])->name('Folder4');
    Route::get('/mechanical/Folder4/{id}', [Folder4Controller::class, 'open'])->name('open-Folder4');
    Route::get('/mechanical/Folder4/view/{id}', [Folder4Controller::class, 'view'])->name('view-Folder4');
    Route::post('/mechanical/Folder4/pw/{id}', [Folder4Controller::class, 'password'])->name('pw-Folder4');
    Route::post('/mechanical/add-Folder4', [Folder4Controller::class, 'upload'])->name('up-Folder4');
    Route::get('/mechanical/Folder4/delete/{id}', [Folder4Controller::class, 'delete'])->name('del-Folder4');
    Route::get('/mechanical/Folder4/deleteAll/{category}', [Folder4Controller::class, 'destroy'])->name('destroy-Folder4');
    //Folder5
    Route::get('/mechanical/Folder5', [Folder5Controller::class, 'index'])->name('Folder5');
    Route::get('/mechanical/Folder5/{id}', [Folder5Controller::class, 'open'])->name('open-Folder5');
    Route::get('/mechanical/Folder5/view/{id}', [Folder5Controller::class, 'view'])->name('view-Folder5');
    Route::post('/mechanical/Folder5/pw/{id}', [Folder5Controller::class, 'password'])->name('pw-Folder5');
    Route::post('/mechanical/add-Folder5', [Folder5Controller::class, 'upload'])->name('up-Folder5');
    Route::get('/mechanical/Folder5/delete/{id}', [Folder5Controller::class, 'delete'])->name('del-Folder5');
    Route::get('/mechanical/Folder5/deleteAll/{category}', [Folder5Controller::class, 'destroy'])->name('destroy-Folder5');
    //Folder6
    Route::get('/mechanical/Folder6', [Folder6Controller::class, 'index'])->name('Folder6');
    Route::get('/mechanical/Folder6/{id}', [Folder6Controller::class, 'open'])->name('open-Folder6');
    Route::get('/mechanical/Folder6/view/{id}', [Folder6Controller::class, 'view'])->name('view-Folder6');
    Route::post('/mechanical/Folder6/pw/{id}', [Folder6Controller::class, 'password'])->name('pw-Folder6');
    Route::post('/mechanical/add-Folder6', [Folder6Controller::class, 'upload'])->name('up-Folder6');
    Route::get('/mechanical/Folder6/delete/{id}', [Folder6Controller::class, 'delete'])->name('del-Folder6');
    Route::get('/mechanical/Folder6/deleteAll/{category}', [Folder6Controller::class, 'destroy'])->name('destroy-Folder6');
    //Folder7
    Route::get('/mechanical/Folder7', [Folder7Controller::class, 'index'])->name('Folder7');
    Route::get('/mechanical/Folder7/{id}', [Folder7Controller::class, 'open'])->name('open-Folder7');
    Route::get('/mechanical/Folder7/view/{id}', [Folder7Controller::class, 'view'])->name('view-Folder7');
    Route::post('/mechanical/Folder7/pw/{id}', [Folder7Controller::class, 'password'])->name('pw-Folder7');
    Route::post('/mechanical/add-Folder7', [Folder7Controller::class, 'upload'])->name('up-Folder7');
    Route::get('/mechanical/Folder7/delete/{id}', [Folder7Controller::class, 'delete'])->name('del-Folder7');
    Route::get('/mechanical/Folder7/deleteAll/{category}', [Folder7Controller::class, 'destroy'])->name('destroy-Folder7');
    //Folder8
    Route::get('/mechanical/Folder8', [Folder8Controller::class, 'index'])->name('Folder8');
    Route::get('/mechanical/Folder8/{id}', [Folder8Controller::class, 'open'])->name('open-Folder8');
    Route::get('/mechanical/Folder8/view/{id}', [Folder8Controller::class, 'view'])->name('view-Folder8');
    Route::post('/mechanical/Folder8/pw/{id}', [Folder8Controller::class, 'password'])->name('pw-Folder8');
    Route::post('/mechanical/add-Folder8', [Folder8Controller::class, 'upload'])->name('up-Folder8');
    Route::get('/mechanical/Folder8/delete/{id}', [Folder8Controller::class, 'delete'])->name('del-Folder8');
    Route::get('/mechanical/Folder8/deleteAll/{category}', [Folder8Controller::class, 'destroy'])->name('destroy-Folder8');
    //Folder9
    Route::get('/mechanical/Folder9', [Folder9Controller::class, 'index'])->name('Folder9');
    Route::get('/mechanical/Folder9/{id}', [Folder9Controller::class, 'open'])->name('open-Folder9');
    Route::get('/mechanical/Folder9/view/{id}', [Folder9Controller::class, 'view'])->name('view-Folder9');
    Route::post('/mechanical/Folder9/pw/{id}', [Folder9Controller::class, 'password'])->name('pw-Folder9');
    Route::post('/mechanical/add-Folder9', [Folder9Controller::class, 'upload'])->name('up-Folder9');
    Route::get('/mechanical/Folder9/delete/{id}', [Folder9Controller::class, 'delete'])->name('del-Folder9');
    Route::get('/mechanical/Folder9/deleteAll/{category}', [Folder9Controller::class, 'destroy'])->name('destroy-Folder9');
    //Folder10
    Route::get('/mechanical/Folder10', [Folder10Controller::class, 'index'])->name('Folder10');
    Route::get('/mechanical/Folder10/{id}', [Folder10Controller::class, 'open'])->name('open-Folder10');
    Route::get('/mechanical/Folder10/view/{id}', [Folder10Controller::class, 'view'])->name('view-Folder10');
    Route::post('/mechanical/Folder10/pw/{id}', [Folder10Controller::class, 'password'])->name('pw-Folder10');
    Route::post('/mechanical/add-Folder10', [Folder10Controller::class, 'upload'])->name('up-Folder10');
    Route::get('/mechanical/Folder10/delete/{id}', [Folder10Controller::class, 'delete'])->name('del-Folder10');
    Route::get('/mechanical/Folder10/deleteAll/{category}', [Folder10Controller::class, 'destroy'])->name('destroy-Folder10');
    //Folder11
    Route::get('/mechanical/Folder11', [Folder11Controller::class, 'index'])->name('Folder11');
    Route::get('/mechanical/Folder11/{id}', [Folder11Controller::class, 'open'])->name('open-Folder11');
    Route::get('/mechanical/Folder11/view/{id}', [Folder11Controller::class, 'view'])->name('view-Folder11');
    Route::post('/mechanical/Folder11/pw/{id}', [Folder11Controller::class, 'password'])->name('pw-Folder11');
    Route::post('/mechanical/add-Folder11', [Folder11Controller::class, 'upload'])->name('up-Folder11');
    Route::get('/mechanical/Folder11/delete/{id}', [Folder11Controller::class, 'delete'])->name('del-Folder11');
    Route::get('/mechanical/Folder11/deleteAll/{category}', [Folder11Controller::class, 'destroy'])->name('destroy-Folder11');
    //Folder12
    Route::get('/mechanical/Folder12', [Folder12Controller::class, 'index'])->name('Folder12');
    Route::get('/mechanical/Folder12/{id}', [Folder12Controller::class, 'open'])->name('open-Folder12');
    Route::get('/mechanical/Folder12/view/{id}', [Folder12Controller::class, 'view'])->name('view-Folder12');
    Route::post('/mechanical/Folder12/pw/{id}', [Folder12Controller::class, 'password'])->name('pw-Folder12');
    Route::post('/mechanical/add-Folder12', [Folder12Controller::class, 'upload'])->name('up-Folder12');
    Route::get('/mechanical/Folder12/delete/{id}', [Folder12Controller::class, 'delete'])->name('del-Folder12');
    Route::get('/mechanical/Folder12/deleteAll/{category}', [Folder12Controller::class, 'destroy'])->name('destroy-Folder12');
    //Folder13
    Route::get('/mechanical/Folder13', [Folder13Controller::class, 'index'])->name('Folder13');
    Route::get('/mechanical/Folder13/{id}', [Folder13Controller::class, 'open'])->name('open-Folder13');
    Route::get('/mechanical/Folder13/view/{id}', [Folder13Controller::class, 'view'])->name('view-Folder13');
    Route::post('/mechanical/Folder13/pw/{id}', [Folder13Controller::class, 'password'])->name('pw-Folder13');
    Route::post('/mechanical/add-Folder13', [Folder13Controller::class, 'upload'])->name('up-Folder13');
    Route::get('/mechanical/Folder13/delete/{id}', [Folder13Controller::class, 'delete'])->name('del-Folder13');
    Route::get('/mechanical/Folder13/deleteAll/{category}', [Folder13Controller::class, 'destroy'])->name('destroy-Folder13');
    //Folder14
    Route::get('/mechanical/Folder14', [Folder14Controller::class, 'index'])->name('Folder14');
    Route::get('/mechanical/Folder14/{id}', [Folder14Controller::class, 'open'])->name('open-Folder14');
    Route::get('/mechanical/Folder14/view/{id}', [Folder14Controller::class, 'view'])->name('view-Folder14');
    Route::post('/mechanical/Folder14/pw/{id}', [Folder14Controller::class, 'password'])->name('pw-Folder14');
    Route::post('/mechanical/add-Folder14', [Folder14Controller::class, 'upload'])->name('up-Folder14');
    Route::get('/mechanical/Folder14/delete/{id}', [Folder14Controller::class, 'delete'])->name('del-Folder14');
    Route::get('/mechanical/Folder14/deleteAll/{category}', [Folder14Controller::class, 'destroy'])->name('destroy-Folder14');
    //Folder15
    Route::get('/mechanical/Folder15', [Folder15Controller::class, 'index'])->name('Folder15');
    Route::get('/mechanical/Folder15/{id}', [Folder15Controller::class, 'open'])->name('open-Folder15');
    Route::get('/mechanical/Folder15/view/{id}', [Folder15Controller::class, 'view'])->name('view-Folder15');
    Route::post('/mechanical/Folder15/pw/{id}', [Folder15Controller::class, 'password'])->name('pw-Folder15');
    Route::post('/mechanical/add-Folder15', [Folder15Controller::class, 'upload'])->name('up-Folder15');
    Route::get('/mechanical/Folder15/delete/{id}', [Folder15Controller::class, 'delete'])->name('del-Folder15');
    Route::get('/mechanical/Folder15/deleteAll/{category}', [Folder15Controller::class, 'destroy'])->name('destroy-Folder15');
    //Folder16
    Route::get('/mechanical/Folder16', [Folder16Controller::class, 'index'])->name('Folder16');
    Route::get('/mechanical/Folder16/{id}', [Folder16Controller::class, 'open'])->name('open-Folder16');
    Route::get('/mechanical/Folder16/view/{id}', [Folder16Controller::class, 'view'])->name('view-Folder16');
    Route::post('/mechanical/Folder16/pw/{id}', [Folder16Controller::class, 'password'])->name('pw-Folder16');
    Route::post('/mechanical/add-Folder16', [Folder16Controller::class, 'upload'])->name('up-Folder16');
    Route::get('/mechanical/Folder16/delete/{id}', [Folder16Controller::class, 'delete'])->name('del-Folder16');
    Route::get('/mechanical/Folder16/deleteAll/{category}', [Folder16Controller::class, 'destroy'])->name('destroy-Folder16');
    //Folder17
    Route::get('/mechanical/Folder17', [Folder17Controller::class, 'index'])->name('Folder17');
    Route::get('/mechanical/Folder17/{id}', [Folder17Controller::class, 'open'])->name('open-Folder17');
    Route::get('/mechanical/Folder17/view/{id}', [Folder17Controller::class, 'view'])->name('view-Folder17');
    Route::post('/mechanical/Folder17/pw/{id}', [Folder17Controller::class, 'password'])->name('pw-Folder17');
    Route::post('/mechanical/add-Folder17', [Folder17Controller::class, 'upload'])->name('up-Folder17');
    Route::get('/mechanical/Folder17/delete/{id}', [Folder17Controller::class, 'delete'])->name('del-Folder17');
    Route::get('/mechanical/Folder17/deleteAll/{category}', [Folder17Controller::class, 'destroy'])->name('destroy-Folder17');
    //Folder18
    Route::get('/mechanical/Folder18', [Folder18Controller::class, 'index'])->name('Folder18');
    Route::get('/mechanical/Folder18/{id}', [Folder18Controller::class, 'open'])->name('open-Folder18');
    Route::get('/mechanical/Folder18/view/{id}', [Folder18Controller::class, 'view'])->name('view-Folder18');
    Route::post('/mechanical/Folder18/pw/{id}', [Folder18Controller::class, 'password'])->name('pw-Folder18');
    Route::post('/mechanical/add-Folder18', [Folder18Controller::class, 'upload'])->name('up-Folder18');
    Route::get('/mechanical/Folder18/delete/{id}', [Folder18Controller::class, 'delete'])->name('del-Folder18');
    Route::get('/mechanical/Folder18/deleteAll/{category}', [Folder18Controller::class, 'destroy'])->name('destroy-Folder18');
    //Folder19
    Route::get('/mechanical/Folder19', [Folder19Controller::class, 'index'])->name('Folder19');
    Route::get('/mechanical/Folder19/{id}', [Folder19Controller::class, 'open'])->name('open-Folder19');
    Route::get('/mechanical/Folder19/view/{id}', [Folder19Controller::class, 'view'])->name('view-Folder19');
    Route::post('/mechanical/Folder19/pw/{id}', [Folder19Controller::class, 'password'])->name('pw-Folder19');
    Route::post('/mechanical/add-Folder19', [Folder19Controller::class, 'upload'])->name('up-Folder19');
    Route::get('/mechanical/Folder19/delete/{id}', [Folder19Controller::class, 'delete'])->name('del-Folder19');
    Route::get('/mechanical/Folder19/deleteAll/{category}', [Folder19Controller::class, 'destroy'])->name('destroy-Folder19');
    //Folder20
    Route::get('/mechanical/Folder20', [Folder20Controller::class, 'index'])->name('Folder20');
    Route::get('/mechanical/Folder20/{id}', [Folder20Controller::class, 'open'])->name('open-Folder20');
    Route::get('/mechanical/Folder20/view/{id}', [Folder20Controller::class, 'view'])->name('view-Folder20');
    Route::post('/mechanical/Folder20/pw/{id}', [Folder20Controller::class, 'password'])->name('pw-Folder20');
    Route::post('/mechanical/add-Folder20', [Folder20Controller::class, 'upload'])->name('up-Folder20');
    Route::get('/mechanical/Folder20/delete/{id}', [Folder20Controller::class, 'delete'])->name('del-Folder20');
    Route::get('/mechanical/Folder20/deleteAll/{category}', [Folder20Controller::class, 'destroy'])->name('destroy-Folder20');
    //Folder21
    Route::get('/mechanical/Folder21', [Folder21Controller::class, 'index'])->name('Folder21');
    Route::get('/mechanical/Folder21/{id}', [Folder21Controller::class, 'open'])->name('open-Folder21');
    Route::get('/mechanical/Folder21/view/{id}', [Folder21Controller::class, 'view'])->name('view-Folder21');
    Route::post('/mechanical/Folder21/pw/{id}', [Folder21Controller::class, 'password'])->name('pw-Folder21');
    Route::post('/mechanical/add-Folder21', [Folder21Controller::class, 'upload'])->name('up-Folder21');
    Route::get('/mechanical/Folder21/delete/{id}', [Folder21Controller::class, 'delete'])->name('del-Folder21');
    Route::get('/mechanical/Folder21/deleteAll/{category}', [Folder21Controller::class, 'destroy'])->name('destroy-Folder21');
    //Folder22
    Route::get('/mechanical/Folder22', [Folder22Controller::class, 'index'])->name('Folder22');
    Route::get('/mechanical/Folder22/{id}', [Folder22Controller::class, 'open'])->name('open-Folder22');
    Route::get('/mechanical/Folder22/view/{id}', [Folder22Controller::class, 'view'])->name('view-Folder22');
    Route::post('/mechanical/Folder22/pw/{id}', [Folder22Controller::class, 'password'])->name('pw-Folder22');
    Route::post('/mechanical/add-Folder22', [Folder22Controller::class, 'upload'])->name('up-Folder22');
    Route::get('/mechanical/Folder22/delete/{id}', [Folder22Controller::class, 'delete'])->name('del-Folder22');
    Route::get('/mechanical/Folder22/deleteAll/{category}', [Folder22Controller::class, 'destroy'])->name('destroy-Folder22');
    //Folder23
    Route::get('/mechanical/Folder23', [Folder23Controller::class, 'index'])->name('Folder23');
    Route::get('/mechanical/Folder23/{id}', [Folder23Controller::class, 'open'])->name('open-Folder23');
    Route::get('/mechanical/Folder23/view/{id}', [Folder23Controller::class, 'view'])->name('view-Folder23');
    Route::post('/mechanical/Folder23/pw/{id}', [Folder23Controller::class, 'password'])->name('pw-Folder23');
    Route::post('/mechanical/add-Folder23', [Folder23Controller::class, 'upload'])->name('up-Folder23');
    Route::get('/mechanical/Folder23/delete/{id}', [Folder23Controller::class, 'delete'])->name('del-Folder23');
    Route::get('/mechanical/Folder23/deleteAll/{category}', [Folder23Controller::class, 'destroy'])->name('destroy-Folder23');
    //Folder24
    Route::get('/mechanical/Folder24', [Folder24Controller::class, 'index'])->name('Folder24');
    Route::get('/mechanical/Folder24/{id}', [Folder24Controller::class, 'open'])->name('open-Folder24');
    Route::get('/mechanical/Folder24/view/{id}', [Folder24Controller::class, 'view'])->name('view-Folder24');
    Route::post('/mechanical/Folder24/pw/{id}', [Folder24Controller::class, 'password'])->name('pw-Folder24');
    Route::post('/mechanical/add-Folder24', [Folder24Controller::class, 'upload'])->name('up-Folder24');
    Route::get('/mechanical/Folder24/delete/{id}', [Folder24Controller::class, 'delete'])->name('del-Folder24');
    Route::get('/mechanical/Folder24/deleteAll/{category}', [Folder24Controller::class, 'destroy'])->name('destroy-Folder24');
    //Folder25
    Route::get('/mechanical/Folder25', [Folder25Controller::class, 'index'])->name('Folder25');
    Route::get('/mechanical/Folder25/{id}', [Folder25Controller::class, 'open'])->name('open-Folder25');
    Route::get('/mechanical/Folder25/view/{id}', [Folder25Controller::class, 'view'])->name('view-Folder25');
    Route::post('/mechanical/Folder25/pw/{id}', [Folder25Controller::class, 'password'])->name('pw-Folder25');
    Route::post('/mechanical/add-Folder25', [Folder25Controller::class, 'upload'])->name('up-Folder25');
    Route::get('/mechanical/Folder25/delete/{id}', [Folder25Controller::class, 'delete'])->name('del-Folder25');
    Route::get('/mechanical/Folder25/deleteAll/{category}', [Folder25Controller::class, 'destroy'])->name('destroy-Folder25');
    //Folder26
    Route::get('/mechanical/Folder26', [Folder26Controller::class, 'index'])->name('Folder26');
    Route::get('/mechanical/Folder26/{id}', [Folder26Controller::class, 'open'])->name('open-Folder26');
    Route::get('/mechanical/Folder26/view/{id}', [Folder26Controller::class, 'view'])->name('view-Folder26');
    Route::post('/mechanical/Folder26/pw/{id}', [Folder26Controller::class, 'password'])->name('pw-Folder26');
    Route::post('/mechanical/add-Folder26', [Folder26Controller::class, 'upload'])->name('up-Folder26');
    Route::get('/mechanical/Folder26/delete/{id}', [Folder26Controller::class, 'delete'])->name('del-Folder26');
    Route::get('/mechanical/Folder26/deleteAll/{category}', [Folder26Controller::class, 'destroy'])->name('destroy-Folder26');
    //Folder27
    Route::get('/mechanical/Folder27', [Folder27Controller::class, 'index'])->name('Folder27');
    Route::get('/mechanical/Folder27/{id}', [Folder27Controller::class, 'open'])->name('open-Folder27');
    Route::get('/mechanical/Folder27/view/{id}', [Folder27Controller::class, 'view'])->name('view-Folder27');
    Route::post('/mechanical/Folder27/pw/{id}', [Folder27Controller::class, 'password'])->name('pw-Folder27');
    Route::post('/mechanical/add-Folder27', [Folder27Controller::class, 'upload'])->name('up-Folder27');
    Route::get('/mechanical/Folder27/delete/{id}', [Folder27Controller::class, 'delete'])->name('del-Folder27');
    Route::get('/mechanical/Folder27/deleteAll/{category}', [Folder27Controller::class, 'destroy'])->name('destroy-Folder27');
    //Folder28
    Route::get('/mechanical/Folder28', [Folder28Controller::class, 'index'])->name('Folder28');
    Route::get('/mechanical/Folder28/{id}', [Folder28Controller::class, 'open'])->name('open-Folder28');
    Route::get('/mechanical/Folder28/view/{id}', [Folder28Controller::class, 'view'])->name('view-Folder28');
    Route::post('/mechanical/Folder28/pw/{id}', [Folder28Controller::class, 'password'])->name('pw-Folder28');
    Route::post('/mechanical/add-Folder28', [Folder28Controller::class, 'upload'])->name('up-Folder28');
    Route::get('/mechanical/Folder28/delete/{id}', [Folder28Controller::class, 'delete'])->name('del-Folder28');
    Route::get('/mechanical/Folder28/deleteAll/{category}', [Folder28Controller::class, 'destroy'])->name('destroy-Folder28');
    //Folder29
    Route::get('/mechanical/Folder29', [Folder29Controller::class, 'index'])->name('Folder29');
    Route::get('/mechanical/Folder29/{id}', [Folder29Controller::class, 'open'])->name('open-Folder29');
    Route::get('/mechanical/Folder29/view/{id}', [Folder29Controller::class, 'view'])->name('view-Folder29');
    Route::post('/mechanical/Folder29/pw/{id}', [Folder29Controller::class, 'password'])->name('pw-Folder29');
    Route::post('/mechanical/add-Folder29', [Folder29Controller::class, 'upload'])->name('up-Folder29');
    Route::get('/mechanical/Folder29/delete/{id}', [Folder29Controller::class, 'delete'])->name('del-Folder29');
    Route::get('/mechanical/Folder29/deleteAll/{category}', [Folder29Controller::class, 'destroy'])->name('destroy-Folder29');
    //Folder30
    Route::get('/mechanical/Folder30', [Folder30Controller::class, 'index'])->name('Folder30');
    Route::get('/mechanical/Folder30/{id}', [Folder30Controller::class, 'open'])->name('open-Folder30');
    Route::get('/mechanical/Folder30/view/{id}', [Folder30Controller::class, 'view'])->name('view-Folder30');
    Route::post('/mechanical/Folder30/pw/{id}', [Folder30Controller::class, 'password'])->name('pw-Folder30');
    Route::post('/mechanical/add-Folder30', [Folder30Controller::class, 'upload'])->name('up-Folder30');
    Route::get('/mechanical/Folder30/delete/{id}', [Folder30Controller::class, 'delete'])->name('del-Folder30');
    Route::get('/mechanical/Folder30/deleteAll/{category}', [Folder30Controller::class, 'destroy'])->name('destroy-Folder30');



    //Electrical
    //Banbury
    Route::get('/electrical/EBanbury', [EBanburyController::class, 'index'])->name('EBanbury');
    Route::get('/electrical/EBanbury/{id}', [EBanburyController::class, 'open'])->name('open-EBanbury');
    Route::get('/electrical/EBanbury/view/{id}', [EBanburyController::class, 'view'])->name('view-EBanbury');
    Route::post('/electrical/EBanbury/pw/{id}', [EBanburyController::class, 'password'])->name('pw-EBanbury');
    Route::post('/electrical/add-EBanbury', [EBanburyController::class, 'upload'])->name('up-EBanbury');
    Route::get('/electrical/EBanbury/delete/{id}', [EBanburyController::class, 'delete'])->name('del-EBanbury');
    Route::get('/electrical/EBanbury/deleteAll/{category}', [EBanburyController::class, 'destroy'])->name('destroy-EBanbury');
    //EStrainer    
    Route::get('/electrical/EStrainer', [EStrainerController::class, 'index'])->name('EStrainer');
    Route::get('/electrical/EStrainer/{id}', [EStrainerController::class, 'open'])->name('open-EStrainer');
    Route::get('/electrical/EStrainer/view/{id}', [EStrainerController::class, 'view'])->name('view-EStrainer');
    Route::post('/electrical/EStrainer/pw/{id}', [EStrainerController::class, 'password'])->name('pw-EStrainer');
    Route::post('/electrical/add-EStrainer', [EStrainerController::class, 'upload'])->name('up-EStrainer');
    Route::get('/electrical/EStrainer/delete/{id}', [EStrainerController::class, 'delete'])->name('del-EStrainer');
    Route::get('/electrical/EStrainer/deleteAll/{category}', [EStrainerController::class, 'destroy'])->name('destroy-EStrainer');
    //EPolyfilm    
    Route::get('/electrical/EPolyfilm', [EPolyfilmController::class, 'index'])->name('EPolyfilm');
    Route::get('/electrical/EPolyfilm/{id}', [EPolyfilmController::class, 'open'])->name('open-EPolyfilm');
    Route::get('/electrical/EPolyfilm/view/{id}', [EPolyfilmController::class, 'view'])->name('view-EPolyfilm');
    Route::post('/electrical/EPolyfilm/pw/{id}', [EPolyfilmController::class, 'password'])->name('pw-EPolyfilm');
    Route::post('/electrical/add-EPolyfilm', [EPolyfilmController::class, 'upload'])->name('up-EPolyfilm');
    Route::get('/electrical/EPolyfilm/delete/{id}', [EPolyfilmController::class, 'delete'])->name('del-EPolyfilm');
    Route::get('/electrical/EPolyfilm/deleteAll/{category}', [EPolyfilmController::class, 'destroy'])->name('destroy-EPolyfilm');
    //ECalender    
    Route::get('/electrical/ECalender', [ECalenderController::class, 'index'])->name('ECalender');
    Route::get('/electrical/ECalender/{id}', [ECalenderController::class, 'open'])->name('open-ECalender');
    Route::get('/electrical/ECalender/view/{id}', [ECalenderController::class, 'view'])->name('view-ECalender');
    Route::post('/electrical/ECalender/pw/{id}', [ECalenderController::class, 'password'])->name('pw-ECalender');
    Route::post('/electrical/add-ECalender', [ECalenderController::class, 'upload'])->name('up-ECalender');
    Route::get('/electrical/ECalender/delete/{id}', [ECalenderController::class, 'delete'])->name('del-ECalender');
    Route::get('/electrical/ECalender/deleteAll/{category}', [ECalenderController::class, 'destroy'])->name('destroy-ECalender');
    //EBexter    
    Route::get('/electrical/EBexter', [EBexterController::class, 'index'])->name('EBexter');
    Route::get('/electrical/EBexter/{id}', [EBexterController::class, 'open'])->name('open-EBexter');
    Route::get('/electrical/EBexter/view/{id}', [EBexterController::class, 'view'])->name('view-EBexter');
    Route::post('/electrical/EBexter/pw/{id}', [EBexterController::class, 'password'])->name('pw-EBexter');
    Route::post('/electrical/add-EBexter', [EBexterController::class, 'upload'])->name('up-EBexter');
    Route::get('/electrical/EBexter/delete/{id}', [EBexterController::class, 'delete'])->name('del-EBexter');
    Route::get('/electrical/EBexter/deleteAll/{category}', [EBexterController::class, 'destroy'])->name('destroy-EBexter');
    //EQCT    
    Route::get('/electrical/EQCT', [EQCTController::class, 'index'])->name('EQCT');
    Route::get('/electrical/EQCT/{id}', [EQCTController::class, 'open'])->name('open-EQCT');
    Route::get('/electrical/EQCT/view/{id}', [EQCTController::class, 'view'])->name('view-EQCT');
    Route::post('/electrical/EQCT/pw/{id}', [EQCTController::class, 'password'])->name('pw-EQCT');
    Route::post('/electrical/add-EQCT', [EQCTController::class, 'upload'])->name('up-EQCT');
    Route::get('/electrical/EQCT/delete/{id}', [EQCTController::class, 'delete'])->name('del-EQCT');
    Route::get('/electrical/EQCT/deleteAll/{category}', [EQCTController::class, 'destroy'])->name('destroy-EQCT');
    //E1NDCT    
    Route::get('/electrical/E1NDCT', [E1NDCTController::class, 'index'])->name('E1NDCT');
    Route::get('/electrical/E1NDCT/{id}', [E1NDCTController::class, 'open'])->name('open-E1NDCT');
    Route::get('/electrical/E1NDCT/view/{id}', [E1NDCTController::class, 'view'])->name('view-E1NDCT');
    Route::post('/electrical/E1NDCT/pw/{id}', [E1NDCTController::class, 'password'])->name('pw-E1NDCT');
    Route::post('/electrical/add-E1NDCT', [E1NDCTController::class, 'upload'])->name('up-E1NDCT');
    Route::get('/electrical/E1NDCT/delete/{id}', [E1NDCTController::class, 'delete'])->name('del-E1NDCT');
    Route::get('/electrical/E1NDCT/deleteAll/{category}', [E1NDCTController::class, 'destroy'])->name('destroy-E1NDCT');
    //E8CT    
    Route::get('/electrical/E8CT', [E8CTController::class, 'index'])->name('E8CT');
    Route::get('/electrical/E8CT/{id}', [E8CTController::class, 'open'])->name('open-E8CT');
    Route::get('/electrical/E8CT/view/{id}', [E8CTController::class, 'view'])->name('view-E8CT');
    Route::post('/electrical/E8CT/pw/{id}', [E8CTController::class, 'password'])->name('pw-E8CT');
    Route::post('/electrical/add-E8CT', [E8CTController::class, 'upload'])->name('up-E8CT');
    Route::get('/electrical/E8CT/delete/{id}', [E8CTController::class, 'delete'])->name('del-E8CT');
    Route::get('/electrical/E8CT/deleteAll/{category}', [E8CTController::class, 'destroy'])->name('destroy-E8CT');
    //EBead    
    Route::get('/electrical/EBead', [EBeadController::class, 'index'])->name('EBead');
    Route::get('/electrical/EBead/{id}', [EBeadController::class, 'open'])->name('open-EBead');
    Route::get('/electrical/EBead/view/{id}', [EBeadController::class, 'view'])->name('view-EBead');
    Route::post('/electrical/EBead/pw/{id}', [EBeadController::class, 'password'])->name('pw-EBead');
    Route::post('/electrical/add-EBead', [EBeadController::class, 'upload'])->name('up-EBead');
    Route::get('/electrical/EBead/delete/{id}', [EBeadController::class, 'delete'])->name('del-EBead');
    Route::get('/electrical/EBead/deleteAll/{category}', [EBeadController::class, 'destroy'])->name('destroy-EBead');
    //EMonowire    
    Route::get('/electrical/EMonowire', [EMonowireController::class, 'index'])->name('EMonowire');
    Route::get('/electrical/EMonowire/{id}', [EMonowireController::class, 'open'])->name('open-EMonowire');
    Route::get('/electrical/EMonowire/view/{id}', [EMonowireController::class, 'view'])->name('view-EMonowire');
    Route::post('/electrical/EMonowire/pw/{id}', [EMonowireController::class, 'password'])->name('pw-EMonowire');
    Route::post('/electrical/add-EMonowire', [EMonowireController::class, 'upload'])->name('up-EMonowire');
    Route::get('/electrical/EMonowire/delete/{id}', [EMonowireController::class, 'delete'])->name('del-EMonowire');
    Route::get('/electrical/EMonowire/deleteAll/{category}', [EMonowireController::class, 'destroy'])->name('destroy-EMonowire');
    //ERTB    
    Route::get('/electrical/ERTB', [ERTBController::class, 'index'])->name('ERTB');
    Route::get('/electrical/ERTB/{id}', [ERTBController::class, 'open'])->name('open-ERTB');
    Route::get('/electrical/ERTB/view/{id}', [ERTBController::class, 'view'])->name('view-ERTB');
    Route::post('/electrical/ERTB/pw/{id}', [ERTBController::class, 'password'])->name('pw-ERTB');
    Route::post('/electrical/add-ERTB', [ERTBController::class, 'upload'])->name('up-ERTB');
    Route::get('/electrical/ERTB/delete/{id}', [ERTBController::class, 'delete'])->name('del-ERTB');
    Route::get('/electrical/ERTB/deleteAll/{category}', [ERTBController::class, 'destroy'])->name('destroy-ERTB');
    //EPCT1    
    Route::get('/electrical/EPCT1', [EPCT1Controller::class, 'index'])->name('EPCT1');
    Route::get('/electrical/EPCT1/{id}', [EPCT1Controller::class, 'open'])->name('open-EPCT1');
    Route::get('/electrical/EPCT1/view/{id}', [EPCT1Controller::class, 'view'])->name('view-EPCT1');
    Route::post('/electrical/EPCT1/pw/{id}', [EPCT1Controller::class, 'password'])->name('pw-EPCT1');
    Route::post('/electrical/add-EPCT1', [EPCT1Controller::class, 'upload'])->name('up-EPCT1');
    Route::get('/electrical/EPCT1/delete/{id}', [EPCT1Controller::class, 'delete'])->name('del-EPCT1');
    Route::get('/electrical/EPCT1/deleteAll/{category}', [EPCT1Controller::class, 'destroy'])->name('destroy-EPCT1');
    //EPCT2    
    Route::get('/electrical/EPCT2', [EPCT2Controller::class, 'index'])->name('EPCT2');
    Route::get('/electrical/EPCT2/{id}', [EPCT2Controller::class, 'open'])->name('open-EPCT2');
    Route::get('/electrical/EPCT2/view/{id}', [EPCT2Controller::class, 'view'])->name('view-EPCT2');
    Route::post('/electrical/EPCT2/pw/{id}', [EPCT2Controller::class, 'password'])->name('pw-EPCT2');
    Route::post('/electrical/add-EPCT2', [EPCT2Controller::class, 'upload'])->name('up-EPCT2');
    Route::get('/electrical/EPCT2/delete/{id}', [EPCT2Controller::class, 'delete'])->name('del-EPCT2');
    Route::get('/electrical/EPCT2/deleteAll/{category}', [EPCT2Controller::class, 'destroy'])->name('destroy-EPCT2');
    //ESRB1    
    Route::get('/electrical/ESRB1', [ESRB1Controller::class, 'index'])->name('ESRB1');
    Route::get('/electrical/ESRB1/{id}', [ESRB1Controller::class, 'open'])->name('open-ESRB1');
    Route::get('/electrical/ESRB1/view/{id}', [ESRB1Controller::class, 'view'])->name('view-ESRB1');
    Route::post('/electrical/ESRB1/pw/{id}', [ESRB1Controller::class, 'password'])->name('pw-ESRB1');
    Route::post('/electrical/add-ESRB1', [ESRB1Controller::class, 'upload'])->name('up-ESRB1');
    Route::get('/electrical/ESRB1/delete/{id}', [ESRB1Controller::class, 'delete'])->name('del-ESRB1');
    Route::get('/electrical/ESRB1/deleteAll/{category}', [ESRB1Controller::class, 'destroy'])->name('destroy-ESRB1');
    //ESRB2    
    Route::get('/electrical/ESRB2', [ESRB2Controller::class, 'index'])->name('ESRB2');
    Route::get('/electrical/ESRB2/{id}', [ESRB2Controller::class, 'open'])->name('open-ESRB2');
    Route::get('/electrical/ESRB2/view/{id}', [ESRB2Controller::class, 'view'])->name('view-ESRB2');
    Route::post('/electrical/ESRB2/pw/{id}', [ESRB2Controller::class, 'password'])->name('pw-ESRB2');
    Route::post('/electrical/add-ESRB2', [ESRB2Controller::class, 'upload'])->name('up-ESRB2');
    Route::get('/electrical/ESRB2/delete/{id}', [ESRB2Controller::class, 'delete'])->name('del-ESRB2');
    Route::get('/electrical/ESRB2/deleteAll/{category}', [ESRB2Controller::class, 'destroy'])->name('destroy-ESRB2');
    //EPSP    
    Route::get('/electrical/EPSP', [EPSPController::class, 'index'])->name('EPSP');
    Route::get('/electrical/EPSP/{id}', [EPSPController::class, 'open'])->name('open-EPSP');
    Route::get('/electrical/EPSP/view/{id}', [EPSPController::class, 'view'])->name('view-EPSP');
    Route::post('/electrical/EPSP/pw/{id}', [EPSPController::class, 'password'])->name('pw-EPSP');
    Route::post('/electrical/add-EPSP', [EPSPController::class, 'upload'])->name('up-EPSP');
    Route::get('/electrical/EPSP/delete/{id}', [EPSPController::class, 'delete'])->name('del-EPSP');
    Route::get('/electrical/EPSP/deleteAll/{category}', [EPSPController::class, 'destroy'])->name('destroy-EPSP');
    //EIL2RH    
    Route::get('/electrical/EIL2RH', [EIL2RHController::class, 'index'])->name('EIL2RH');
    Route::get('/electrical/EIL2RH/{id}', [EIL2RHController::class, 'open'])->name('open-EIL2RH');
    Route::get('/electrical/EIL2RH/view/{id}', [EIL2RHController::class, 'view'])->name('view-EIL2RH');
    Route::post('/electrical/EIL2RH/pw/{id}', [EIL2RHController::class, 'password'])->name('pw-EIL2RH');
    Route::post('/electrical/add-EIL2RH', [EIL2RHController::class, 'upload'])->name('up-EIL2RH');
    Route::get('/electrical/EIL2RH/delete/{id}', [EIL2RHController::class, 'delete'])->name('del-EIL2RH');
    Route::get('/electrical/EIL2RH/deleteAll/{category}', [EIL2RHController::class, 'destroy'])->name('destroy-EIL2RH');
    //EKBN2    
    Route::get('/electrical/EKBN2', [EKBN2Controller::class, 'index'])->name('EKBN2');
    Route::get('/electrical/EKBN2/{id}', [EKBN2Controller::class, 'open'])->name('open-EKBN2');
    Route::get('/electrical/EKBN2/view/{id}', [EKBN2Controller::class, 'view'])->name('view-EKBN2');
    Route::post('/electrical/EKBN2/pw/{id}', [EKBN2Controller::class, 'password'])->name('pw-EKBN2');
    Route::post('/electrical/add-EKBN2', [EKBN2Controller::class, 'upload'])->name('up-EKBN2');
    Route::get('/electrical/EKBN2/delete/{id}', [EKBN2Controller::class, 'delete'])->name('del-EKBN2');
    Route::get('/electrical/EKBN2/deleteAll/{category}', [EKBN2Controller::class, 'destroy'])->name('destroy-EKBN2');
    //EK1S    
    Route::get('/electrical/EK1S', [EK1SController::class, 'index'])->name('EK1S');
    Route::get('/electrical/EK1S/{id}', [EK1SController::class, 'open'])->name('open-EK1S');
    Route::get('/electrical/EK1S/view/{id}', [EK1SController::class, 'view'])->name('view-EK1S');
    Route::post('/electrical/EK1S/pw/{id}', [EK1SController::class, 'password'])->name('pw-EK1S');
    Route::post('/electrical/add-EK1S', [EK1SController::class, 'upload'])->name('up-EK1S');
    Route::get('/electrical/EK1S/delete/{id}', [EK1SController::class, 'delete'])->name('del-EK1S');
    Route::get('/electrical/EK1S/deleteAll/{category}', [EK1SController::class, 'destroy'])->name('destroy-EK1S');
    //EHF1    
    Route::get('/electrical/EHF1', [EHF1Controller::class, 'index'])->name('EHF1');
    Route::get('/electrical/EHF1/{id}', [EHF1Controller::class, 'open'])->name('open-EHF1');
    Route::get('/electrical/EHF1/view/{id}', [EHF1Controller::class, 'view'])->name('view-EHF1');
    Route::post('/electrical/EHF1/pw/{id}', [EHF1Controller::class, 'password'])->name('pw-EHF1');
    Route::post('/electrical/add-EHF1', [EHF1Controller::class, 'upload'])->name('up-EHF1');
    Route::get('/electrical/EHF1/delete/{id}', [EHF1Controller::class, 'delete'])->name('del-EHF1');
    Route::get('/electrical/EHF1/deleteAll/{category}', [EHF1Controller::class, 'destroy'])->name('destroy-EHF1');
    //ECure    
    Route::get('/electrical/ECure', [ECureController::class, 'index'])->name('ECure');
    Route::get('/electrical/ECure/{id}', [ECureController::class, 'open'])->name('open-ECure');
    Route::get('/electrical/ECure/view/{id}', [ECureController::class, 'view'])->name('view-ECure');
    Route::post('/electrical/ECure/pw/{id}', [ECureController::class, 'password'])->name('pw-ECure');
    Route::post('/electrical/add-ECure', [ECureController::class, 'upload'])->name('up-ECure');
    Route::get('/electrical/ECure/delete/{id}', [ECureController::class, 'delete'])->name('del-ECure');
    Route::get('/electrical/ECure/deleteAll/{category}', [ECureController::class, 'destroy'])->name('destroy-ECure');
    //EAPPD1    
    Route::get('/electrical/EAPPD1', [EAPPD1Controller::class, 'index'])->name('EAPPD1');
    Route::get('/electrical/EAPPD1/{id}', [EAPPD1Controller::class, 'open'])->name('open-EAPPD1');
    Route::get('/electrical/EAPPD1/view/{id}', [EAPPD1Controller::class, 'view'])->name('view-EAPPD1');
    Route::post('/electrical/EAPPD1/pw/{id}', [EAPPD1Controller::class, 'password'])->name('pw-EAPPD1');
    Route::post('/electrical/add-EAPPD1', [EAPPD1Controller::class, 'upload'])->name('up-EAPPD1');
    Route::get('/electrical/EAPPD1/delete/{id}', [EAPPD1Controller::class, 'delete'])->name('del-EAPPD1');
    Route::get('/electrical/EAPPD1/deleteAll/{category}', [EAPPD1Controller::class, 'destroy'])->name('destroy-EAPPD1');
    //EInAPPD1    
    Route::get('/electrical/EInAPPD1', [EInAPPD1Controller::class, 'index'])->name('EInAPPD1');
    Route::get('/electrical/EInAPPD1/{id}', [EInAPPD1Controller::class, 'open'])->name('open-EInAPPD1');
    Route::get('/electrical/EInAPPD1/view/{id}', [EInAPPD1Controller::class, 'view'])->name('view-EInAPPD1');
    Route::post('/electrical/EInAPPD1/pw/{id}', [EInAPPD1Controller::class, 'password'])->name('pw-EInAPPD1');
    Route::post('/electrical/add-EInAPPD1', [EInAPPD1Controller::class, 'upload'])->name('up-EInAPPD1');
    Route::get('/electrical/EInAPPD1/delete/{id}', [EInAPPD1Controller::class, 'delete'])->name('del-EInAPPD1');
    Route::get('/electrical/EInAPPD1/deleteAll/{category}', [EInAPPD1Controller::class, 'destroy'])->name('destroy-EInAPPD1');
    //EWB2    
    Route::get('/electrical/EWB2', [EWB2Controller::class, 'index'])->name('EWB2');
    Route::get('/electrical/EWB2/{id}', [EWB2Controller::class, 'open'])->name('open-EWB2');
    Route::get('/electrical/EWB2/view/{id}', [EWB2Controller::class, 'view'])->name('view-EWB2');
    Route::post('/electrical/EWB2/pw/{id}', [EWB2Controller::class, 'password'])->name('pw-EWB2');
    Route::post('/electrical/add-EWB2', [EWB2Controller::class, 'upload'])->name('up-EWB2');
    Route::get('/electrical/EWB2/delete/{id}', [EWB2Controller::class, 'delete'])->name('del-EWB2');
    Route::get('/electrical/EWB2/deleteAll/{category}', [EWB2Controller::class, 'destroy'])->name('destroy-EWB2');
    //ERF    
    Route::get('/electrical/ERF', [ERFController::class, 'index'])->name('ERF');
    Route::get('/electrical/ERF/{id}', [ERFController::class, 'open'])->name('open-ERF');
    Route::get('/electrical/ERF/view/{id}', [ERFController::class, 'view'])->name('view-ERF');
    Route::post('/electrical/ERF/pw/{id}', [ERFController::class, 'password'])->name('pw-ERF');
    Route::post('/electrical/add-ERF', [ERFController::class, 'upload'])->name('up-ERF');
    Route::get('/electrical/ERF/delete/{id}', [ERFController::class, 'delete'])->name('del-ERF');
    Route::get('/electrical/ERF/deleteAll/{category}', [ERFController::class, 'destroy'])->name('destroy-ERF');
    //EUniform    
    Route::get('/electrical/EUniform', [EUniformController::class, 'index'])->name('EUniform');
    Route::get('/electrical/EUniform/{id}', [EUniformController::class, 'open'])->name('open-EUniform');
    Route::get('/electrical/EUniform/view/{id}', [EUniformController::class, 'view'])->name('view-EUniform');
    Route::post('/electrical/EUniform/pw/{id}', [EUniformController::class, 'password'])->name('pw-EUniform');
    Route::post('/electrical/add-EUniform', [EUniformController::class, 'upload'])->name('up-EUniform');
    Route::get('/electrical/EUniform/delete/{id}', [EUniformController::class, 'delete'])->name('del-EUniform');
    Route::get('/electrical/EUniform/deleteAll/{category}', [EUniformController::class, 'destroy'])->name('destroy-EUniform');
    //EHPLRP    
    Route::get('/electrical/EHPLRP', [EHPLRPController::class, 'index'])->name('EHPLRP');
    Route::get('/electrical/EHPLRP/{id}', [EHPLRPController::class, 'open'])->name('open-EHPLRP');
    Route::get('/electrical/EHPLRP/view/{id}', [EHPLRPController::class, 'view'])->name('view-EHPLRP');
    Route::post('/electrical/EHPLRP/pw/{id}', [EHPLRPController::class, 'password'])->name('pw-EHPLRP');
    Route::post('/electrical/add-EHPLRP', [EHPLRPController::class, 'upload'])->name('up-EHPLRP');
    Route::get('/electrical/EHPLRP/delete/{id}', [EHPLRPController::class, 'delete'])->name('del-EHPLRP');
    Route::get('/electrical/EHPLRP/deleteAll/{category}', [EHPLRPController::class, 'destroy'])->name('destroy-EHPLRP');
    //ELWB    
    Route::get('/electrical/ELWB', [ELWBController::class, 'index'])->name('ELWB');
    Route::get('/electrical/ELWB/{id}', [ELWBController::class, 'open'])->name('open-ELWB');
    Route::get('/electrical/ELWB/view/{id}', [ELWBController::class, 'view'])->name('view-ELWB');
    Route::post('/electrical/ELWB/pw/{id}', [ELWBController::class, 'password'])->name('pw-ELWB');
    Route::post('/electrical/add-ELWB', [ELWBController::class, 'upload'])->name('up-ELWB');
    Route::get('/electrical/ELWB/delete/{id}', [ELWBController::class, 'delete'])->name('del-ELWB');
    Route::get('/electrical/ELWB/deleteAll/{category}', [ELWBController::class, 'destroy'])->name('destroy-ELWB');
    //ERework    
    Route::get('/electrical/ERework', [EReworkController::class, 'index'])->name('ERework');
    Route::get('/electrical/ERework/{id}', [EReworkController::class, 'open'])->name('open-ERework');
    Route::get('/electrical/ERework/view/{id}', [EReworkController::class, 'view'])->name('view-ERework');
    Route::post('/electrical/ERework/pw/{id}', [EReworkController::class, 'password'])->name('pw-ERework');
    Route::post('/electrical/add-ERework', [EReworkController::class, 'upload'])->name('up-ERework');
    Route::get('/electrical/ERework/delete/{id}', [EReworkController::class, 'delete'])->name('del-ERework');
    Route::get('/electrical/ERework/deleteAll/{category}', [EReworkController::class, 'destroy'])->name('destroy-ERework');
    //ETR    
    Route::get('/electrical/ETR', [ETRController::class, 'index'])->name('ETR');
    Route::get('/electrical/ETR/{id}', [ETRController::class, 'open'])->name('open-ETR');
    Route::get('/electrical/ETR/view/{id}', [ETRController::class, 'view'])->name('view-ETR');
    Route::post('/electrical/ETR/pw/{id}', [ETRController::class, 'password'])->name('pw-ETR');
    Route::post('/electrical/add-ETR', [ETRController::class, 'upload'])->name('up-ETR');
    Route::get('/electrical/ETR/delete/{id}', [ETRController::class, 'delete'])->name('del-ETR');
    Route::get('/electrical/ETR/deleteAll/{category}', [ETRController::class, 'destroy'])->name('destroy-ETR');
    //EFurn    
    Route::get('/electrical/EFurn', [EFurnController::class, 'index'])->name('EFurn');
    Route::get('/electrical/EFurn/{id}', [EFurnController::class, 'open'])->name('open-EFurn');
    Route::get('/electrical/EFurn/view/{id}', [EFurnController::class, 'view'])->name('view-EFurn');
    Route::post('/electrical/EFurn/pw/{id}', [EFurnController::class, 'password'])->name('pw-EFurn');
    Route::post('/electrical/add-EFurn', [EFurnController::class, 'upload'])->name('up-EFurn');
    Route::get('/electrical/EFurn/delete/{id}', [EFurnController::class, 'delete'])->name('del-EFurn');
    Route::get('/electrical/EFurn/deleteAll/{category}', [EFurnController::class, 'destroy'])->name('destroy-EFurn');
    //ECH    
    Route::get('/electrical/ECH', [ECHController::class, 'index'])->name('ECH');
    Route::get('/electrical/ECH/{id}', [ECHController::class, 'open'])->name('open-ECH');
    Route::get('/electrical/ECH/view/{id}', [ECHController::class, 'view'])->name('view-ECH');
    Route::post('/electrical/ECH/pw/{id}', [ECHController::class, 'password'])->name('pw-ECH');
    Route::post('/electrical/add-ECH', [ECHController::class, 'upload'])->name('up-ECH');
    Route::get('/electrical/ECH/delete/{id}', [ECHController::class, 'delete'])->name('del-ECH');
    Route::get('/electrical/ECH/deleteAll/{category}', [ECHController::class, 'destroy'])->name('destroy-ECH');
    //EFolder1    
    Route::get('/electrical/EFolder1', [EFolder1Controller::class, 'index'])->name('EFolder1');
    Route::get('/electrical/EFolder1/{id}', [EFolder1Controller::class, 'open'])->name('open-EFolder1');
    Route::get('/electrical/EFolder1/view/{id}', [EFolder1Controller::class, 'view'])->name('view-EFolder1');
    Route::post('/electrical/EFolder1/pw/{id}', [EFolder1Controller::class, 'password'])->name('pw-EFolder1');
    Route::post('/electrical/add-EFolder1', [EFolder1Controller::class, 'upload'])->name('up-EFolder1');
    Route::get('/electrical/EFolder1/delete/{id}', [EFolder1Controller::class, 'delete'])->name('del-EFolder1');
    Route::get('/electrical/EFolder1/deleteAll/{category}', [EFolder1Controller::class, 'destroy'])->name('destroy-EFolder1');
    //EFolder2    
    Route::get('/electrical/EFolder2', [EFolder2Controller::class, 'index'])->name('EFolder2');
    Route::get('/electrical/EFolder2/{id}', [EFolder2Controller::class, 'open'])->name('open-EFolder2');
    Route::get('/electrical/EFolder2/view/{id}', [EFolder2Controller::class, 'view'])->name('view-EFolder2');
    Route::post('/electrical/EFolder2/pw/{id}', [EFolder2Controller::class, 'password'])->name('pw-EFolder2');
    Route::post('/electrical/add-EFolder2', [EFolder2Controller::class, 'upload'])->name('up-EFolder2');
    Route::get('/electrical/EFolder2/delete/{id}', [EFolder2Controller::class, 'delete'])->name('del-EFolder2');
    Route::get('/electrical/EFolder2/deleteAll/{category}', [EFolder2Controller::class, 'destroy'])->name('destroy-EFolder2');
    //EFolder3    
    Route::get('/electrical/EFolder3', [EFolder3Controller::class, 'index'])->name('EFolder3');
    Route::get('/electrical/EFolder3/{id}', [EFolder3Controller::class, 'open'])->name('open-EFolder3');
    Route::get('/electrical/EFolder3/view/{id}', [EFolder3Controller::class, 'view'])->name('view-EFolder3');
    Route::post('/electrical/EFolder3/pw/{id}', [EFolder3Controller::class, 'password'])->name('pw-EFolder3');
    Route::post('/electrical/add-EFolder3', [EFolder3Controller::class, 'upload'])->name('up-EFolder3');
    Route::get('/electrical/EFolder3/delete/{id}', [EFolder3Controller::class, 'delete'])->name('del-EFolder3');
    Route::get('/electrical/EFolder3/deleteAll/{category}', [EFolder3Controller::class, 'destroy'])->name('destroy-EFolder3');
    //EFolder4    
    Route::get('/electrical/EFolder4', [EFolder4Controller::class, 'index'])->name('EFolder4');
    Route::get('/electrical/EFolder4/{id}', [EFolder4Controller::class, 'open'])->name('open-EFolder4');
    Route::get('/electrical/EFolder4/view/{id}', [EFolder4Controller::class, 'view'])->name('view-EFolder4');
    Route::post('/electrical/EFolder4/pw/{id}', [EFolder4Controller::class, 'password'])->name('pw-EFolder4');
    Route::post('/electrical/add-EFolder4', [EFolder4Controller::class, 'upload'])->name('up-EFolder4');
    Route::get('/electrical/EFolder4/delete/{id}', [EFolder4Controller::class, 'delete'])->name('del-EFolder4');
    Route::get('/electrical/EFolder4/deleteAll/{category}', [EFolder4Controller::class, 'destroy'])->name('destroy-EFolder4');
    //EFolder5    
    Route::get('/electrical/EFolder5', [EFolder5Controller::class, 'index'])->name('EFolder5');
    Route::get('/electrical/EFolder5/{id}', [EFolder5Controller::class, 'open'])->name('open-EFolder5');
    Route::get('/electrical/EFolder5/view/{id}', [EFolder5Controller::class, 'view'])->name('view-EFolder5');
    Route::post('/electrical/EFolder5/pw/{id}', [EFolder5Controller::class, 'password'])->name('pw-EFolder5');
    Route::post('/electrical/add-EFolder5', [EFolder5Controller::class, 'upload'])->name('up-EFolder5');
    Route::get('/electrical/EFolder5/delete/{id}', [EFolder5Controller::class, 'delete'])->name('del-EFolder5');
    Route::get('/electrical/EFolder5/deleteAll/{category}', [EFolder5Controller::class, 'destroy'])->name('destroy-EFolder5');
    //EFolder6    
    Route::get('/electrical/EFolder6', [EFolder6Controller::class, 'index'])->name('EFolder6');
    Route::get('/electrical/EFolder6/{id}', [EFolder6Controller::class, 'open'])->name('open-EFolder6');
    Route::get('/electrical/EFolder6/view/{id}', [EFolder6Controller::class, 'view'])->name('view-EFolder6');
    Route::post('/electrical/EFolder6/pw/{id}', [EFolder6Controller::class, 'password'])->name('pw-EFolder6');
    Route::post('/electrical/add-EFolder6', [EFolder6Controller::class, 'upload'])->name('up-EFolder6');
    Route::get('/electrical/EFolder6/delete/{id}', [EFolder6Controller::class, 'delete'])->name('del-EFolder6');
    Route::get('/electrical/EFolder6/deleteAll/{category}', [EFolder6Controller::class, 'destroy'])->name('destroy-EFolder6');
    //EFolder7    
    Route::get('/electrical/EFolder7', [EFolder7Controller::class, 'index'])->name('EFolder7');
    Route::get('/electrical/EFolder7/{id}', [EFolder7Controller::class, 'open'])->name('open-EFolder7');
    Route::get('/electrical/EFolder7/view/{id}', [EFolder7Controller::class, 'view'])->name('view-EFolder7');
    Route::post('/electrical/EFolder7/pw/{id}', [EFolder7Controller::class, 'password'])->name('pw-EFolder7');
    Route::post('/electrical/add-EFolder7', [EFolder7Controller::class, 'upload'])->name('up-EFolder7');
    Route::get('/electrical/EFolder7/delete/{id}', [EFolder7Controller::class, 'delete'])->name('del-EFolder7');
    Route::get('/electrical/EFolder7/deleteAll/{category}', [EFolder7Controller::class, 'destroy'])->name('destroy-EFolder7');
    //EFolder8    
    Route::get('/electrical/EFolder8', [EFolder8Controller::class, 'index'])->name('EFolder8');
    Route::get('/electrical/EFolder8/{id}', [EFolder8Controller::class, 'open'])->name('open-EFolder8');
    Route::get('/electrical/EFolder8/view/{id}', [EFolder8Controller::class, 'view'])->name('view-EFolder8');
    Route::post('/electrical/EFolder8/pw/{id}', [EFolder8Controller::class, 'password'])->name('pw-EFolder8');
    Route::post('/electrical/add-EFolder8', [EFolder8Controller::class, 'upload'])->name('up-EFolder8');
    Route::get('/electrical/EFolder8/delete/{id}', [EFolder8Controller::class, 'delete'])->name('del-EFolder8');
    Route::get('/electrical/EFolder8/deleteAll/{category}', [EFolder8Controller::class, 'destroy'])->name('destroy-EFolder8');
    //EFolder9    
    Route::get('/electrical/EFolder9', [EFolder9Controller::class, 'index'])->name('EFolder9');
    Route::get('/electrical/EFolder9/{id}', [EFolder9Controller::class, 'open'])->name('open-EFolder9');
    Route::get('/electrical/EFolder9/view/{id}', [EFolder9Controller::class, 'view'])->name('view-EFolder9');
    Route::post('/electrical/EFolder9/pw/{id}', [EFolder9Controller::class, 'password'])->name('pw-EFolder9');
    Route::post('/electrical/add-EFolder9', [EFolder9Controller::class, 'upload'])->name('up-EFolder9');
    Route::get('/electrical/EFolder9/delete/{id}', [EFolder9Controller::class, 'delete'])->name('del-EFolder9');
    Route::get('/electrical/EFolder9/deleteAll/{category}', [EFolder9Controller::class, 'destroy'])->name('destroy-EFolder9');
    //EFolder10    
    Route::get('/electrical/EFolder10', [EFolder10Controller::class, 'index'])->name('EFolder10');
    Route::get('/electrical/EFolder10/{id}', [EFolder10Controller::class, 'open'])->name('open-EFolder10');
    Route::get('/electrical/EFolder10/view/{id}', [EFolder10Controller::class, 'view'])->name('view-EFolder10');
    Route::post('/electrical/EFolder10/pw/{id}', [EFolder10Controller::class, 'password'])->name('pw-EFolder10');
    Route::post('/electrical/add-EFolder10', [EFolder10Controller::class, 'upload'])->name('up-EFolder10');
    Route::get('/electrical/EFolder10/delete/{id}', [EFolder10Controller::class, 'delete'])->name('del-EFolder10');
    Route::get('/electrical/EFolder10/deleteAll/{category}', [EFolder10Controller::class, 'destroy'])->name('destroy-EFolder10');
    //EFolder11    
    Route::get('/electrical/EFolder11', [EFolder11Controller::class, 'index'])->name('EFolder11');
    Route::get('/electrical/EFolder11/{id}', [EFolder11Controller::class, 'open'])->name('open-EFolder11');
    Route::get('/electrical/EFolder11/view/{id}', [EFolder11Controller::class, 'view'])->name('view-EFolder11');
    Route::post('/electrical/EFolder11/pw/{id}', [EFolder11Controller::class, 'password'])->name('pw-EFolder11');
    Route::post('/electrical/add-EFolder11', [EFolder11Controller::class, 'upload'])->name('up-EFolder11');
    Route::get('/electrical/EFolder11/delete/{id}', [EFolder11Controller::class, 'delete'])->name('del-EFolder11');
    Route::get('/electrical/EFolder11/deleteAll/{category}', [EFolder11Controller::class, 'destroy'])->name('destroy-EFolder11');
    //EFolder12    
    Route::get('/electrical/EFolder12', [EFolder12Controller::class, 'index'])->name('EFolder12');
    Route::get('/electrical/EFolder12/{id}', [EFolder12Controller::class, 'open'])->name('open-EFolder12');
    Route::get('/electrical/EFolder12/view/{id}', [EFolder12Controller::class, 'view'])->name('view-EFolder12');
    Route::post('/electrical/EFolder12/pw/{id}', [EFolder12Controller::class, 'password'])->name('pw-EFolder12');
    Route::post('/electrical/add-EFolder12', [EFolder12Controller::class, 'upload'])->name('up-EFolder12');
    Route::get('/electrical/EFolder12/delete/{id}', [EFolder12Controller::class, 'delete'])->name('del-EFolder12');
    Route::get('/electrical/EFolder12/deleteAll/{category}', [EFolder12Controller::class, 'destroy'])->name('destroy-EFolder12');
    //EFolder13    
    Route::get('/electrical/EFolder13', [EFolder13Controller::class, 'index'])->name('EFolder13');
    Route::get('/electrical/EFolder13/{id}', [EFolder13Controller::class, 'open'])->name('open-EFolder13');
    Route::get('/electrical/EFolder13/view/{id}', [EFolder13Controller::class, 'view'])->name('view-EFolder13');
    Route::post('/electrical/EFolder13/pw/{id}', [EFolder13Controller::class, 'password'])->name('pw-EFolder13');
    Route::post('/electrical/add-EFolder13', [EFolder13Controller::class, 'upload'])->name('up-EFolder13');
    Route::get('/electrical/EFolder13/delete/{id}', [EFolder13Controller::class, 'delete'])->name('del-EFolder13');
    Route::get('/electrical/EFolder13/deleteAll/{category}', [EFolder13Controller::class, 'destroy'])->name('destroy-EFolder13');
    //EFolder14    
    Route::get('/electrical/EFolder14', [EFolder14Controller::class, 'index'])->name('EFolder14');
    Route::get('/electrical/EFolder14/{id}', [EFolder14Controller::class, 'open'])->name('open-EFolder14');
    Route::get('/electrical/EFolder14/view/{id}', [EFolder14Controller::class, 'view'])->name('view-EFolder14');
    Route::post('/electrical/EFolder14/pw/{id}', [EFolder14Controller::class, 'password'])->name('pw-EFolder14');
    Route::post('/electrical/add-EFolder14', [EFolder14Controller::class, 'upload'])->name('up-EFolder14');
    Route::get('/electrical/EFolder14/delete/{id}', [EFolder14Controller::class, 'delete'])->name('del-EFolder14');
    Route::get('/electrical/EFolder14/deleteAll/{category}', [EFolder14Controller::class, 'destroy'])->name('destroy-EFolder14');
    //EFolder15    
    Route::get('/electrical/EFolder15', [EFolder15Controller::class, 'index'])->name('EFolder15');
    Route::get('/electrical/EFolder15/{id}', [EFolder15Controller::class, 'open'])->name('open-EFolder15');
    Route::get('/electrical/EFolder15/view/{id}', [EFolder15Controller::class, 'view'])->name('view-EFolder15');
    Route::post('/electrical/EFolder15/pw/{id}', [EFolder15Controller::class, 'password'])->name('pw-EFolder15');
    Route::post('/electrical/add-EFolder15', [EFolder15Controller::class, 'upload'])->name('up-EFolder15');
    Route::get('/electrical/EFolder15/delete/{id}', [EFolder15Controller::class, 'delete'])->name('del-EFolder15');
    Route::get('/electrical/EFolder15/deleteAll/{category}', [EFolder15Controller::class, 'destroy'])->name('destroy-EFolder15');
    //EFolder16    
    Route::get('/electrical/EFolder16', [EFolder16Controller::class, 'index'])->name('EFolder16');
    Route::get('/electrical/EFolder16/{id}', [EFolder16Controller::class, 'open'])->name('open-EFolder16');
    Route::get('/electrical/EFolder16/view/{id}', [EFolder16Controller::class, 'view'])->name('view-EFolder16');
    Route::post('/electrical/EFolder16/pw/{id}', [EFolder16Controller::class, 'password'])->name('pw-EFolder16');
    Route::post('/electrical/add-EFolder16', [EFolder16Controller::class, 'upload'])->name('up-EFolder16');
    Route::get('/electrical/EFolder16/delete/{id}', [EFolder16Controller::class, 'delete'])->name('del-EFolder16');
    Route::get('/electrical/EFolder16/deleteAll/{category}', [EFolder16Controller::class, 'destroy'])->name('destroy-EFolder16');
    //EFolder17    
    Route::get('/electrical/EFolder17', [EFolder17Controller::class, 'index'])->name('EFolder17');
    Route::get('/electrical/EFolder17/{id}', [EFolder17Controller::class, 'open'])->name('open-EFolder17');
    Route::get('/electrical/EFolder17/view/{id}', [EFolder17Controller::class, 'view'])->name('view-EFolder17');
    Route::post('/electrical/EFolder17/pw/{id}', [EFolder17Controller::class, 'password'])->name('pw-EFolder17');
    Route::post('/electrical/add-EFolder17', [EFolder17Controller::class, 'upload'])->name('up-EFolder17');
    Route::get('/electrical/EFolder17/delete/{id}', [EFolder17Controller::class, 'delete'])->name('del-EFolder17');
    Route::get('/electrical/EFolder17/deleteAll/{category}', [EFolder17Controller::class, 'destroy'])->name('destroy-EFolder17');
    //EFolder18    
    Route::get('/electrical/EFolder18', [EFolder18Controller::class, 'index'])->name('EFolder18');
    Route::get('/electrical/EFolder18/{id}', [EFolder18Controller::class, 'open'])->name('open-EFolder18');
    Route::get('/electrical/EFolder18/view/{id}', [EFolder18Controller::class, 'view'])->name('view-EFolder18');
    Route::post('/electrical/EFolder18/pw/{id}', [EFolder18Controller::class, 'password'])->name('pw-EFolder18');
    Route::post('/electrical/add-EFolder18', [EFolder18Controller::class, 'upload'])->name('up-EFolder18');
    Route::get('/electrical/EFolder18/delete/{id}', [EFolder18Controller::class, 'delete'])->name('del-EFolder18');
    Route::get('/electrical/EFolder18/deleteAll/{category}', [EFolder18Controller::class, 'destroy'])->name('destroy-EFolder18');
    //EFolder19    
    Route::get('/electrical/EFolder19', [EFolder19Controller::class, 'index'])->name('EFolder19');
    Route::get('/electrical/EFolder19/{id}', [EFolder19Controller::class, 'open'])->name('open-EFolder19');
    Route::get('/electrical/EFolder19/view/{id}', [EFolder19Controller::class, 'view'])->name('view-EFolder19');
    Route::post('/electrical/EFolder19/pw/{id}', [EFolder19Controller::class, 'password'])->name('pw-EFolder19');
    Route::post('/electrical/add-EFolder19', [EFolder19Controller::class, 'upload'])->name('up-EFolder19');
    Route::get('/electrical/EFolder19/delete/{id}', [EFolder19Controller::class, 'delete'])->name('del-EFolder19');
    Route::get('/electrical/EFolder19/deleteAll/{category}', [EFolder19Controller::class, 'destroy'])->name('destroy-EFolder19');
    //EFolder20    
    Route::get('/electrical/EFolder20', [EFolder20Controller::class, 'index'])->name('EFolder20');
    Route::get('/electrical/EFolder20/{id}', [EFolder20Controller::class, 'open'])->name('open-EFolder20');
    Route::get('/electrical/EFolder20/view/{id}', [EFolder20Controller::class, 'view'])->name('view-EFolder20');
    Route::post('/electrical/EFolder20/pw/{id}', [EFolder20Controller::class, 'password'])->name('pw-EFolder20');
    Route::post('/electrical/add-EFolder20', [EFolder20Controller::class, 'upload'])->name('up-EFolder20');
    Route::get('/electrical/EFolder20/delete/{id}', [EFolder20Controller::class, 'delete'])->name('del-EFolder20');
    Route::get('/electrical/EFolder20/deleteAll/{category}', [EFolder20Controller::class, 'destroy'])->name('destroy-EFolder20');
    //EFolder21    
    Route::get('/electrical/EFolder21', [EFolder21Controller::class, 'index'])->name('EFolder21');
    Route::get('/electrical/EFolder21/{id}', [EFolder21Controller::class, 'open'])->name('open-EFolder21');
    Route::get('/electrical/EFolder21/view/{id}', [EFolder21Controller::class, 'view'])->name('view-EFolder21');
    Route::post('/electrical/EFolder21/pw/{id}', [EFolder21Controller::class, 'password'])->name('pw-EFolder21');
    Route::post('/electrical/add-EFolder21', [EFolder21Controller::class, 'upload'])->name('up-EFolder21');
    Route::get('/electrical/EFolder21/delete/{id}', [EFolder21Controller::class, 'delete'])->name('del-EFolder21');
    Route::get('/electrical/EFolder21/deleteAll/{category}', [EFolder21Controller::class, 'destroy'])->name('destroy-EFolder21');
    //EFolder22    
    Route::get('/electrical/EFolder22', [EFolder22Controller::class, 'index'])->name('EFolder22');
    Route::get('/electrical/EFolder22/{id}', [EFolder22Controller::class, 'open'])->name('open-EFolder22');
    Route::get('/electrical/EFolder22/view/{id}', [EFolder22Controller::class, 'view'])->name('view-EFolder22');
    Route::post('/electrical/EFolder22/pw/{id}', [EFolder22Controller::class, 'password'])->name('pw-EFolder22');
    Route::post('/electrical/add-EFolder22', [EFolder22Controller::class, 'upload'])->name('up-EFolder22');
    Route::get('/electrical/EFolder22/delete/{id}', [EFolder22Controller::class, 'delete'])->name('del-EFolder22');
    Route::get('/electrical/EFolder22/deleteAll/{category}', [EFolder22Controller::class, 'destroy'])->name('destroy-EFolder22');
    //EFolder23    
    Route::get('/electrical/EFolder23', [EFolder23Controller::class, 'index'])->name('EFolder23');
    Route::get('/electrical/EFolder23/{id}', [EFolder23Controller::class, 'open'])->name('open-EFolder23');
    Route::get('/electrical/EFolder23/view/{id}', [EFolder23Controller::class, 'view'])->name('view-EFolder23');
    Route::post('/electrical/EFolder23/pw/{id}', [EFolder23Controller::class, 'password'])->name('pw-EFolder23');
    Route::post('/electrical/add-EFolder23', [EFolder23Controller::class, 'upload'])->name('up-EFolder23');
    Route::get('/electrical/EFolder23/delete/{id}', [EFolder23Controller::class, 'delete'])->name('del-EFolder23');
    Route::get('/electrical/EFolder23/deleteAll/{category}', [EFolder23Controller::class, 'destroy'])->name('destroy-EFolder23');
    //EFolder24    
    Route::get('/electrical/EFolder24', [EFolder24Controller::class, 'index'])->name('EFolder24');
    Route::get('/electrical/EFolder24/{id}', [EFolder24Controller::class, 'open'])->name('open-EFolder24');
    Route::get('/electrical/EFolder24/view/{id}', [EFolder24Controller::class, 'view'])->name('view-EFolder24');
    Route::post('/electrical/EFolder24/pw/{id}', [EFolder24Controller::class, 'password'])->name('pw-EFolder24');
    Route::post('/electrical/add-EFolder24', [EFolder24Controller::class, 'upload'])->name('up-EFolder24');
    Route::get('/electrical/EFolder24/delete/{id}', [EFolder24Controller::class, 'delete'])->name('del-EFolder24');
    Route::get('/electrical/EFolder24/deleteAll/{category}', [EFolder24Controller::class, 'destroy'])->name('destroy-EFolder24');
    //EFolder25    
    Route::get('/electrical/EFolder25', [EFolder25Controller::class, 'index'])->name('EFolder25');
    Route::get('/electrical/EFolder25/{id}', [EFolder25Controller::class, 'open'])->name('open-EFolder25');
    Route::get('/electrical/EFolder25/view/{id}', [EFolder25Controller::class, 'view'])->name('view-EFolder25');
    Route::post('/electrical/EFolder25/pw/{id}', [EFolder25Controller::class, 'password'])->name('pw-EFolder25');
    Route::post('/electrical/add-EFolder25', [EFolder25Controller::class, 'upload'])->name('up-EFolder25');
    Route::get('/electrical/EFolder25/delete/{id}', [EFolder25Controller::class, 'delete'])->name('del-EFolder25');
    Route::get('/electrical/EFolder25/deleteAll/{category}', [EFolder25Controller::class, 'destroy'])->name('destroy-EFolder25');
    //EFolder26    
    Route::get('/electrical/EFolder26', [EFolder26Controller::class, 'index'])->name('EFolder26');
    Route::get('/electrical/EFolder26/{id}', [EFolder26Controller::class, 'open'])->name('open-EFolder26');
    Route::get('/electrical/EFolder26/view/{id}', [EFolder26Controller::class, 'view'])->name('view-EFolder26');
    Route::post('/electrical/EFolder26/pw/{id}', [EFolder26Controller::class, 'password'])->name('pw-EFolder26');
    Route::post('/electrical/add-EFolder26', [EFolder26Controller::class, 'upload'])->name('up-EFolder26');
    Route::get('/electrical/EFolder26/delete/{id}', [EFolder26Controller::class, 'delete'])->name('del-EFolder26');
    Route::get('/electrical/EFolder26/deleteAll/{category}', [EFolder26Controller::class, 'destroy'])->name('destroy-EFolder26');
    //EFolder27    
    Route::get('/electrical/EFolder27', [EFolder27Controller::class, 'index'])->name('EFolder27');
    Route::get('/electrical/EFolder27/{id}', [EFolder27Controller::class, 'open'])->name('open-EFolder27');
    Route::get('/electrical/EFolder27/view/{id}', [EFolder27Controller::class, 'view'])->name('view-EFolder27');
    Route::post('/electrical/EFolder27/pw/{id}', [EFolder27Controller::class, 'password'])->name('pw-EFolder27');
    Route::post('/electrical/add-EFolder27', [EFolder27Controller::class, 'upload'])->name('up-EFolder27');
    Route::get('/electrical/EFolder27/delete/{id}', [EFolder27Controller::class, 'delete'])->name('del-EFolder27');
    Route::get('/electrical/EFolder27/deleteAll/{category}', [EFolder27Controller::class, 'destroy'])->name('destroy-EFolder27');
    //EFolder28    
    Route::get('/electrical/EFolder28', [EFolder28Controller::class, 'index'])->name('EFolder28');
    Route::get('/electrical/EFolder28/{id}', [EFolder28Controller::class, 'open'])->name('open-EFolder28');
    Route::get('/electrical/EFolder28/view/{id}', [EFolder28Controller::class, 'view'])->name('view-EFolder28');
    Route::post('/electrical/EFolder28/pw/{id}', [EFolder28Controller::class, 'password'])->name('pw-EFolder28');
    Route::post('/electrical/add-EFolder28', [EFolder28Controller::class, 'upload'])->name('up-EFolder28');
    Route::get('/electrical/EFolder28/delete/{id}', [EFolder28Controller::class, 'delete'])->name('del-EFolder28');
    Route::get('/electrical/EFolder28/deleteAll/{category}', [EFolder28Controller::class, 'destroy'])->name('destroy-EFolder28');
    //EFolder29    
    Route::get('/electrical/EFolder29', [EFolder29Controller::class, 'index'])->name('EFolder29');
    Route::get('/electrical/EFolder29/{id}', [EFolder29Controller::class, 'open'])->name('open-EFolder29');
    Route::get('/electrical/EFolder29/view/{id}', [EFolder29Controller::class, 'view'])->name('view-EFolder29');
    Route::post('/electrical/EFolder29/pw/{id}', [EFolder29Controller::class, 'password'])->name('pw-EFolder29');
    Route::post('/electrical/add-EFolder29', [EFolder29Controller::class, 'upload'])->name('up-EFolder29');
    Route::get('/electrical/EFolder29/delete/{id}', [EFolder29Controller::class, 'delete'])->name('del-EFolder29');
    Route::get('/electrical/EFolder29/deleteAll/{category}', [EFolder29Controller::class, 'destroy'])->name('destroy-EFolder29');
    //EFolder30    
    Route::get('/electrical/EFolder30', [EFolder30Controller::class, 'index'])->name('EFolder30');
    Route::get('/electrical/EFolder30/{id}', [EFolder30Controller::class, 'open'])->name('open-EFolder30');
    Route::get('/electrical/EFolder30/view/{id}', [EFolder30Controller::class, 'view'])->name('view-EFolder30');
    Route::post('/electrical/EFolder30/pw/{id}', [EFolder30Controller::class, 'password'])->name('pw-EFolder30');
    Route::post('/electrical/add-EFolder30', [EFolder30Controller::class, 'upload'])->name('up-EFolder30');
    Route::get('/electrical/EFolder30/delete/{id}', [EFolder30Controller::class, 'delete'])->name('del-EFolder30');
    Route::get('/electrical/EFolder30/deleteAll/{category}', [EFolder30Controller::class, 'destroy'])->name('destroy-EFolder30');



    //Area6    
    Route::get('/Area6', [Area6Controller::class, 'index'])->name('Area6');
    Route::get('/Area6/{id}', [Area6Controller::class, 'open'])->name('open-Area6');
    Route::get('/Area6/view/{id}', [Area6Controller::class, 'view'])->name('view-Area6');
    Route::post('/Area6/pw/{id}', [Area6Controller::class, 'password'])->name('pw-Area6');
    Route::post('/add-Area6', [Area6Controller::class, 'upload'])->name('up-Area6');
    Route::get('/Area6/delete/{id}', [Area6Controller::class, 'delete'])->name('del-Area6');
    Route::get('/Area6/deleteAll/{category}', [Area6Controller::class, 'destroy'])->name('destroy-Area6');
    //Area7    
    Route::get('/Area7', [Area7Controller::class, 'index'])->name('Area7');
    Route::get('/Area7/{id}', [Area7Controller::class, 'open'])->name('open-Area7');
    Route::get('/Area7/view/{id}', [Area7Controller::class, 'view'])->name('view-Area7');
    Route::post('/Area7/pw/{id}', [Area7Controller::class, 'password'])->name('pw-Area7');
    Route::post('/add-Area7', [Area7Controller::class, 'upload'])->name('up-Area7');
    Route::get('/Area7/delete/{id}', [Area7Controller::class, 'delete'])->name('del-Area7');
    Route::get('/Area7/deleteAll/{category}', [Area7Controller::class, 'destroy'])->name('destroy-Area7');
    //Area8    
    Route::get('/Area8', [Area8Controller::class, 'index'])->name('Area8');
    Route::get('/Area8/{id}', [Area8Controller::class, 'open'])->name('open-Area8');
    Route::get('/Area8/view/{id}', [Area8Controller::class, 'view'])->name('view-Area8');
    Route::post('/Area8/pw/{id}', [Area8Controller::class, 'password'])->name('pw-Area8');
    Route::post('/add-Area8', [Area8Controller::class, 'upload'])->name('up-Area8');
    Route::get('/Area8/delete/{id}', [Area8Controller::class, 'delete'])->name('del-Area8');
    Route::get('/Area8/deleteAll/{category}', [Area8Controller::class, 'destroy'])->name('destroy-Area8');
    //Area9    
    Route::get('/Area9', [Area9Controller::class, 'index'])->name('Area9');
    Route::get('/Area9/{id}', [Area9Controller::class, 'open'])->name('open-Area9');
    Route::get('/Area9/view/{id}', [Area9Controller::class, 'view'])->name('view-Area9');
    Route::post('/Area9/pw/{id}', [Area9Controller::class, 'password'])->name('pw-Area9');
    Route::post('/add-Area9', [Area9Controller::class, 'upload'])->name('up-Area9');
    Route::get('/Area9/delete/{id}', [Area9Controller::class, 'delete'])->name('del-Area9');
    Route::get('/Area9/deleteAll/{category}', [Area9Controller::class, 'destroy'])->name('destroy-Area9');
    //Area10    
    Route::get('/Area10', [Area10Controller::class, 'index'])->name('Area10');
    Route::get('/Area10/{id}', [Area10Controller::class, 'open'])->name('open-Area10');
    Route::get('/Area10/view/{id}', [Area10Controller::class, 'view'])->name('view-Area10');
    Route::post('/Area10/pw/{id}', [Area10Controller::class, 'password'])->name('pw-Area10');
    Route::post('/add-Area10', [Area10Controller::class, 'upload'])->name('up-Area10');
    Route::get('/Area10/delete/{id}', [Area10Controller::class, 'delete'])->name('del-Area10');
    Route::get('/Area10/deleteAll/{category}', [Area10Controller::class, 'destroy'])->name('destroy-Area10');
    //Area11    
    Route::get('/Area11', [Area11Controller::class, 'index'])->name('Area11');
    Route::get('/Area11/{id}', [Area11Controller::class, 'open'])->name('open-Area11');
    Route::get('/Area11/view/{id}', [Area11Controller::class, 'view'])->name('view-Area11');
    Route::post('/Area11/pw/{id}', [Area11Controller::class, 'password'])->name('pw-Area11');
    Route::post('/add-Area11', [Area11Controller::class, 'upload'])->name('up-Area11');
    Route::get('/Area11/delete/{id}', [Area11Controller::class, 'delete'])->name('del-Area11');
    Route::get('/Area11/deleteAll/{category}', [Area11Controller::class, 'destroy'])->name('destroy-Area11');
    //Area12    
    Route::get('/Area12', [Area12Controller::class, 'index'])->name('Area12');
    Route::get('/Area12/{id}', [Area12Controller::class, 'open'])->name('open-Area12');
    Route::get('/Area12/view/{id}', [Area12Controller::class, 'view'])->name('view-Area12');
    Route::post('/Area12/pw/{id}', [Area12Controller::class, 'password'])->name('pw-Area12');
    Route::post('/add-Area12', [Area12Controller::class, 'upload'])->name('up-Area12');
    Route::get('/Area12/delete/{id}', [Area12Controller::class, 'delete'])->name('del-Area12');
    Route::get('/Area12/deleteAll/{category}', [Area12Controller::class, 'destroy'])->name('destroy-Area12');
    //Area13    
    Route::get('/Area13', [Area13Controller::class, 'index'])->name('Area13');
    Route::get('/Area13/{id}', [Area13Controller::class, 'open'])->name('open-Area13');
    Route::get('/Area13/view/{id}', [Area13Controller::class, 'view'])->name('view-Area13');
    Route::post('/Area13/pw/{id}', [Area13Controller::class, 'password'])->name('pw-Area13');
    Route::post('/add-Area13', [Area13Controller::class, 'upload'])->name('up-Area13');
    Route::get('/Area13/delete/{id}', [Area13Controller::class, 'delete'])->name('del-Area13');
    Route::get('/Area13/deleteAll/{category}', [Area13Controller::class, 'destroy'])->name('destroy-Area13');
    //Area14    
    Route::get('/Area14', [Area14Controller::class, 'index'])->name('Area14');
    Route::get('/Area14/{id}', [Area14Controller::class, 'open'])->name('open-Area14');
    Route::get('/Area14/view/{id}', [Area14Controller::class, 'view'])->name('view-Area14');
    Route::post('/Area14/pw/{id}', [Area14Controller::class, 'password'])->name('pw-Area14');
    Route::post('/add-Area14', [Area14Controller::class, 'upload'])->name('up-Area14');
    Route::get('/Area14/delete/{id}', [Area14Controller::class, 'delete'])->name('del-Area14');
    Route::get('/Area14/deleteAll/{category}', [Area14Controller::class, 'destroy'])->name('destroy-Area14');
    //Area15    
    Route::get('/Area15', [Area15Controller::class, 'index'])->name('Area15');
    Route::get('/Area15/{id}', [Area15Controller::class, 'open'])->name('open-Area15');
    Route::get('/Area15/view/{id}', [Area15Controller::class, 'view'])->name('view-Area15');
    Route::post('/Area15/pw/{id}', [Area15Controller::class, 'password'])->name('pw-Area15');
    Route::post('/add-Area15', [Area15Controller::class, 'upload'])->name('up-Area15');
    Route::get('/Area15/delete/{id}', [Area15Controller::class, 'delete'])->name('del-Area15');
    Route::get('/Area15/deleteAll/{category}', [Area15Controller::class, 'destroy'])->name('destroy-Area15');
    //Area16    
    Route::get('/Area16', [Area16Controller::class, 'index'])->name('Area16');
    Route::get('/Area16/{id}', [Area16Controller::class, 'open'])->name('open-Area16');
    Route::get('/Area16/view/{id}', [Area16Controller::class, 'view'])->name('view-Area16');
    Route::post('/Area16/pw/{id}', [Area16Controller::class, 'password'])->name('pw-Area16');
    Route::post('/add-Area16', [Area16Controller::class, 'upload'])->name('up-Area16');
    Route::get('/Area16/delete/{id}', [Area16Controller::class, 'delete'])->name('del-Area16');
    Route::get('/Area16/deleteAll/{category}', [Area16Controller::class, 'destroy'])->name('destroy-Area16');
    //Area17    
    Route::get('/Area17', [Area17Controller::class, 'index'])->name('Area17');
    Route::get('/Area17/{id}', [Area17Controller::class, 'open'])->name('open-Area17');
    Route::get('/Area17/view/{id}', [Area17Controller::class, 'view'])->name('view-Area17');
    Route::post('/Area17/pw/{id}', [Area17Controller::class, 'password'])->name('pw-Area17');
    Route::post('/add-Area17', [Area17Controller::class, 'upload'])->name('up-Area17');
    Route::get('/Area17/delete/{id}', [Area17Controller::class, 'delete'])->name('del-Area17');
    Route::get('/Area17/deleteAll/{category}', [Area17Controller::class, 'destroy'])->name('destroy-Area17');
    //Area18    
    Route::get('/Area18', [Area18Controller::class, 'index'])->name('Area18');
    Route::get('/Area18/{id}', [Area18Controller::class, 'open'])->name('open-Area18');
    Route::get('/Area18/view/{id}', [Area18Controller::class, 'view'])->name('view-Area18');
    Route::post('/Area18/pw/{id}', [Area18Controller::class, 'password'])->name('pw-Area18');
    Route::post('/add-Area18', [Area18Controller::class, 'upload'])->name('up-Area18');
    Route::get('/Area18/delete/{id}', [Area18Controller::class, 'delete'])->name('del-Area18');
    Route::get('/Area18/deleteAll/{category}', [Area18Controller::class, 'destroy'])->name('destroy-Area18');
    //Area19    
    Route::get('/Area19', [Area19Controller::class, 'index'])->name('Area19');
    Route::get('/Area19/{id}', [Area19Controller::class, 'open'])->name('open-Area19');
    Route::get('/Area19/view/{id}', [Area19Controller::class, 'view'])->name('view-Area19');
    Route::post('/Area19/pw/{id}', [Area19Controller::class, 'password'])->name('pw-Area19');
    Route::post('/add-Area19', [Area19Controller::class, 'upload'])->name('up-Area19');
    Route::get('/Area19/delete/{id}', [Area19Controller::class, 'delete'])->name('del-Area19');
    Route::get('/Area19/deleteAll/{category}', [Area19Controller::class, 'destroy'])->name('destroy-Area19');
    //Area20    
    Route::get('/Area20', [Area20Controller::class, 'index'])->name('Area20');
    Route::get('/Area20/{id}', [Area20Controller::class, 'open'])->name('open-Area20');
    Route::get('/Area20/view/{id}', [Area20Controller::class, 'view'])->name('view-Area20');
    Route::post('/Area20/pw/{id}', [Area20Controller::class, 'password'])->name('pw-Area20');
    Route::post('/add-Area20', [Area20Controller::class, 'upload'])->name('up-Area20');
    Route::get('/Area20/delete/{id}', [Area20Controller::class, 'delete'])->name('del-Area20');
    Route::get('/Area20/deleteAll/{category}', [Area20Controller::class, 'destroy'])->name('destroy-Area20');
    //Area21    
    Route::get('/Area21', [Area21Controller::class, 'index'])->name('Area21');
    Route::get('/Area21/{id}', [Area21Controller::class, 'open'])->name('open-Area21');
    Route::get('/Area21/view/{id}', [Area21Controller::class, 'view'])->name('view-Area21');
    Route::post('/Area21/pw/{id}', [Area21Controller::class, 'password'])->name('pw-Area21');
    Route::post('/add-Area21', [Area21Controller::class, 'upload'])->name('up-Area21');
    Route::get('/Area21/delete/{id}', [Area21Controller::class, 'delete'])->name('del-Area21');
    Route::get('/Area21/deleteAll/{category}', [Area21Controller::class, 'destroy'])->name('destroy-Area21');
    //Area22    
    Route::get('/Area22', [Area22Controller::class, 'index'])->name('Area22');
    Route::get('/Area22/{id}', [Area22Controller::class, 'open'])->name('open-Area22');
    Route::get('/Area22/view/{id}', [Area22Controller::class, 'view'])->name('view-Area22');
    Route::post('/Area22/pw/{id}', [Area22Controller::class, 'password'])->name('pw-Area22');
    Route::post('/add-Area22', [Area22Controller::class, 'upload'])->name('up-Area22');
    Route::get('/Area22/delete/{id}', [Area22Controller::class, 'delete'])->name('del-Area22');
    Route::get('/Area22/deleteAll/{category}', [Area22Controller::class, 'destroy'])->name('destroy-Area22');
    //Area23    
    Route::get('/Area23', [Area23Controller::class, 'index'])->name('Area23');
    Route::get('/Area23/{id}', [Area23Controller::class, 'open'])->name('open-Area23');
    Route::get('/Area23/view/{id}', [Area23Controller::class, 'view'])->name('view-Area23');
    Route::post('/Area23/pw/{id}', [Area23Controller::class, 'password'])->name('pw-Area23');
    Route::post('/add-Area23', [Area23Controller::class, 'upload'])->name('up-Area23');
    Route::get('/Area23/delete/{id}', [Area23Controller::class, 'delete'])->name('del-Area23');
    Route::get('/Area23/deleteAll/{category}', [Area23Controller::class, 'destroy'])->name('destroy-Area23');
    //Area24    
    Route::get('/Area24', [Area24Controller::class, 'index'])->name('Area24');
    Route::get('/Area24/{id}', [Area24Controller::class, 'open'])->name('open-Area24');
    Route::get('/Area24/view/{id}', [Area24Controller::class, 'view'])->name('view-Area24');
    Route::post('/Area24/pw/{id}', [Area24Controller::class, 'password'])->name('pw-Area24');
    Route::post('/add-Area24', [Area24Controller::class, 'upload'])->name('up-Area24');
    Route::get('/Area24/delete/{id}', [Area24Controller::class, 'delete'])->name('del-Area24');
    Route::get('/Area24/deleteAll/{category}', [Area24Controller::class, 'destroy'])->name('destroy-Area24');
    //Area25    
    Route::get('/Area25', [Area25Controller::class, 'index'])->name('Area25');
    Route::get('/Area25/{id}', [Area25Controller::class, 'open'])->name('open-Area25');
    Route::get('/Area25/view/{id}', [Area25Controller::class, 'view'])->name('view-Area25');
    Route::post('/Area25/pw/{id}', [Area25Controller::class, 'password'])->name('pw-Area25');
    Route::post('/add-Area25', [Area25Controller::class, 'upload'])->name('up-Area25');
    Route::get('/Area25/delete/{id}', [Area25Controller::class, 'delete'])->name('del-Area25');
    Route::get('/Area25/deleteAll/{category}', [Area25Controller::class, 'destroy'])->name('destroy-Area25');
    //Area26    
    Route::get('/Area26', [Area26Controller::class, 'index'])->name('Area26');
    Route::get('/Area26/{id}', [Area26Controller::class, 'open'])->name('open-Area26');
    Route::get('/Area26/view/{id}', [Area26Controller::class, 'view'])->name('view-Area26');
    Route::post('/Area26/pw/{id}', [Area26Controller::class, 'password'])->name('pw-Area26');
    Route::post('/add-Area26', [Area26Controller::class, 'upload'])->name('up-Area26');
    Route::get('/Area26/delete/{id}', [Area26Controller::class, 'delete'])->name('del-Area26');
    Route::get('/Area26/deleteAll/{category}', [Area26Controller::class, 'destroy'])->name('destroy-Area26');
    //Area27    
    Route::get('/Area27', [Area27Controller::class, 'index'])->name('Area27');
    Route::get('/Area27/{id}', [Area27Controller::class, 'open'])->name('open-Area27');
    Route::get('/Area27/view/{id}', [Area27Controller::class, 'view'])->name('view-Area27');
    Route::post('/Area27/pw/{id}', [Area27Controller::class, 'password'])->name('pw-Area27');
    Route::post('/add-Area27', [Area27Controller::class, 'upload'])->name('up-Area27');
    Route::get('/Area27/delete/{id}', [Area27Controller::class, 'delete'])->name('del-Area27');
    Route::get('/Area27/deleteAll/{category}', [Area27Controller::class, 'destroy'])->name('destroy-Area27');
    //Area28    
    Route::get('/Area28', [Area28Controller::class, 'index'])->name('Area28');
    Route::get('/Area28/{id}', [Area28Controller::class, 'open'])->name('open-Area28');
    Route::get('/Area28/view/{id}', [Area28Controller::class, 'view'])->name('view-Area28');
    Route::post('/Area28/pw/{id}', [Area28Controller::class, 'password'])->name('pw-Area28');
    Route::post('/add-Area28', [Area28Controller::class, 'upload'])->name('up-Area28');
    Route::get('/Area28/delete/{id}', [Area28Controller::class, 'delete'])->name('del-Area28');
    Route::get('/Area28/deleteAll/{category}', [Area28Controller::class, 'destroy'])->name('destroy-Area28');
    //Area29    
    Route::get('/Area29', [Area29Controller::class, 'index'])->name('Area29');
    Route::get('/Area29/{id}', [Area29Controller::class, 'open'])->name('open-Area29');
    Route::get('/Area29/view/{id}', [Area29Controller::class, 'view'])->name('view-Area29');
    Route::post('/Area29/pw/{id}', [Area29Controller::class, 'password'])->name('pw-Area29');
    Route::post('/add-Area29', [Area29Controller::class, 'upload'])->name('up-Area29');
    Route::get('/Area29/delete/{id}', [Area29Controller::class, 'delete'])->name('del-Area29');
    Route::get('/Area29/deleteAll/{category}', [Area29Controller::class, 'destroy'])->name('destroy-Area29');
    //Area30    
    Route::get('/Area30', [Area30Controller::class, 'index'])->name('Area30');
    Route::get('/Area30/{id}', [Area30Controller::class, 'open'])->name('open-Area30');
    Route::get('/Area30/view/{id}', [Area30Controller::class, 'view'])->name('view-Area30');
    Route::post('/Area30/pw/{id}', [Area30Controller::class, 'password'])->name('pw-Area30');
    Route::post('/add-Area30', [Area30Controller::class, 'upload'])->name('up-Area30');
    Route::get('/Area30/delete/{id}', [Area30Controller::class, 'delete'])->name('del-Area30');
    Route::get('/Area30/deleteAll/{category}', [Area30Controller::class, 'destroy'])->name('destroy-Area30');
    //Area31    
    Route::get('/Area31', [Area31Controller::class, 'index'])->name('Area31');
    Route::get('/Area31/{id}', [Area31Controller::class, 'open'])->name('open-Area31');
    Route::get('/Area31/view/{id}', [Area31Controller::class, 'view'])->name('view-Area31');
    Route::post('/Area31/pw/{id}', [Area31Controller::class, 'password'])->name('pw-Area31');
    Route::post('/add-Area31', [Area31Controller::class, 'upload'])->name('up-Area31');
    Route::get('/Area31/delete/{id}', [Area31Controller::class, 'delete'])->name('del-Area31');
    Route::get('/Area31/deleteAll/{category}', [Area31Controller::class, 'destroy'])->name('destroy-Area31');
    //Area32    
    Route::get('/Area32', [Area32Controller::class, 'index'])->name('Area32');
    Route::get('/Area32/{id}', [Area32Controller::class, 'open'])->name('open-Area32');
    Route::get('/Area32/view/{id}', [Area32Controller::class, 'view'])->name('view-Area32');
    Route::post('/Area32/pw/{id}', [Area32Controller::class, 'password'])->name('pw-Area32');
    Route::post('/add-Area32', [Area32Controller::class, 'upload'])->name('up-Area32');
    Route::get('/Area32/delete/{id}', [Area32Controller::class, 'delete'])->name('del-Area32');
    Route::get('/Area32/deleteAll/{category}', [Area32Controller::class, 'destroy'])->name('destroy-Area32');
    //Area33    
    Route::get('/Area33', [Area33Controller::class, 'index'])->name('Area33');
    Route::get('/Area33/{id}', [Area33Controller::class, 'open'])->name('open-Area33');
    Route::get('/Area33/view/{id}', [Area33Controller::class, 'view'])->name('view-Area33');
    Route::post('/Area33/pw/{id}', [Area33Controller::class, 'password'])->name('pw-Area33');
    Route::post('/add-Area33', [Area33Controller::class, 'upload'])->name('up-Area33');
    Route::get('/Area33/delete/{id}', [Area33Controller::class, 'delete'])->name('del-Area33');
    Route::get('/Area33/deleteAll/{category}', [Area33Controller::class, 'destroy'])->name('destroy-Area33');
    //Area34    
    Route::get('/Area34', [Area34Controller::class, 'index'])->name('Area34');
    Route::get('/Area34/{id}', [Area34Controller::class, 'open'])->name('open-Area34');
    Route::get('/Area34/view/{id}', [Area34Controller::class, 'view'])->name('view-Area34');
    Route::post('/Area34/pw/{id}', [Area34Controller::class, 'password'])->name('pw-Area34');
    Route::post('/add-Area34', [Area34Controller::class, 'upload'])->name('up-Area34');
    Route::get('/Area34/delete/{id}', [Area34Controller::class, 'delete'])->name('del-Area34');
    Route::get('/Area34/deleteAll/{category}', [Area34Controller::class, 'destroy'])->name('destroy-Area34');
    //Area35    
    Route::get('/Area35', [Area35Controller::class, 'index'])->name('Area35');
    Route::get('/Area35/{id}', [Area35Controller::class, 'open'])->name('open-Area35');
    Route::get('/Area35/view/{id}', [Area35Controller::class, 'view'])->name('view-Area35');
    Route::post('/Area35/pw/{id}', [Area35Controller::class, 'password'])->name('pw-Area35');
    Route::post('/add-Area35', [Area35Controller::class, 'upload'])->name('up-Area35');
    Route::get('/Area35/delete/{id}', [Area35Controller::class, 'delete'])->name('del-Area35');
    Route::get('/Area35/deleteAll/{category}', [Area35Controller::class, 'destroy'])->name('destroy-Area35');
    //Area36    
    Route::get('/Area36', [Area36Controller::class, 'index'])->name('Area36');
    Route::get('/Area36/{id}', [Area36Controller::class, 'open'])->name('open-Area36');
    Route::get('/Area36/view/{id}', [Area36Controller::class, 'view'])->name('view-Area36');
    Route::post('/Area36/pw/{id}', [Area36Controller::class, 'password'])->name('pw-Area36');
    Route::post('/add-Area36', [Area36Controller::class, 'upload'])->name('up-Area36');
    Route::get('/Area36/delete/{id}', [Area36Controller::class, 'delete'])->name('del-Area36');
    Route::get('/Area36/deleteAll/{category}', [Area36Controller::class, 'destroy'])->name('destroy-Area36');
    //Area37    
    Route::get('/Area37', [Area37Controller::class, 'index'])->name('Area37');
    Route::get('/Area37/{id}', [Area37Controller::class, 'open'])->name('open-Area37');
    Route::get('/Area37/view/{id}', [Area37Controller::class, 'view'])->name('view-Area37');
    Route::post('/Area37/pw/{id}', [Area37Controller::class, 'password'])->name('pw-Area37');
    Route::post('/add-Area37', [Area37Controller::class, 'upload'])->name('up-Area37');
    Route::get('/Area37/delete/{id}', [Area37Controller::class, 'delete'])->name('del-Area37');
    Route::get('/Area37/deleteAll/{category}', [Area37Controller::class, 'destroy'])->name('destroy-Area37');
    //Area38    
    Route::get('/Area38', [Area38Controller::class, 'index'])->name('Area38');
    Route::get('/Area38/{id}', [Area38Controller::class, 'open'])->name('open-Area38');
    Route::get('/Area38/view/{id}', [Area38Controller::class, 'view'])->name('view-Area38');
    Route::post('/Area38/pw/{id}', [Area38Controller::class, 'password'])->name('pw-Area38');
    Route::post('/add-Area38', [Area38Controller::class, 'upload'])->name('up-Area38');
    Route::get('/Area38/delete/{id}', [Area38Controller::class, 'delete'])->name('del-Area38');
    Route::get('/Area38/deleteAll/{category}', [Area38Controller::class, 'destroy'])->name('destroy-Area38');
    //Area39    
    Route::get('/Area39', [Area39Controller::class, 'index'])->name('Area39');
    Route::get('/Area39/{id}', [Area39Controller::class, 'open'])->name('open-Area39');
    Route::get('/Area39/view/{id}', [Area39Controller::class, 'view'])->name('view-Area39');
    Route::post('/Area39/pw/{id}', [Area39Controller::class, 'password'])->name('pw-Area39');
    Route::post('/add-Area39', [Area39Controller::class, 'upload'])->name('up-Area39');
    Route::get('/Area39/delete/{id}', [Area39Controller::class, 'delete'])->name('del-Area39');
    Route::get('/Area39/deleteAll/{category}', [Area39Controller::class, 'destroy'])->name('destroy-Area39');
    //Area40    
    Route::get('/Area40', [Area40Controller::class, 'index'])->name('Area40');
    Route::get('/Area40/{id}', [Area40Controller::class, 'open'])->name('open-Area40');
    Route::get('/Area40/view/{id}', [Area40Controller::class, 'view'])->name('view-Area40');
    Route::post('/Area40/pw/{id}', [Area40Controller::class, 'password'])->name('pw-Area40');
    Route::post('/add-Area40', [Area40Controller::class, 'upload'])->name('up-Area40');
    Route::get('/Area40/delete/{id}', [Area40Controller::class, 'delete'])->name('del-Area40');
    Route::get('/Area40/deleteAll/{category}', [Area40Controller::class, 'destroy'])->name('destroy-Area40');
    //Area41    
    Route::get('/Area41', [Area41Controller::class, 'index'])->name('Area41');
    Route::get('/Area41/{id}', [Area41Controller::class, 'open'])->name('open-Area41');
    Route::get('/Area41/view/{id}', [Area41Controller::class, 'view'])->name('view-Area41');
    Route::post('/Area41/pw/{id}', [Area41Controller::class, 'password'])->name('pw-Area41');
    Route::post('/add-Area41', [Area41Controller::class, 'upload'])->name('up-Area41');
    Route::get('/Area41/delete/{id}', [Area41Controller::class, 'delete'])->name('del-Area41');
    Route::get('/Area41/deleteAll/{category}', [Area41Controller::class, 'destroy'])->name('destroy-Area41');
    //Area42    
    Route::get('/Area42', [Area42Controller::class, 'index'])->name('Area42');
    Route::get('/Area42/{id}', [Area42Controller::class, 'open'])->name('open-Area42');
    Route::get('/Area42/view/{id}', [Area42Controller::class, 'view'])->name('view-Area42');
    Route::post('/Area42/pw/{id}', [Area42Controller::class, 'password'])->name('pw-Area42');
    Route::post('/add-Area42', [Area42Controller::class, 'upload'])->name('up-Area42');
    Route::get('/Area42/delete/{id}', [Area42Controller::class, 'delete'])->name('del-Area42');
    Route::get('/Area42/deleteAll/{category}', [Area42Controller::class, 'destroy'])->name('destroy-Area42');
    //Area43    
    Route::get('/Area43', [Area43Controller::class, 'index'])->name('Area43');
    Route::get('/Area43/{id}', [Area43Controller::class, 'open'])->name('open-Area43');
    Route::get('/Area43/view/{id}', [Area43Controller::class, 'view'])->name('view-Area43');
    Route::post('/Area43/pw/{id}', [Area43Controller::class, 'password'])->name('pw-Area43');
    Route::post('/add-Area43', [Area43Controller::class, 'upload'])->name('up-Area43');
    Route::get('/Area43/delete/{id}', [Area43Controller::class, 'delete'])->name('del-Area43');
    Route::get('/Area43/deleteAll/{category}', [Area43Controller::class, 'destroy'])->name('destroy-Area43');
    //Area44    
    Route::get('/Area44', [Area44Controller::class, 'index'])->name('Area44');
    Route::get('/Area44/{id}', [Area44Controller::class, 'open'])->name('open-Area44');
    Route::get('/Area44/view/{id}', [Area44Controller::class, 'view'])->name('view-Area44');
    Route::post('/Area44/pw/{id}', [Area44Controller::class, 'password'])->name('pw-Area44');
    Route::post('/add-Area44', [Area44Controller::class, 'upload'])->name('up-Area44');
    Route::get('/Area44/delete/{id}', [Area44Controller::class, 'delete'])->name('del-Area44');
    Route::get('/Area44/deleteAll/{category}', [Area44Controller::class, 'destroy'])->name('destroy-Area44');
    //Area45    
    Route::get('/Area45', [Area45Controller::class, 'index'])->name('Area45');
    Route::get('/Area45/{id}', [Area45Controller::class, 'open'])->name('open-Area45');
    Route::get('/Area45/view/{id}', [Area45Controller::class, 'view'])->name('view-Area45');
    Route::post('/Area45/pw/{id}', [Area45Controller::class, 'password'])->name('pw-Area45');
    Route::post('/add-Area45', [Area45Controller::class, 'upload'])->name('up-Area45');
    Route::get('/Area45/delete/{id}', [Area45Controller::class, 'delete'])->name('del-Area45');
    Route::get('/Area45/deleteAll/{category}', [Area45Controller::class, 'destroy'])->name('destroy-Area45');
    //Area46    
    Route::get('/Area46', [Area46Controller::class, 'index'])->name('Area46');
    Route::get('/Area46/{id}', [Area46Controller::class, 'open'])->name('open-Area46');
    Route::get('/Area46/view/{id}', [Area46Controller::class, 'view'])->name('view-Area46');
    Route::post('/Area46/pw/{id}', [Area46Controller::class, 'password'])->name('pw-Area46');
    Route::post('/add-Area46', [Area46Controller::class, 'upload'])->name('up-Area46');
    Route::get('/Area46/delete/{id}', [Area46Controller::class, 'delete'])->name('del-Area46');
    Route::get('/Area46/deleteAll/{category}', [Area46Controller::class, 'destroy'])->name('destroy-Area47');
    //Area47    
    Route::get('/Area47', [Area47Controller::class, 'index'])->name('Area47');
    Route::get('/Area47/{id}', [Area47Controller::class, 'open'])->name('open-Area47');
    Route::get('/Area47/view/{id}', [Area47Controller::class, 'view'])->name('view-Area47');
    Route::post('/Area47/pw/{id}', [Area47Controller::class, 'password'])->name('pw-Area47');
    Route::post('/add-Area47', [Area47Controller::class, 'upload'])->name('up-Area47');
    Route::get('/Area47/delete/{id}', [Area47Controller::class, 'delete'])->name('del-Area47');
    Route::get('/Area47/deleteAll/{category}', [Area47Controller::class, 'destroy'])->name('destroy-Area47');
    //Area48    
    Route::get('/Area48', [Area48Controller::class, 'index'])->name('Area48');
    Route::get('/Area48/{id}', [Area48Controller::class, 'open'])->name('open-Area48');
    Route::get('/Area48/view/{id}', [Area48Controller::class, 'view'])->name('view-Area48');
    Route::post('/Area48/pw/{id}', [Area48Controller::class, 'password'])->name('pw-Area48');
    Route::post('/add-Area48', [Area48Controller::class, 'upload'])->name('up-Area48');
    Route::get('/Area48/delete/{id}', [Area48Controller::class, 'delete'])->name('del-Area48');
    Route::get('/Area48/deleteAll/{category}', [Area48Controller::class, 'destroy'])->name('destroy-Area48');
    //Area49    
    Route::get('/Area49', [Area49Controller::class, 'index'])->name('Area49');
    Route::get('/Area49/{id}', [Area49Controller::class, 'open'])->name('open-Area49');
    Route::get('/Area49/view/{id}', [Area49Controller::class, 'view'])->name('view-Area49');
    Route::post('/Area49/pw/{id}', [Area49Controller::class, 'password'])->name('pw-Area49');
    Route::post('/add-Area49', [Area49Controller::class, 'upload'])->name('up-Area49');
    Route::get('/Area49/delete/{id}', [Area49Controller::class, 'delete'])->name('del-Area49');
    Route::get('/Area49/deleteAll/{category}', [Area49Controller::class, 'destroy'])->name('destroy-Area49');
    //Area50    
    Route::get('/Area50', [Area50Controller::class, 'index'])->name('Area50');
    Route::get('/Area50/{id}', [Area50Controller::class, 'open'])->name('open-Area50');
    Route::get('/Area50/view/{id}', [Area50Controller::class, 'view'])->name('view-Area50');
    Route::post('/Area50/pw/{id}', [Area50Controller::class, 'password'])->name('pw-Area50');
    Route::post('/add-Area50', [Area50Controller::class, 'upload'])->name('up-Area50');
    Route::get('/Area50/delete/{id}', [Area50Controller::class, 'delete'])->name('del-Area50');
    Route::get('/Area50/deleteAll/{category}', [Area50Controller::class, 'destroy'])->name('destroy-Area50');

    //Masterlist
    Route::get('/masterlist', [MasterListController::class, 'mstrlist'])->name('masterlist');
    Route::post('/add-masterlist', [MasterListController::class, 'upload'])->name('upload-mstr');
    Route::get('masterlist/{id}', [MasterListController::class, 'show'])->name('mstrlist.show');
    Route::get('/masterlist/delete/{id}', [MasterListController::class, 'delete'])->name('deleteML');





});

Route::group(['middleware' => ['auth', 'App\Http\Middleware\CekRole:admin']], function () {
    Route::get('/history', [HistoryController::class, 'index'])->name('history');
    Route::get('history/delete-all', [HistoryController::class, 'destroy'])->name('del-history');
    Route::get('/history/getHistory', [HistoryController::class, 'getActivities'])->name('get-history');


    Route::get('/listuser', [UserController::class, 'index'])->name('listuser');
    Route::get('/adduser', [UserController::class, 'create'])->name('adduser');
    Route::post('/save-adduser', [UserController::class, 'store'])->name('save-adduser');
    Route::get('/deleteUser/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('edit-user');
    Route::put('/user/{user}', [UserController::class, 'update'])->name('update-user');

    Route::get('/folder', [FolderController::class, 'index'])->name('folder');
    Route::post('/add-folder', [FolderController::class, 'addFolder'])->name('add-folder');
    Route::post('/re-folder/{folder}', [FolderController::class, 'update'])->name('re-folder');
    Route::get('folder/main', [FolderController::class, 'main'])->name('main-folder');
    Route::get('folder/mech', [FolderController::class, 'mech'])->name('mech-folder');
    Route::get('folder/elect', [FolderController::class, 'elect'])->name('elect-folder');

    Route::get('pwdoc/', [PwDocController::class, 'index'])->name('pwdoc');
    Route::post('pwdoc/store', [PwDocController::class, 'store'])->name('store-pw');
    Route::post('pwdoc/update', [PwDocController::class, 'update'])->name('update-pw');

});

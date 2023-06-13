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
    Route::get('/search', [SearchController::class, 'searchUser'])->name('searchdoc');
    Route::get('/search/{id}', [SearchController::class, 'open'])->name('open-doc');
    Route::get('/search/view/{id}', [SearchController::class, 'view'])->name('view-doc');
    Route::post('/search/pw/{id}', [SearchController::class, 'password'])->name('pw-search');

    Route::get('/treebranch', [TreeBrController::class, 'index'])->name('treebr');
    Route::get('/treebranch/view/{id}', [TreeBrController::class, 'view'])->name('view-tr');


    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home/mechanical', [HomeController::class, 'mech'])->name('mech');
    Route::get('/home/electrical', [HomeController::class, 'elect'])->name('elect');

    //Mechanical Banbury
    Route::get('/home/mechanical/banbury', [BanburyController::class, 'index'])->name('banbury');
    Route::get('/home/mechanical/banbury/{id}', [BanburyController::class, 'open'])->name('open-banbury');
    Route::get('/home/mechanical/banbury/view/{id}', [BanburyController::class, 'view'])->name('view-banbury');
    Route::post('/home/mechanical/banbury/pw/{id}', [BanburyController::class, 'password'])->name('pw-banbury');
    Route::post('/home/mechanical/add-banbury', [BanburyController::class, 'upload'])->name('up-banbury');
    Route::get('/home/mechanical/banbury/delete/{id}', [BanburyController::class, 'delete'])->name('del-banbury');
    Route::get('/home/mechanical/banbury/deleteAll/{category}', [BanburyController::class, 'destroy'])->name('destroy-banbury');
    //Civil
    Route::get('/home/civil', [CivilController::class, 'index'])->name('civil');
    Route::post('/home/add-civil', [CivilController::class, 'upload'])->name('up-civil');
    Route::get('/home/civil/{id}', [CivilController::class, 'open'])->name('open-civil');
    Route::get('/home/civil/view/{id}', [CivilController::class, 'view'])->name('view-civil');
    Route::get('/home/civil/delete/{id}', [CivilController::class, 'delete'])->name('del-civil');
    Route::get('/home/civil/deleteAll/{category}', [CivilController::class, 'destroy'])->name('destroy-civil');
    Route::post('/home/civil/pw/{id}', [CivilController::class, 'password'])->name('pw-cv');
    //Strainer
    Route::get('/home/mechanical/strainer', [StrainerController::class, 'index'])->name('strainer');
    Route::post('/home/mechanical/add-strainer', [StrainerController::class, 'upload'])->name('up-strainer');
    Route::get('/home/mechanical/strainer/delete/{id}', [StrainerController::class, 'delete'])->name('del-strainer');
    Route::get('/home/mechanical/strainer/{id}', [StrainerController::class, 'open'])->name('open-strainer');
    Route::get('/home/mechanical/strainer/view/{id}', [StrainerController::class, 'view'])->name('view-strainer');
    Route::get('/home/mechanical/strainer/deleteAll/{category}', [StrainerController::class, 'destroy'])->name('destroy-strainer');
    Route::post('/home/mechanical/strainer/pw/{id}', [StrainerController::class, 'password'])->name('pw-strainer');
    //Polyfilm
    Route::get('/home/mechanical/polyfilm', [PolyfilmController::class, 'index'])->name('polyfilm');
    Route::post('/home/mechanical/add-polyfilm', [PolyfilmController::class, 'upload'])->name('up-polyfilm');
    Route::get('/home/mechanical/polyfilm/{id}', [PolyfilmController::class, 'open'])->name('open-polyfilm');
    Route::get('/home/mechanical/polyfilm/view/{id}', [PolyfilmController::class, 'view'])->name('view-polyfilm');
    Route::get('/home/mechanical/polyfilm/delete/{id}', [PolyfilmController::class, 'delete'])->name('del-polyfilm');
    Route::get('/home/mechanical/polyfilm/deleteAll/{category}', [PolyfilmController::class, 'destroy'])->name('destroy-polyfilm');
    Route::post('/home/mechanical/polyfilm/pw/{id}', [PolyfilmController::class, 'password'])->name('pw-polyfilm');
    //Utility
    Route::get('/home/utility', [UtilityController::class, 'index'])->name('util');
    Route::post('/home/add-utility', [UtilityController::class, 'upload'])->name('up-util');
    Route::get('/home/utility/{id}', [UtilityController::class, 'open'])->name('open-util');
    Route::get('/home/utility/view/{id}', [UtilityController::class, 'view'])->name('view-util');
    Route::get('/home/utility/delete/{id}', [UtilityController::class, 'delete'])->name('del-util');
    Route::get('/home/utility/deleteAll/{category}', [UtilityController::class, 'destroy'])->name('destroy-util');
    Route::post('/home/utility/pw/{id}', [UtilityController::class, 'password'])->name('pw-util');
    //Others
    Route::get('/home/others', [OthersController::class, 'index'])->name('oth');
    Route::post('/home/add-others', [OthersController::class, 'upload'])->name('up-oth');
    Route::get('/home/others/{id}', [OthersController::class, 'open'])->name('open-oth');
    Route::get('/home/others/view/{id}', [OthersController::class, 'view'])->name('view-oth');
    Route::get('/home/others/delete/{id}', [OthersController::class, 'delete'])->name('del-oth');
    Route::get('/home/others/deleteAll/{category}', [OthersController::class, 'destroy'])->name('destroy-oth');
    Route::post('/home/others/pw/{id}', [OthersController::class, 'password'])->name('pw-oth');
    //Calender
    Route::get('/home/mechanical/calender', [CalenderController::class, 'index'])->name('calender');
    Route::post('/home/mechanical/add-calender', [CalenderController::class, 'upload'])->name('up-calender');
    Route::get('/home/mechanical/calender/{id}', [CalenderController::class, 'open'])->name('open-calender');
    Route::get('/home/mechanical/calender/view/{id}', [CalenderController::class, 'view'])->name('view-calender');
    Route::get('/home/mechanical/calender/delete/{id}', [CalenderController::class, 'delete'])->name('del-calender');
    Route::get('/home/mechanical/calender/deleteAll/{category}', [CalenderController::class, 'destroy'])->name('destroy-calender');
    Route::post('/home/mechanical/calender/pw/{id}', [CalenderController::class, 'password'])->name('pw-calender');
    //Bexter
    Route::get('/home/mechanical/bexter', [BexterController::class, 'index'])->name('bexter');
    Route::post('/home/mechanical/add-bexter', [BexterController::class, 'upload'])->name('up-bexter');
    Route::get('/home/mechanical/bexter/{id}', [BexterController::class, 'open'])->name('open-bexter');
    Route::get('/home/mechanical/bexter/view/{id}', [BexterController::class, 'view'])->name('view-bexter');
    Route::get('/home/mechanical/bexter/delete/{id}', [BexterController::class, 'delete'])->name('del-bexter');
    Route::get('/home/mechanical/bexter/deleteAll/{category}', [BexterController::class, 'destroy'])->name('destroy-bexter');
    Route::post('/home/mechanical/bexter/pw/{id}', [BexterController::class, 'password'])->name('pw-bexter');
    //QCT
    Route::get('/home/mechanical/QCT', [QCTController::class, 'index'])->name('QCT');
    Route::get('/home/mechanical/QCT/{id}', [QCTController::class, 'open'])->name('open-QCT');
    Route::get('/home/mechanical/QCT/view/{id}', [QCTController::class, 'view'])->name('view-QCT');
    Route::post('/home/mechanical/QCT/pw/{id}', [QCTController::class, 'password'])->name('pw-QCT');
    Route::post('/home/mechanical/add-QCT', [QCTController::class, 'upload'])->name('up-QCT');
    Route::get('/home/mechanical/QCT/delete/{id}', [QCTController::class, 'delete'])->name('del-QCT');
    Route::get('/home/mechanical/QCT/deleteAll/{category}', [QCTController::class, 'destroy'])->name('destroy-QCT');
    //Bead
    Route::get('/home/mechanical/bead', [BeadController::class, 'index'])->name('bead');
    Route::get('/home/mechanical/bead/{id}', [BeadController::class, 'open'])->name('open-bead');
    Route::get('/home/mechanical/bead/view/{id}', [BeadController::class, 'view'])->name('view-bead');
    Route::post('/home/mechanical/bead/pw/{id}', [BeadController::class, 'password'])->name('pw-bead');
    Route::post('/home/mechanical/add-bead', [BeadController::class, 'upload'])->name('up-bead');
    Route::get('/home/mechanical/bead/delete/{id}', [BeadController::class, 'delete'])->name('del-bead');
    Route::get('/home/mechanical/bead/deleteAll/{category}', [BeadController::class, 'destroy'])->name('destroy-bead');
    //Monowire
    Route::get('/home/mechanical/monowire', [MonowireController::class, 'index'])->name('monowire');
    Route::get('/home/mechanical/monowire/{id}', [MonowireController::class, 'open'])->name('open-monowire');
    Route::get('/home/mechanical/monowire/view/{id}', [MonowireController::class, 'view'])->name('view-monowire');
    Route::post('/home/mechanical/monowire/pw/{id}', [MonowireController::class, 'password'])->name('pw-monowire');
    Route::post('/home/mechanical/add-monowire', [MonowireController::class, 'upload'])->name('up-monowire');
    Route::get('/home/mechanical/monowire/delete/{id}', [MonowireController::class, 'delete'])->name('del-monowire');
    Route::get('/home/mechanical/monowire/deleteAll/{category}', [MonowireController::class, 'destroy'])->name('destroy-monowire');
    //RTB
    Route::get('/home/mechanical/RTB', [RTBController::class, 'index'])->name('RTB');
    Route::get('/home/mechanical/RTB/{id}', [RTBController::class, 'open'])->name('open-RTB');
    Route::get('/home/mechanical/RTB/view/{id}', [RTBController::class, 'view'])->name('view-RTB');
    Route::post('/home/mechanical/RTB/pw/{id}', [RTBController::class, 'password'])->name('pw-RTB');
    Route::post('/home/mechanical/add-RTB', [RTBController::class, 'upload'])->name('up-RTB');
    Route::get('/home/mechanical/RTB/delete/{id}', [RTBController::class, 'delete'])->name('del-RTB');
    Route::get('/home/mechanical/RTB/deleteAll/{category}', [RTBController::class, 'destroy'])->name('destroy-RTB');
    //PCT1
    Route::get('/home/mechanical/PCT1', [PCT1Controller::class, 'index'])->name('PCT1');
    Route::get('/home/mechanical/PCT1/{id}', [PCT1Controller::class, 'open'])->name('open-PCT1');
    Route::get('/home/mechanical/PCT1/view/{id}', [PCT1Controller::class, 'view'])->name('view-PCT1');
    Route::post('/home/mechanical/PCT1/pw/{id}', [PCT1Controller::class, 'password'])->name('pw-PCT1');
    Route::post('/home/mechanical/add-PCT1', [PCT1Controller::class, 'upload'])->name('up-PCT1');
    Route::get('/home/mechanical/PCT1/delete/{id}', [PCT1Controller::class, 'delete'])->name('del-PCT1');
    Route::get('/home/mechanical/PCT1/deleteAll/{category}', [PCT1Controller::class, 'destroy'])->name('destroy-PCT1');
    //PCT2
    Route::get('/home/mechanical/PCT2', [PCT2Controller::class, 'index'])->name('PCT2');
    Route::get('/home/mechanical/PCT2/{id}', [PCT2Controller::class, 'open'])->name('open-PCT2');
    Route::get('/home/mechanical/PCT2/view/{id}', [PCT2Controller::class, 'view'])->name('view-PCT2');
    Route::post('/home/mechanical/PCT2/pw/{id}', [PCT2Controller::class, 'password'])->name('pw-PCT2');
    Route::post('/home/mechanical/add-PCT2', [PCT2Controller::class, 'upload'])->name('up-PCT2');
    Route::get('/home/mechanical/PCT2/delete/{id}', [PCT2Controller::class, 'delete'])->name('del-PCT2');
    Route::get('/home/mechanical/PCT2/deleteAll/{category}', [PCT2Controller::class, 'destroy'])->name('destroy-PCT2');
    //SRB1
    Route::get('/home/mechanical/SRB1', [SRB1Controller::class, 'index'])->name('SRB1');
    Route::get('/home/mechanical/SRB1/{id}', [SRB1Controller::class, 'open'])->name('open-SRB1');
    Route::get('/home/mechanical/SRB1/view/{id}', [SRB1Controller::class, 'view'])->name('view-SRB1');
    Route::post('/home/mechanical/SRB1/pw/{id}', [SRB1Controller::class, 'password'])->name('pw-SRB1');
    Route::post('/home/mechanical/add-SRB1', [SRB1Controller::class, 'upload'])->name('up-SRB1');
    Route::get('/home/mechanical/SRB1/delete/{id}', [SRB1Controller::class, 'delete'])->name('del-SRB1');
    Route::get('/home/mechanical/SRB1/deleteAll/{category}', [SRB1Controller::class, 'destroy'])->name('destroy-SRB1');

    //SRB2
    Route::get('/home/mechanical/SRB2', [SRB2Controller::class, 'index'])->name('SRB2');
    Route::get('/home/mechanical/SRB2/{id}', [SRB2Controller::class, 'open'])->name('open-SRB2');
    Route::get('/home/mechanical/SRB2/view/{id}', [SRB2Controller::class, 'view'])->name('view-SRB2');
    Route::post('/home/mechanical/SRB2/pw/{id}', [SRB2Controller::class, 'password'])->name('pw-SRB2');
    Route::post('/home/mechanical/add-SRB2', [SRB2Controller::class, 'upload'])->name('up-SRB2');
    Route::get('/home/mechanical/SRB2/delete/{id}', [SRB2Controller::class, 'delete'])->name('del-SRB2');
    Route::get('/home/mechanical/SRB2/deleteAll/{category}', [SRB2Controller::class, 'destroy'])->name('destroy-SRB2');

    //PSP
    Route::get('/home/mechanical/PSP', [PSPController::class, 'index'])->name('PSP');
    Route::get('/home/mechanical/PSP/{id}', [PSPController::class, 'open'])->name('open-PSP');
    Route::get('/home/mechanical/PSP/view/{id}', [PSPController::class, 'view'])->name('view-PSP');
    Route::post('/home/mechanical/PSP/pw/{id}', [PSPController::class, 'password'])->name('pw-PSP');
    Route::post('/home/mechanical/add-PSP', [PSPController::class, 'upload'])->name('up-PSP');
    Route::get('/home/mechanical/PSP/delete/{id}', [PSPController::class, 'delete'])->name('del-PSP');
    Route::get('/home/mechanical/PSP/deleteAll/{category}', [PSPController::class, 'destroy'])->name('destroy-PSP');
    //IL2RH
    Route::get('/home/mechanical/IL2RH', [IL2RHController::class, 'index'])->name('IL2RH');
    Route::get('/home/mechanical/IL2RH/{id}', [IL2RHController::class, 'open'])->name('open-IL2RH');
    Route::get('/home/mechanical/IL2RH/view/{id}', [IL2RHController::class, 'view'])->name('view-IL2RH');
    Route::post('/home/mechanical/IL2RH/pw/{id}', [IL2RHController::class, 'password'])->name('pw-IL2RH');
    Route::post('/home/mechanical/add-IL2RH', [IL2RHController::class, 'upload'])->name('up-IL2RH');
    Route::get('/home/mechanical/IL2RH/delete/{id}', [IL2RHController::class, 'delete'])->name('del-IL2RH');
    Route::get('/home/mechanical/IL2RH/deleteAll/{category}', [IL2RHController::class, 'destroy'])->name('destroy-IL2RH');
    //KBN2
    Route::get('/home/mechanical/KBN2', [KBN2Controller::class, 'index'])->name('KBN2');
    Route::get('/home/mechanical/KBN2/{id}', [KBN2Controller::class, 'open'])->name('open-KBN2');
    Route::get('/home/mechanical/KBN2/view/{id}', [KBN2Controller::class, 'view'])->name('view-KBN2');
    Route::post('/home/mechanical/KBN2/pw/{id}', [KBN2Controller::class, 'password'])->name('pw-KBN2');
    Route::post('/home/mechanical/add-KBN2', [KBN2Controller::class, 'upload'])->name('up-KBN2');
    Route::get('/home/mechanical/KBN2/delete/{id}', [KBN2Controller::class, 'delete'])->name('del-KBN2');
    Route::get('/home/mechanical/KBN2/deleteAll/{category}', [KBN2Controller::class, 'destroy'])->name('destroy-KBN2');
    //K1S
    Route::get('/home/mechanical/K1S', [K1SController::class, 'index'])->name('K1S');
    Route::get('/home/mechanical/K1S/{id}', [K1SController::class, 'open'])->name('open-K1S');
    Route::get('/home/mechanical/K1S/view/{id}', [K1SController::class, 'view'])->name('view-K1S');
    Route::post('/home/mechanical/K1S/pw/{id}', [K1SController::class, 'password'])->name('pw-K1S');
    Route::post('/home/mechanical/add-K1S', [K1SController::class, 'upload'])->name('up-K1S');
    Route::get('/home/mechanical/K1S/delete/{id}', [K1SController::class, 'delete'])->name('del-K1S');
    Route::get('/home/mechanical/K1S/deleteAll/{category}', [K1SController::class, 'destroy'])->name('destroy-K1S');
    //HF1
    Route::get('/home/mechanical/HF1', [HF1Controller::class, 'index'])->name('HF1');
    Route::get('/home/mechanical/HF1/{id}', [HF1Controller::class, 'open'])->name('open-HF1');
    Route::get('/home/mechanical/HF1/view/{id}', [HF1Controller::class, 'view'])->name('view-HF1');
    Route::post('/home/mechanical/HF1/pw/{id}', [HF1Controller::class, 'password'])->name('pw-HF1');
    Route::post('/home/mechanical/add-HF1', [HF1Controller::class, 'upload'])->name('up-HF1');
    Route::get('/home/mechanical/HF1/delete/{id}', [HF1Controller::class, 'delete'])->name('del-HF1');
    Route::get('/home/mechanical/HF1/deleteAll/{category}', [HF1Controller::class, 'destroy'])->name('destroy-HF1');
    //KBN2
    Route::get('/home/mechanical/cure', [CureController::class, 'index'])->name('cure');
    Route::get('/home/mechanical/cure/{id}', [CureController::class, 'open'])->name('open-cure');
    Route::get('/home/mechanical/cure/view/{id}', [CureController::class, 'view'])->name('view-cure');
    Route::post('/home/mechanical/cure/pw/{id}', [CureController::class, 'password'])->name('pw-cure');
    Route::post('/home/mechanical/add-cure', [CureController::class, 'upload'])->name('up-cure');
    Route::get('/home/mechanical/cure/delete/{id}', [CureController::class, 'delete'])->name('del-cure');
    Route::get('/home/mechanical/cure/deleteAll/{category}', [CureController::class, 'destroy'])->name('destroy-cure');
    //APPD1
    Route::get('/home/mechanical/APPD1', [APPD1Controller::class, 'index'])->name('APPD1');
    Route::get('/home/mechanical/APPD1/{id}', [APPD1Controller::class, 'open'])->name('open-APPD1');
    Route::get('/home/mechanical/APPD1/view/{id}', [APPD1Controller::class, 'view'])->name('view-APPD1');
    Route::post('/home/mechanical/APPD1/pw/{id}', [APPD1Controller::class, 'password'])->name('pw-APPD1');
    Route::post('/home/mechanical/add-APPD1', [APPD1Controller::class, 'upload'])->name('up-APPD1');
    Route::get('/home/mechanical/APPD1/delete/{id}', [APPD1Controller::class, 'delete'])->name('del-APPD1');
    Route::get('/home/mechanical/APPD1/deleteAll/{category}', [APPD1Controller::class, 'destroy'])->name('destroy-APPD1');
    //InAPPD1
    Route::get('/home/mechanical/InAPPD1', [InAPPD1Controller::class, 'index'])->name('InAPPD1');
    Route::get('/home/mechanical/InAPPD1/{id}', [InAPPD1Controller::class, 'open'])->name('open-InAPPD1');
    Route::get('/home/mechanical/InAPPD1/view/{id}', [InAPPD1Controller::class, 'view'])->name('view-InAPPD1');
    Route::post('/home/mechanical/InAPPD1/pw/{id}', [InAPPD1Controller::class, 'password'])->name('pw-InAPPD1');
    Route::post('/home/mechanical/add-InAPPD1', [InAPPD1Controller::class, 'upload'])->name('up-InAPPD1');
    Route::get('/home/mechanical/InAPPD1/delete/{id}', [InAPPD1Controller::class, 'delete'])->name('del-InAPPD1');
    Route::get('/home/mechanical/InAPPD1/deleteAll/{category}', [InAPPD1Controller::class, 'destroy'])->name('destroy-InAPPD1');

    //WB2
    Route::get('/home/mechanical/WB2', [WB2Controller::class, 'index'])->name('WB2');
    Route::get('/home/mechanical/WB2/{id}', [WB2Controller::class, 'open'])->name('open-WB2');
    Route::get('/home/mechanical/WB2/view/{id}', [WB2Controller::class, 'view'])->name('view-WB2');
    Route::post('/home/mechanical/WB2/pw/{id}', [WB2Controller::class, 'password'])->name('pw-WB2');
    Route::post('/home/mechanical/add-WB2', [WB2Controller::class, 'upload'])->name('up-WB2');
    Route::get('/home/mechanical/WB2/delete/{id}', [WB2Controller::class, 'delete'])->name('del-WB2');
    Route::get('/home/mechanical/WB2/deleteAll/{category}', [WB2Controller::class, 'destroy'])->name('destroy-WB2');
    //RF
    Route::get('/home/mechanical/RF', [RFController::class, 'index'])->name('RF');
    Route::get('/home/mechanical/RF/{id}', [RFController::class, 'open'])->name('open-RF');
    Route::get('/home/mechanical/RF/view/{id}', [RFController::class, 'view'])->name('view-RF');
    Route::post('/home/mechanical/RF/pw/{id}', [RFController::class, 'password'])->name('pw-RF');
    Route::post('/home/mechanical/add-RF', [RFController::class, 'upload'])->name('up-RF');
    Route::get('/home/mechanical/RF/delete/{id}', [RFController::class, 'delete'])->name('del-RF');
    Route::get('/home/mechanical/RF/deleteAll/{category}', [RFController::class, 'destroy'])->name('destroy-RF');

    //Uniform
    Route::get('/home/mechanical/Uniform', [UniformController::class, 'index'])->name('Uniform');
    Route::get('/home/mechanical/Uniform/{id}', [UniformController::class, 'open'])->name('open-Uniform');
    Route::get('/home/mechanical/Uniform/view/{id}', [UniformController::class, 'view'])->name('view-Uniform');
    Route::post('/home/mechanical/Uniform/pw/{id}', [UniformController::class, 'password'])->name('pw-Uniform');
    Route::post('/home/mechanical/add-Uniform', [UniformController::class, 'upload'])->name('up-Uniform');
    Route::get('/home/mechanical/Uniform/delete/{id}', [UniformController::class, 'delete'])->name('del-Uniform');
    Route::get('/home/mechanical/Uniform/deleteAll/{category}', [UniformController::class, 'destroy'])->name('destroy-Uniform');
    //HPLRP
    Route::get('/home/mechanical/HPLRP', [HPLRPController::class, 'index'])->name('HPLRP');
    Route::get('/home/mechanical/HPLRP/{id}', [HPLRPController::class, 'open'])->name('open-HPLRP');
    Route::get('/home/mechanical/HPLRP/view/{id}', [HPLRPController::class, 'view'])->name('view-HPLRP');
    Route::post('/home/mechanical/HPLRP/pw/{id}', [HPLRPController::class, 'password'])->name('pw-HPLRP');
    Route::post('/home/mechanical/add-HPLRP', [HPLRPController::class, 'upload'])->name('up-HPLRP');
    Route::get('/home/mechanical/HPLRP/delete/{id}', [HPLRPController::class, 'delete'])->name('del-HPLRP');
    Route::get('/home/mechanical/HPLRP/deleteAll/{category}', [HPLRPController::class, 'destroy'])->name('destroy-HPLRP');
    //LWB
    Route::get('/home/mechanical/LWB', [LWBController::class, 'index'])->name('LWB');
    Route::get('/home/mechanical/LWB/{id}', [LWBController::class, 'open'])->name('open-LWB');
    Route::get('/home/mechanical/LWB/view/{id}', [LWBController::class, 'view'])->name('view-LWB');
    Route::post('/home/mechanical/LWB/pw/{id}', [LWBController::class, 'password'])->name('pw-LWB');
    Route::post('/home/mechanical/add-LWB', [LWBController::class, 'upload'])->name('up-LWB');
    Route::get('/home/mechanical/LWB/delete/{id}', [LWBController::class, 'delete'])->name('del-LWB');
    Route::get('/home/mechanical/LWB/deleteAll/{category}', [LWBController::class, 'destroy'])->name('destroy-LWB');
    //Rework
    Route::get('/home/mechanical/Rework', [ReworkController::class, 'index'])->name('Rework');
    Route::get('/home/mechanical/Rework/{id}', [ReworkController::class, 'open'])->name('open-Rework');
    Route::get('/home/mechanical/Rework/view/{id}', [ReworkController::class, 'view'])->name('view-Rework');
    Route::post('/home/mechanical/Rework/pw/{id}', [ReworkController::class, 'password'])->name('pw-Rework');
    Route::post('/home/mechanical/add-Rework', [ReworkController::class, 'upload'])->name('up-Rework');
    Route::get('/home/mechanical/Rework/delete/{id}', [ReworkController::class, 'delete'])->name('del-Rework');
    Route::get('/home/mechanical/Rework/deleteAll/{category}', [ReworkController::class, 'destroy'])->name('destroy-Rework');

    //TR
    Route::get('/home/mechanical/TR', [TRController::class, 'index'])->name('TR');
    Route::get('/home/mechanical/TR/{id}', [TRController::class, 'open'])->name('open-TR');
    Route::get('/home/mechanical/TR/view/{id}', [TRController::class, 'view'])->name('view-TR');
    Route::post('/home/mechanical/TR/pw/{id}', [TRController::class, 'password'])->name('pw-TR');
    Route::post('/home/mechanical/add-TR', [TRController::class, 'upload'])->name('up-TR');
    Route::get('/home/mechanical/TR/delete/{id}', [TRController::class, 'delete'])->name('del-TR');
    Route::get('/home/mechanical/TR/deleteAll/{category}', [TRController::class, 'destroy'])->name('destroy-TR');
    //Furn
    Route::get('/home/mechanical/Furn', [FurnController::class, 'index'])->name('Furn');
    Route::get('/home/mechanical/Furn/{id}', [FurnController::class, 'open'])->name('open-Furn');
    Route::get('/home/mechanical/Furn/view/{id}', [FurnController::class, 'view'])->name('view-Furn');
    Route::post('/home/mechanical/Furn/pw/{id}', [FurnController::class, 'password'])->name('pw-Furn');
    Route::post('/home/mechanical/add-Furn', [FurnController::class, 'upload'])->name('up-Furn');
    Route::get('/home/mechanical/Furn/delete/{id}', [FurnController::class, 'delete'])->name('del-Furn');
    Route::get('/home/mechanical/Furn/deleteAll/{category}', [FurnController::class, 'destroy'])->name('destroy-Furn');
    //CH
    Route::get('/home/mechanical/CH', [CHController::class, 'index'])->name('CH');
    Route::get('/home/mechanical/CH/{id}', [CHController::class, 'open'])->name('open-CH');
    Route::get('/home/mechanical/CH/view/{id}', [CHController::class, 'view'])->name('view-CH');
    Route::post('/home/mechanical/CH/pw/{id}', [CHController::class, 'password'])->name('pw-CH');
    Route::post('/home/mechanical/add-CH', [CHController::class, 'upload'])->name('up-CH');
    Route::get('/home/mechanical/CH/delete/{id}', [CHController::class, 'delete'])->name('del-CH');
    Route::get('/home/mechanical/CH/deleteAll/{category}', [CHController::class, 'destroy'])->name('destroy-CH');

    Route::get('/home/mechanical/N1DCT', [N1DCTController::class, 'index'])->name('N1DCT');
    Route::get('/home/mechanical/N1DCT/{id}', [N1DCTController::class, 'open'])->name('open-N1DCT');
    Route::get('/home/mechanical/N1DCT/view/{id}', [N1DCTController::class, 'view'])->name('view-N1DCT');
    Route::post('/home/mechanical/N1DCT/pw/{id}', [N1DCTController::class, 'password'])->name('pw-N1DCT');
    Route::post('/home/mechanical/add-N1DCT', [N1DCTController::class, 'upload'])->name('up-N1DCT');
    Route::get('/home/mechanical/N1DCT/delete/{id}', [N1DCTController::class, 'delete'])->name('del-N1DCT');
    Route::get('/home/mechanical/N1DCT/deleteAll/{category}', [N1DCTController::class, 'destroy'])->name('destroy-N1DCT');

    Route::get('/home/mechanical/CT8', [CT8Controller::class, 'index'])->name('CT8');
    Route::get('/home/mechanical/CT8/{id}', [CT8Controller::class, 'open'])->name('open-CT8');
    Route::get('/home/mechanical/CT8/view/{id}', [CT8Controller::class, 'view'])->name('view-CT8');
    Route::post('/home/mechanical/CT8/pw/{id}', [CT8Controller::class, 'password'])->name('pw-CT8');
    Route::post('/home/mechanical/add-CT8', [CT8Controller::class, 'upload'])->name('up-CT8');
    Route::get('/home/mechanical/CT8/delete/{id}', [CT8Controller::class, 'delete'])->name('del-CT8');
    Route::get('/home/mechanical/CT8/deleteAll/{category}', [CT8Controller::class, 'destroy'])->name('destroy-CT8');
    //Electrical
    //Banbury
    Route::get('/home/electrical/EBanbury', [EBanburyController::class, 'index'])->name('EBanbury');
    Route::get('/home/electrical/EBanbury/{id}', [EBanburyController::class, 'open'])->name('open-EBanbury');
    Route::get('/home/electrical/EBanbury/view/{id}', [EBanburyController::class, 'view'])->name('view-EBanbury');
    Route::post('/home/electrical/EBanbury/pw/{id}', [EBanburyController::class, 'password'])->name('pw-EBanbury');
    Route::post('/home/electrical/add-EBanbury', [EBanburyController::class, 'upload'])->name('up-EBanbury');
    Route::get('/home/electrical/EBanbury/delete/{id}', [EBanburyController::class, 'delete'])->name('del-EBanbury');
    Route::get('/home/electrical/EBanbury/deleteAll/{category}', [EBanburyController::class, 'destroy'])->name('destroy-EBanbury');
    //EStrainer    
    Route::get('/home/electrical/EStrainer', [EStrainerController::class, 'index'])->name('EStrainer');
    Route::get('/home/electrical/EStrainer/{id}', [EStrainerController::class, 'open'])->name('open-EStrainer');
    Route::get('/home/electrical/EStrainer/view/{id}', [EStrainerController::class, 'view'])->name('view-EStrainer');
    Route::post('/home/electrical/EStrainer/pw/{id}', [EStrainerController::class, 'password'])->name('pw-EStrainer');
    Route::post('/home/electrical/add-EStrainer', [EStrainerController::class, 'upload'])->name('up-EStrainer');
    Route::get('/home/electrical/EStrainer/delete/{id}', [EStrainerController::class, 'delete'])->name('del-EStrainer');
    Route::get('/home/electrical/EStrainer/deleteAll/{category}', [EStrainerController::class, 'destroy'])->name('destroy-EStrainer');
    //EPolyfilm    
    Route::get('/home/electrical/EPolyfilm', [EPolyfilmController::class, 'index'])->name('EPolyfilm');
    Route::get('/home/electrical/EPolyfilm/{id}', [EPolyfilmController::class, 'open'])->name('open-EPolyfilm');
    Route::get('/home/electrical/EPolyfilm/view/{id}', [EPolyfilmController::class, 'view'])->name('view-EPolyfilm');
    Route::post('/home/electrical/EPolyfilm/pw/{id}', [EPolyfilmController::class, 'password'])->name('pw-EPolyfilm');
    Route::post('/home/electrical/add-EPolyfilm', [EPolyfilmController::class, 'upload'])->name('up-EPolyfilm');
    Route::get('/home/electrical/EPolyfilm/delete/{id}', [EPolyfilmController::class, 'delete'])->name('del-EPolyfilm');
    Route::get('/home/electrical/EPolyfilm/deleteAll/{category}', [EPolyfilmController::class, 'destroy'])->name('destroy-EPolyfilm');
    //ECalender    
    Route::get('/home/electrical/ECalender', [ECalenderController::class, 'index'])->name('ECalender');
    Route::get('/home/electrical/ECalender/{id}', [ECalenderController::class, 'open'])->name('open-ECalender');
    Route::get('/home/electrical/ECalender/view/{id}', [ECalenderController::class, 'view'])->name('view-ECalender');
    Route::post('/home/electrical/ECalender/pw/{id}', [ECalenderController::class, 'password'])->name('pw-ECalender');
    Route::post('/home/electrical/add-ECalender', [ECalenderController::class, 'upload'])->name('up-ECalender');
    Route::get('/home/electrical/ECalender/delete/{id}', [ECalenderController::class, 'delete'])->name('del-ECalender');
    Route::get('/home/electrical/ECalender/deleteAll/{category}', [ECalenderController::class, 'destroy'])->name('destroy-ECalender');
    //EBexter    
    Route::get('/home/electrical/EBexter', [EBexterController::class, 'index'])->name('EBexter');
    Route::get('/home/electrical/EBexter/{id}', [EBexterController::class, 'open'])->name('open-EBexter');
    Route::get('/home/electrical/EBexter/view/{id}', [EBexterController::class, 'view'])->name('view-EBexter');
    Route::post('/home/electrical/EBexter/pw/{id}', [EBexterController::class, 'password'])->name('pw-EBexter');
    Route::post('/home/electrical/add-EBexter', [EBexterController::class, 'upload'])->name('up-EBexter');
    Route::get('/home/electrical/EBexter/delete/{id}', [EBexterController::class, 'delete'])->name('del-EBexter');
    Route::get('/home/electrical/EBexter/deleteAll/{category}', [EBexterController::class, 'destroy'])->name('destroy-EBexter');
    //EQCT    
    Route::get('/home/electrical/EQCT', [EQCTController::class, 'index'])->name('EQCT');
    Route::get('/home/electrical/EQCT/{id}', [EQCTController::class, 'open'])->name('open-EQCT');
    Route::get('/home/electrical/EQCT/view/{id}', [EQCTController::class, 'view'])->name('view-EQCT');
    Route::post('/home/electrical/EQCT/pw/{id}', [EQCTController::class, 'password'])->name('pw-EQCT');
    Route::post('/home/electrical/add-EQCT', [EQCTController::class, 'upload'])->name('up-EQCT');
    Route::get('/home/electrical/EQCT/delete/{id}', [EQCTController::class, 'delete'])->name('del-EQCT');
    Route::get('/home/electrical/EQCT/deleteAll/{category}', [EQCTController::class, 'destroy'])->name('destroy-EQCT');
    //E1NDCT    
    Route::get('/home/electrical/E1NDCT', [E1NDCTController::class, 'index'])->name('E1NDCT');
    Route::get('/home/electrical/E1NDCT/{id}', [E1NDCTController::class, 'open'])->name('open-E1NDCT');
    Route::get('/home/electrical/E1NDCT/view/{id}', [E1NDCTController::class, 'view'])->name('view-E1NDCT');
    Route::post('/home/electrical/E1NDCT/pw/{id}', [E1NDCTController::class, 'password'])->name('pw-E1NDCT');
    Route::post('/home/electrical/add-E1NDCT', [E1NDCTController::class, 'upload'])->name('up-E1NDCT');
    Route::get('/home/electrical/E1NDCT/delete/{id}', [E1NDCTController::class, 'delete'])->name('del-E1NDCT');
    Route::get('/home/electrical/E1NDCT/deleteAll/{category}', [E1NDCTController::class, 'destroy'])->name('destroy-E1NDCT');
    //E8CT    
    Route::get('/home/electrical/E8CT', [E8CTController::class, 'index'])->name('E8CT');
    Route::get('/home/electrical/E8CT/{id}', [E8CTController::class, 'open'])->name('open-E8CT');
    Route::get('/home/electrical/E8CT/view/{id}', [E8CTController::class, 'view'])->name('view-E8CT');
    Route::post('/home/electrical/E8CT/pw/{id}', [E8CTController::class, 'password'])->name('pw-E8CT');
    Route::post('/home/electrical/add-E8CT', [E8CTController::class, 'upload'])->name('up-E8CT');
    Route::get('/home/electrical/E8CT/delete/{id}', [E8CTController::class, 'delete'])->name('del-E8CT');
    Route::get('/home/electrical/E8CT/deleteAll/{category}', [E8CTController::class, 'destroy'])->name('destroy-E8CT');
    //EBead    
    Route::get('/home/electrical/EBead', [EBeadController::class, 'index'])->name('EBead');
    Route::get('/home/electrical/EBead/{id}', [EBeadController::class, 'open'])->name('open-EBead');
    Route::get('/home/electrical/EBead/view/{id}', [EBeadController::class, 'view'])->name('view-EBead');
    Route::post('/home/electrical/EBead/pw/{id}', [EBeadController::class, 'password'])->name('pw-EBead');
    Route::post('/home/electrical/add-EBead', [EBeadController::class, 'upload'])->name('up-EBead');
    Route::get('/home/electrical/EBead/delete/{id}', [EBeadController::class, 'delete'])->name('del-EBead');
    Route::get('/home/electrical/EBead/deleteAll/{category}', [EBeadController::class, 'destroy'])->name('destroy-EBead');
    //EMonowire    
    Route::get('/home/electrical/EMonowire', [EMonowireController::class, 'index'])->name('EMonowire');
    Route::get('/home/electrical/EMonowire/{id}', [EMonowireController::class, 'open'])->name('open-EMonowire');
    Route::get('/home/electrical/EMonowire/view/{id}', [EMonowireController::class, 'view'])->name('view-EMonowire');
    Route::post('/home/electrical/EMonowire/pw/{id}', [EMonowireController::class, 'password'])->name('pw-EMonowire');
    Route::post('/home/electrical/add-EMonowire', [EMonowireController::class, 'upload'])->name('up-EMonowire');
    Route::get('/home/electrical/EMonowire/delete/{id}', [EMonowireController::class, 'delete'])->name('del-EMonowire');
    Route::get('/home/electrical/EMonowire/deleteAll/{category}', [EMonowireController::class, 'destroy'])->name('destroy-EMonowire');
    //ERTB    
    Route::get('/home/electrical/ERTB', [ERTBController::class, 'index'])->name('ERTB');
    Route::get('/home/electrical/ERTB/{id}', [ERTBController::class, 'open'])->name('open-ERTB');
    Route::get('/home/electrical/ERTB/view/{id}', [ERTBController::class, 'view'])->name('view-ERTB');
    Route::post('/home/electrical/ERTB/pw/{id}', [ERTBController::class, 'password'])->name('pw-ERTB');
    Route::post('/home/electrical/add-ERTB', [ERTBController::class, 'upload'])->name('up-ERTB');
    Route::get('/home/electrical/ERTB/delete/{id}', [ERTBController::class, 'delete'])->name('del-ERTB');
    Route::get('/home/electrical/ERTB/deleteAll/{category}', [ERTBController::class, 'destroy'])->name('destroy-ERTB');
    //EPCT1    
    Route::get('/home/electrical/EPCT1', [EPCT1Controller::class, 'index'])->name('EPCT1');
    Route::get('/home/electrical/EPCT1/{id}', [EPCT1Controller::class, 'open'])->name('open-EPCT1');
    Route::get('/home/electrical/EPCT1/view/{id}', [EPCT1Controller::class, 'view'])->name('view-EPCT1');
    Route::post('/home/electrical/EPCT1/pw/{id}', [EPCT1Controller::class, 'password'])->name('pw-EPCT1');
    Route::post('/home/electrical/add-EPCT1', [EPCT1Controller::class, 'upload'])->name('up-EPCT1');
    Route::get('/home/electrical/EPCT1/delete/{id}', [EPCT1Controller::class, 'delete'])->name('del-EPCT1');
    Route::get('/home/electrical/EPCT1/deleteAll/{category}', [EPCT1Controller::class, 'destroy'])->name('destroy-EPCT1');
    //EPCT2    
    Route::get('/home/electrical/EPCT2', [EPCT2Controller::class, 'index'])->name('EPCT2');
    Route::get('/home/electrical/EPCT2/{id}', [EPCT2Controller::class, 'open'])->name('open-EPCT2');
    Route::get('/home/electrical/EPCT2/view/{id}', [EPCT2Controller::class, 'view'])->name('view-EPCT2');
    Route::post('/home/electrical/EPCT2/pw/{id}', [EPCT2Controller::class, 'password'])->name('pw-EPCT2');
    Route::post('/home/electrical/add-EPCT2', [EPCT2Controller::class, 'upload'])->name('up-EPCT2');
    Route::get('/home/electrical/EPCT2/delete/{id}', [EPCT2Controller::class, 'delete'])->name('del-EPCT2');
    Route::get('/home/electrical/EPCT2/deleteAll/{category}', [EPCT2Controller::class, 'destroy'])->name('destroy-EPCT2');
    //ESRB1    
    Route::get('/home/electrical/ESRB1', [ESRB1Controller::class, 'index'])->name('ESRB1');
    Route::get('/home/electrical/ESRB1/{id}', [ESRB1Controller::class, 'open'])->name('open-ESRB1');
    Route::get('/home/electrical/ESRB1/view/{id}', [ESRB1Controller::class, 'view'])->name('view-ESRB1');
    Route::post('/home/electrical/ESRB1/pw/{id}', [ESRB1Controller::class, 'password'])->name('pw-ESRB1');
    Route::post('/home/electrical/add-ESRB1', [ESRB1Controller::class, 'upload'])->name('up-ESRB1');
    Route::get('/home/electrical/ESRB1/delete/{id}', [ESRB1Controller::class, 'delete'])->name('del-ESRB1');
    Route::get('/home/electrical/ESRB1/deleteAll/{category}', [ESRB1Controller::class, 'destroy'])->name('destroy-ESRB1');
    //ESRB2    
    Route::get('/home/electrical/ESRB2', [ESRB2Controller::class, 'index'])->name('ESRB2');
    Route::get('/home/electrical/ESRB2/{id}', [ESRB2Controller::class, 'open'])->name('open-ESRB2');
    Route::get('/home/electrical/ESRB2/view/{id}', [ESRB2Controller::class, 'view'])->name('view-ESRB2');
    Route::post('/home/electrical/ESRB2/pw/{id}', [ESRB2Controller::class, 'password'])->name('pw-ESRB2');
    Route::post('/home/electrical/add-ESRB2', [ESRB2Controller::class, 'upload'])->name('up-ESRB2');
    Route::get('/home/electrical/ESRB2/delete/{id}', [ESRB2Controller::class, 'delete'])->name('del-ESRB2');
    Route::get('/home/electrical/ESRB2/deleteAll/{category}', [ESRB2Controller::class, 'destroy'])->name('destroy-ESRB2');
    //EPSP    
    Route::get('/home/electrical/EPSP', [EPSPController::class, 'index'])->name('EPSP');
    Route::get('/home/electrical/EPSP/{id}', [EPSPController::class, 'open'])->name('open-EPSP');
    Route::get('/home/electrical/EPSP/view/{id}', [EPSPController::class, 'view'])->name('view-EPSP');
    Route::post('/home/electrical/EPSP/pw/{id}', [EPSPController::class, 'password'])->name('pw-EPSP');
    Route::post('/home/electrical/add-EPSP', [EPSPController::class, 'upload'])->name('up-EPSP');
    Route::get('/home/electrical/EPSP/delete/{id}', [EPSPController::class, 'delete'])->name('del-EPSP');
    Route::get('/home/electrical/EPSP/deleteAll/{category}', [EPSPController::class, 'destroy'])->name('destroy-EPSP');
    //EIL2RH    
    Route::get('/home/electrical/EIL2RH', [EIL2RHController::class, 'index'])->name('EIL2RH');
    Route::get('/home/electrical/EIL2RH/{id}', [EIL2RHController::class, 'open'])->name('open-EIL2RH');
    Route::get('/home/electrical/EIL2RH/view/{id}', [EIL2RHController::class, 'view'])->name('view-EIL2RH');
    Route::post('/home/electrical/EIL2RH/pw/{id}', [EIL2RHController::class, 'password'])->name('pw-EIL2RH');
    Route::post('/home/electrical/add-EIL2RH', [EIL2RHController::class, 'upload'])->name('up-EIL2RH');
    Route::get('/home/electrical/EIL2RH/delete/{id}', [EIL2RHController::class, 'delete'])->name('del-EIL2RH');
    Route::get('/home/electrical/EIL2RH/deleteAll/{category}', [EIL2RHController::class, 'destroy'])->name('destroy-EIL2RH');
    //EKBN2    
    Route::get('/home/electrical/EKBN2', [EKBN2Controller::class, 'index'])->name('EKBN2');
    Route::get('/home/electrical/EKBN2/{id}', [EKBN2Controller::class, 'open'])->name('open-EKBN2');
    Route::get('/home/electrical/EKBN2/view/{id}', [EKBN2Controller::class, 'view'])->name('view-EKBN2');
    Route::post('/home/electrical/EKBN2/pw/{id}', [EKBN2Controller::class, 'password'])->name('pw-EKBN2');
    Route::post('/home/electrical/add-EKBN2', [EKBN2Controller::class, 'upload'])->name('up-EKBN2');
    Route::get('/home/electrical/EKBN2/delete/{id}', [EKBN2Controller::class, 'delete'])->name('del-EKBN2');
    Route::get('/home/electrical/EKBN2/deleteAll/{category}', [EKBN2Controller::class, 'destroy'])->name('destroy-EKBN2');
    //EK1S    
    Route::get('/home/electrical/EK1S', [EK1SController::class, 'index'])->name('EK1S');
    Route::get('/home/electrical/EK1S/{id}', [EK1SController::class, 'open'])->name('open-EK1S');
    Route::get('/home/electrical/EK1S/view/{id}', [EK1SController::class, 'view'])->name('view-EK1S');
    Route::post('/home/electrical/EK1S/pw/{id}', [EK1SController::class, 'password'])->name('pw-EK1S');
    Route::post('/home/electrical/add-EK1S', [EK1SController::class, 'upload'])->name('up-EK1S');
    Route::get('/home/electrical/EK1S/delete/{id}', [EK1SController::class, 'delete'])->name('del-EK1S');
    Route::get('/home/electrical/EK1S/deleteAll/{category}', [EK1SController::class, 'destroy'])->name('destroy-EK1S');
    //EHF1    
    Route::get('/home/electrical/EHF1', [EHF1Controller::class, 'index'])->name('EHF1');
    Route::get('/home/electrical/EHF1/{id}', [EHF1Controller::class, 'open'])->name('open-EHF1');
    Route::get('/home/electrical/EHF1/view/{id}', [EHF1Controller::class, 'view'])->name('view-EHF1');
    Route::post('/home/electrical/EHF1/pw/{id}', [EHF1Controller::class, 'password'])->name('pw-EHF1');
    Route::post('/home/electrical/add-EHF1', [EHF1Controller::class, 'upload'])->name('up-EHF1');
    Route::get('/home/electrical/EHF1/delete/{id}', [EHF1Controller::class, 'delete'])->name('del-EHF1');
    Route::get('/home/electrical/EHF1/deleteAll/{category}', [EHF1Controller::class, 'destroy'])->name('destroy-EHF1');
    //ECure    
    Route::get('/home/electrical/ECure', [ECureController::class, 'index'])->name('ECure');
    Route::get('/home/electrical/ECure/{id}', [ECureController::class, 'open'])->name('open-ECure');
    Route::get('/home/electrical/ECure/view/{id}', [ECureController::class, 'view'])->name('view-ECure');
    Route::post('/home/electrical/ECure/pw/{id}', [ECureController::class, 'password'])->name('pw-ECure');
    Route::post('/home/electrical/add-ECure', [ECureController::class, 'upload'])->name('up-ECure');
    Route::get('/home/electrical/ECure/delete/{id}', [ECureController::class, 'delete'])->name('del-ECure');
    Route::get('/home/electrical/ECure/deleteAll/{category}', [ECureController::class, 'destroy'])->name('destroy-ECure');
    //EAPPD1    
    Route::get('/home/electrical/EAPPD1', [EAPPD1Controller::class, 'index'])->name('EAPPD1');
    Route::get('/home/electrical/EAPPD1/{id}', [EAPPD1Controller::class, 'open'])->name('open-EAPPD1');
    Route::get('/home/electrical/EAPPD1/view/{id}', [EAPPD1Controller::class, 'view'])->name('view-EAPPD1');
    Route::post('/home/electrical/EAPPD1/pw/{id}', [EAPPD1Controller::class, 'password'])->name('pw-EAPPD1');
    Route::post('/home/electrical/add-EAPPD1', [EAPPD1Controller::class, 'upload'])->name('up-EAPPD1');
    Route::get('/home/electrical/EAPPD1/delete/{id}', [EAPPD1Controller::class, 'delete'])->name('del-EAPPD1');
    Route::get('/home/electrical/EAPPD1/deleteAll/{category}', [EAPPD1Controller::class, 'destroy'])->name('destroy-EAPPD1');
    //EInAPPD1    
    Route::get('/home/electrical/EInAPPD1', [EInAPPD1Controller::class, 'index'])->name('EInAPPD1');
    Route::get('/home/electrical/EInAPPD1/{id}', [EInAPPD1Controller::class, 'open'])->name('open-EInAPPD1');
    Route::get('/home/electrical/EInAPPD1/view/{id}', [EInAPPD1Controller::class, 'view'])->name('view-EInAPPD1');
    Route::post('/home/electrical/EInAPPD1/pw/{id}', [EInAPPD1Controller::class, 'password'])->name('pw-EInAPPD1');
    Route::post('/home/electrical/add-EInAPPD1', [EInAPPD1Controller::class, 'upload'])->name('up-EInAPPD1');
    Route::get('/home/electrical/EInAPPD1/delete/{id}', [EInAPPD1Controller::class, 'delete'])->name('del-EInAPPD1');
    Route::get('/home/electrical/EInAPPD1/deleteAll/{category}', [EInAPPD1Controller::class, 'destroy'])->name('destroy-EInAPPD1');
    //EWB2    
    Route::get('/home/electrical/EWB2', [EWB2Controller::class, 'index'])->name('EWB2');
    Route::get('/home/electrical/EWB2/{id}', [EWB2Controller::class, 'open'])->name('open-EWB2');
    Route::get('/home/electrical/EWB2/view/{id}', [EWB2Controller::class, 'view'])->name('view-EWB2');
    Route::post('/home/electrical/EWB2/pw/{id}', [EWB2Controller::class, 'password'])->name('pw-EWB2');
    Route::post('/home/electrical/add-EWB2', [EWB2Controller::class, 'upload'])->name('up-EWB2');
    Route::get('/home/electrical/EWB2/delete/{id}', [EWB2Controller::class, 'delete'])->name('del-EWB2');
    Route::get('/home/electrical/EWB2/deleteAll/{category}', [EWB2Controller::class, 'destroy'])->name('destroy-EWB2');
    //ERF    
    Route::get('/home/electrical/ERF', [ERFController::class, 'index'])->name('ERF');
    Route::get('/home/electrical/ERF/{id}', [ERFController::class, 'open'])->name('open-ERF');
    Route::get('/home/electrical/ERF/view/{id}', [ERFController::class, 'view'])->name('view-ERF');
    Route::post('/home/electrical/ERF/pw/{id}', [ERFController::class, 'password'])->name('pw-ERF');
    Route::post('/home/electrical/add-ERF', [ERFController::class, 'upload'])->name('up-ERF');
    Route::get('/home/electrical/ERF/delete/{id}', [ERFController::class, 'delete'])->name('del-ERF');
    Route::get('/home/electrical/ERF/deleteAll/{category}', [ERFController::class, 'destroy'])->name('destroy-ERF');
    //EUniform    
    Route::get('/home/electrical/EUniform', [EUniformController::class, 'index'])->name('EUniform');
    Route::get('/home/electrical/EUniform/{id}', [EUniformController::class, 'open'])->name('open-EUniform');
    Route::get('/home/electrical/EUniform/view/{id}', [EUniformController::class, 'view'])->name('view-EUniform');
    Route::post('/home/electrical/EUniform/pw/{id}', [EUniformController::class, 'password'])->name('pw-EUniform');
    Route::post('/home/electrical/add-EUniform', [EUniformController::class, 'upload'])->name('up-EUniform');
    Route::get('/home/electrical/EUniform/delete/{id}', [EUniformController::class, 'delete'])->name('del-EUniform');
    Route::get('/home/electrical/EUniform/deleteAll/{category}', [EUniformController::class, 'destroy'])->name('destroy-EUniform');
    //EHPLRP    
    Route::get('/home/electrical/EHPLRP', [EHPLRPController::class, 'index'])->name('EHPLRP');
    Route::get('/home/electrical/EHPLRP/{id}', [EHPLRPController::class, 'open'])->name('open-EHPLRP');
    Route::get('/home/electrical/EHPLRP/view/{id}', [EHPLRPController::class, 'view'])->name('view-EHPLRP');
    Route::post('/home/electrical/EHPLRP/pw/{id}', [EHPLRPController::class, 'password'])->name('pw-EHPLRP');
    Route::post('/home/electrical/add-EHPLRP', [EHPLRPController::class, 'upload'])->name('up-EHPLRP');
    Route::get('/home/electrical/EHPLRP/delete/{id}', [EHPLRPController::class, 'delete'])->name('del-EHPLRP');
    Route::get('/home/electrical/EHPLRP/deleteAll/{category}', [EHPLRPController::class, 'destroy'])->name('destroy-EHPLRP');
    //ELWB    
    Route::get('/home/electrical/ELWB', [ELWBController::class, 'index'])->name('ELWB');
    Route::get('/home/electrical/ELWB/{id}', [ELWBController::class, 'open'])->name('open-ELWB');
    Route::get('/home/electrical/ELWB/view/{id}', [ELWBController::class, 'view'])->name('view-ELWB');
    Route::post('/home/electrical/ELWB/pw/{id}', [ELWBController::class, 'password'])->name('pw-ELWB');
    Route::post('/home/electrical/add-ELWB', [ELWBController::class, 'upload'])->name('up-ELWB');
    Route::get('/home/electrical/ELWB/delete/{id}', [ELWBController::class, 'delete'])->name('del-ELWB');
    Route::get('/home/electrical/ELWB/deleteAll/{category}', [ELWBController::class, 'destroy'])->name('destroy-ELWB');
    //ERework    
    Route::get('/home/electrical/ERework', [EReworkController::class, 'index'])->name('ERework');
    Route::get('/home/electrical/ERework/{id}', [EReworkController::class, 'open'])->name('open-ERework');
    Route::get('/home/electrical/ERework/view/{id}', [EReworkController::class, 'view'])->name('view-ERework');
    Route::post('/home/electrical/ERework/pw/{id}', [EReworkController::class, 'password'])->name('pw-ERework');
    Route::post('/home/electrical/add-ERework', [EReworkController::class, 'upload'])->name('up-ERework');
    Route::get('/home/electrical/ERework/delete/{id}', [EReworkController::class, 'delete'])->name('del-ERework');
    Route::get('/home/electrical/ERework/deleteAll/{category}', [EReworkController::class, 'destroy'])->name('destroy-ERework');
    //ETR    
    Route::get('/home/electrical/ETR', [ETRController::class, 'index'])->name('ETR');
    Route::get('/home/electrical/ETR/{id}', [ETRController::class, 'open'])->name('open-ETR');
    Route::get('/home/electrical/ETR/view/{id}', [ETRController::class, 'view'])->name('view-ETR');
    Route::post('/home/electrical/ETR/pw/{id}', [ETRController::class, 'password'])->name('pw-ETR');
    Route::post('/home/electrical/add-ETR', [ETRController::class, 'upload'])->name('up-ETR');
    Route::get('/home/electrical/ETR/delete/{id}', [ETRController::class, 'delete'])->name('del-ETR');
    Route::get('/home/electrical/ETR/deleteAll/{category}', [ETRController::class, 'destroy'])->name('destroy-ETR');
    //EFurn    
    Route::get('/home/electrical/EFurn', [EFurnController::class, 'index'])->name('EFurn');
    Route::get('/home/electrical/EFurn/{id}', [EFurnController::class, 'open'])->name('open-EFurn');
    Route::get('/home/electrical/EFurn/view/{id}', [EFurnController::class, 'view'])->name('view-EFurn');
    Route::post('/home/electrical/EFurn/pw/{id}', [EFurnController::class, 'password'])->name('pw-EFurn');
    Route::post('/home/electrical/add-EFurn', [EFurnController::class, 'upload'])->name('up-EFurn');
    Route::get('/home/electrical/EFurn/delete/{id}', [EFurnController::class, 'delete'])->name('del-EFurn');
    Route::get('/home/electrical/EFurn/deleteAll/{category}', [EFurnController::class, 'destroy'])->name('destroy-EFurn');
    //ECH    
    Route::get('/home/electrical/ECH', [ECHController::class, 'index'])->name('ECH');
    Route::get('/home/electrical/ECH/{id}', [ECHController::class, 'open'])->name('open-ECH');
    Route::get('/home/electrical/ECH/view/{id}', [ECHController::class, 'view'])->name('view-ECH');
    Route::post('/home/electrical/ECH/pw/{id}', [ECHController::class, 'password'])->name('pw-ECH');
    Route::post('/home/electrical/add-ECH', [ECHController::class, 'upload'])->name('up-ECH');
    Route::get('/home/electrical/ECH/delete/{id}', [ECHController::class, 'delete'])->name('del-ECH');
    Route::get('/home/electrical/ECH/deleteAll/{category}', [ECHController::class, 'destroy'])->name('destroy-ECH');
    //Area6    
    Route::get('/home/Area6', [Area6Controller::class, 'index'])->name('Area6');
    Route::get('/home/Area6/{id}', [Area6Controller::class, 'open'])->name('open-Area6');
    Route::get('/home/Area6/view/{id}', [Area6Controller::class, 'view'])->name('view-Area6');
    Route::post('/home/Area6/pw/{id}', [Area6Controller::class, 'password'])->name('pw-Area6');
    Route::post('/home/add-Area6', [Area6Controller::class, 'upload'])->name('up-Area6');
    Route::get('/home/Area6/delete/{id}', [Area6Controller::class, 'delete'])->name('del-Area6');
    Route::get('/home/Area6/deleteAll/{category}', [Area6Controller::class, 'destroy'])->name('destroy-Area6');
    //Area7    
    Route::get('/home/Area7', [Area7Controller::class, 'index'])->name('Area7');
    Route::get('/home/Area7/{id}', [Area7Controller::class, 'open'])->name('open-Area7');
    Route::get('/home/Area7/view/{id}', [Area7Controller::class, 'view'])->name('view-Area7');
    Route::post('/home/Area7/pw/{id}', [Area7Controller::class, 'password'])->name('pw-Area7');
    Route::post('/home/add-Area7', [Area7Controller::class, 'upload'])->name('up-Area7');
    Route::get('/home/Area7/delete/{id}', [Area7Controller::class, 'delete'])->name('del-Area7');
    Route::get('/home/Area7/deleteAll/{category}', [Area7Controller::class, 'destroy'])->name('destroy-Area7');
    //Area8    
    Route::get('/home/Area8', [Area8Controller::class, 'index'])->name('Area8');
    Route::get('/home/Area8/{id}', [Area8Controller::class, 'open'])->name('open-Area8');
    Route::get('/home/Area8/view/{id}', [Area8Controller::class, 'view'])->name('view-Area8');
    Route::post('/home/Area8/pw/{id}', [Area8Controller::class, 'password'])->name('pw-Area8');
    Route::post('/home/add-Area8', [Area8Controller::class, 'upload'])->name('up-Area8');
    Route::get('/home/Area8/delete/{id}', [Area8Controller::class, 'delete'])->name('del-Area8');
    Route::get('/home/Area8/deleteAll/{category}', [Area8Controller::class, 'destroy'])->name('destroy-Area8');
    //Area9    
    Route::get('/home/Area9', [Area9Controller::class, 'index'])->name('Area9');
    Route::get('/home/Area9/{id}', [Area9Controller::class, 'open'])->name('open-Area9');
    Route::get('/home/Area9/view/{id}', [Area9Controller::class, 'view'])->name('view-Area9');
    Route::post('/home/Area9/pw/{id}', [Area9Controller::class, 'password'])->name('pw-Area9');
    Route::post('/home/add-Area9', [Area9Controller::class, 'upload'])->name('up-Area9');
    Route::get('/home/Area9/delete/{id}', [Area9Controller::class, 'delete'])->name('del-Area9');
    Route::get('/home/Area9/deleteAll/{category}', [Area9Controller::class, 'destroy'])->name('destroy-Area9');
    //Area10    
    Route::get('/home/Area10', [Area10Controller::class, 'index'])->name('Area10');
    Route::get('/home/Area10/{id}', [Area10Controller::class, 'open'])->name('open-Area10');
    Route::get('/home/Area10/view/{id}', [Area10Controller::class, 'view'])->name('view-Area10');
    Route::post('/home/Area10/pw/{id}', [Area10Controller::class, 'password'])->name('pw-Area10');
    Route::post('/home/add-Area10', [Area10Controller::class, 'upload'])->name('up-Area10');
    Route::get('/home/Area10/delete/{id}', [Area10Controller::class, 'delete'])->name('del-Area10');
    Route::get('/home/Area10/deleteAll/{category}', [Area10Controller::class, 'destroy'])->name('destroy-Area10');
    //Area11    
    Route::get('/home/Area11', [Area11Controller::class, 'index'])->name('Area11');
    Route::get('/home/Area11/{id}', [Area11Controller::class, 'open'])->name('open-Area11');
    Route::get('/home/Area11/view/{id}', [Area11Controller::class, 'view'])->name('view-Area11');
    Route::post('/home/Area11/pw/{id}', [Area11Controller::class, 'password'])->name('pw-Area11');
    Route::post('/home/add-Area11', [Area11Controller::class, 'upload'])->name('up-Area11');
    Route::get('/home/Area11/delete/{id}', [Area11Controller::class, 'delete'])->name('del-Area11');
    Route::get('/home/Area11/deleteAll/{category}', [Area11Controller::class, 'destroy'])->name('destroy-Area11');
    //Area12    
    Route::get('/home/Area12', [Area12Controller::class, 'index'])->name('Area12');
    Route::get('/home/Area12/{id}', [Area12Controller::class, 'open'])->name('open-Area12');
    Route::get('/home/Area12/view/{id}', [Area12Controller::class, 'view'])->name('view-Area12');
    Route::post('/home/Area12/pw/{id}', [Area12Controller::class, 'password'])->name('pw-Area12');
    Route::post('/home/add-Area12', [Area12Controller::class, 'upload'])->name('up-Area12');
    Route::get('/home/Area12/delete/{id}', [Area12Controller::class, 'delete'])->name('del-Area12');
    Route::get('/home/Area12/deleteAll/{category}', [Area12Controller::class, 'destroy'])->name('destroy-Area12');
    //Area13    
    Route::get('/home/Area13', [Area13Controller::class, 'index'])->name('Area13');
    Route::get('/home/Area13/{id}', [Area13Controller::class, 'open'])->name('open-Area13');
    Route::get('/home/Area13/view/{id}', [Area13Controller::class, 'view'])->name('view-Area13');
    Route::post('/home/Area13/pw/{id}', [Area13Controller::class, 'password'])->name('pw-Area13');
    Route::post('/home/add-Area13', [Area13Controller::class, 'upload'])->name('up-Area13');
    Route::get('/home/Area13/delete/{id}', [Area13Controller::class, 'delete'])->name('del-Area13');
    Route::get('/home/Area13/deleteAll/{category}', [Area13Controller::class, 'destroy'])->name('destroy-Area13');
    //Area14    
    Route::get('/home/Area14', [Area14Controller::class, 'index'])->name('Area14');
    Route::get('/home/Area14/{id}', [Area14Controller::class, 'open'])->name('open-Area14');
    Route::get('/home/Area14/view/{id}', [Area14Controller::class, 'view'])->name('view-Area14');
    Route::post('/home/Area14/pw/{id}', [Area14Controller::class, 'password'])->name('pw-Area14');
    Route::post('/home/add-Area14', [Area14Controller::class, 'upload'])->name('up-Area14');
    Route::get('/home/Area14/delete/{id}', [Area14Controller::class, 'delete'])->name('del-Area14');
    Route::get('/home/Area14/deleteAll/{category}', [Area14Controller::class, 'destroy'])->name('destroy-Area14');
    //Area15    
    Route::get('/home/Area15', [Area15Controller::class, 'index'])->name('Area15');
    Route::get('/home/Area15/{id}', [Area15Controller::class, 'open'])->name('open-Area15');
    Route::get('/home/Area15/view/{id}', [Area15Controller::class, 'view'])->name('view-Area15');
    Route::post('/home/Area15/pw/{id}', [Area15Controller::class, 'password'])->name('pw-Area15');
    Route::post('/home/add-Area15', [Area15Controller::class, 'upload'])->name('up-Area15');
    Route::get('/home/Area15/delete/{id}', [Area15Controller::class, 'delete'])->name('del-Area15');
    Route::get('/home/Area15/deleteAll/{category}', [Area15Controller::class, 'destroy'])->name('destroy-Area15');
    //Area16    
    Route::get('/home/Area16', [Area16Controller::class, 'index'])->name('Area16');
    Route::get('/home/Area16/{id}', [Area16Controller::class, 'open'])->name('open-Area16');
    Route::get('/home/Area16/view/{id}', [Area16Controller::class, 'view'])->name('view-Area16');
    Route::post('/home/Area16/pw/{id}', [Area16Controller::class, 'password'])->name('pw-Area16');
    Route::post('/home/add-Area16', [Area16Controller::class, 'upload'])->name('up-Area16');
    Route::get('/home/Area16/delete/{id}', [Area16Controller::class, 'delete'])->name('del-Area16');
    Route::get('/home/Area16/deleteAll/{category}', [Area16Controller::class, 'destroy'])->name('destroy-Area16');
    //Area17    
    Route::get('/home/Area17', [Area17Controller::class, 'index'])->name('Area17');
    Route::get('/home/Area17/{id}', [Area17Controller::class, 'open'])->name('open-Area17');
    Route::get('/home/Area17/view/{id}', [Area17Controller::class, 'view'])->name('view-Area17');
    Route::post('/home/Area17/pw/{id}', [Area17Controller::class, 'password'])->name('pw-Area17');
    Route::post('/home/add-Area17', [Area17Controller::class, 'upload'])->name('up-Area17');
    Route::get('/home/Area17/delete/{id}', [Area17Controller::class, 'delete'])->name('del-Area17');
    Route::get('/home/Area17/deleteAll/{category}', [Area17Controller::class, 'destroy'])->name('destroy-Area17');
    //Area18    
    Route::get('/home/Area18', [Area18Controller::class, 'index'])->name('Area18');
    Route::get('/home/Area18/{id}', [Area18Controller::class, 'open'])->name('open-Area18');
    Route::get('/home/Area18/view/{id}', [Area18Controller::class, 'view'])->name('view-Area18');
    Route::post('/home/Area18/pw/{id}', [Area18Controller::class, 'password'])->name('pw-Area18');
    Route::post('/home/add-Area18', [Area18Controller::class, 'upload'])->name('up-Area18');
    Route::get('/home/Area18/delete/{id}', [Area18Controller::class, 'delete'])->name('del-Area18');
    Route::get('/home/Area18/deleteAll/{category}', [Area18Controller::class, 'destroy'])->name('destroy-Area18');
    //Area19    
    Route::get('/home/Area19', [Area19Controller::class, 'index'])->name('Area19');
    Route::get('/home/Area19/{id}', [Area19Controller::class, 'open'])->name('open-Area19');
    Route::get('/home/Area19/view/{id}', [Area19Controller::class, 'view'])->name('view-Area19');
    Route::post('/home/Area19/pw/{id}', [Area19Controller::class, 'password'])->name('pw-Area19');
    Route::post('/home/add-Area19', [Area19Controller::class, 'upload'])->name('up-Area19');
    Route::get('/home/Area19/delete/{id}', [Area19Controller::class, 'delete'])->name('del-Area19');
    Route::get('/home/Area19/deleteAll/{category}', [Area19Controller::class, 'destroy'])->name('destroy-Area19');
    //Area20    
    Route::get('/home/Area20', [Area20Controller::class, 'index'])->name('Area20');
    Route::get('/home/Area20/{id}', [Area20Controller::class, 'open'])->name('open-Area20');
    Route::get('/home/Area20/view/{id}', [Area20Controller::class, 'view'])->name('view-Area20');
    Route::post('/home/Area20/pw/{id}', [Area20Controller::class, 'password'])->name('pw-Area20');
    Route::post('/home/add-Area20', [Area20Controller::class, 'upload'])->name('up-Area20');
    Route::get('/home/Area20/delete/{id}', [Area20Controller::class, 'delete'])->name('del-Area20');
    Route::get('/home/Area20/deleteAll/{category}', [Area20Controller::class, 'destroy'])->name('destroy-Area20');
    //Area21    
    Route::get('/home/Area21', [Area21Controller::class, 'index'])->name('Area21');
    Route::get('/home/Area21/{id}', [Area21Controller::class, 'open'])->name('open-Area21');
    Route::get('/home/Area21/view/{id}', [Area21Controller::class, 'view'])->name('view-Area21');
    Route::post('/home/Area21/pw/{id}', [Area21Controller::class, 'password'])->name('pw-Area21');
    Route::post('/home/add-Area21', [Area21Controller::class, 'upload'])->name('up-Area21');
    Route::get('/home/Area21/delete/{id}', [Area21Controller::class, 'delete'])->name('del-Area21');
    Route::get('/home/Area21/deleteAll/{category}', [Area21Controller::class, 'destroy'])->name('destroy-Area21');
    //Area22    
    Route::get('/home/Area22', [Area22Controller::class, 'index'])->name('Area22');
    Route::get('/home/Area22/{id}', [Area22Controller::class, 'open'])->name('open-Area22');
    Route::get('/home/Area22/view/{id}', [Area22Controller::class, 'view'])->name('view-Area22');
    Route::post('/home/Area22/pw/{id}', [Area22Controller::class, 'password'])->name('pw-Area22');
    Route::post('/home/add-Area22', [Area22Controller::class, 'upload'])->name('up-Area22');
    Route::get('/home/Area22/delete/{id}', [Area22Controller::class, 'delete'])->name('del-Area22');
    Route::get('/home/Area22/deleteAll/{category}', [Area22Controller::class, 'destroy'])->name('destroy-Area22');
    //Area23    
    Route::get('/home/Area23', [Area23Controller::class, 'index'])->name('Area23');
    Route::get('/home/Area23/{id}', [Area23Controller::class, 'open'])->name('open-Area23');
    Route::get('/home/Area23/view/{id}', [Area23Controller::class, 'view'])->name('view-Area23');
    Route::post('/home/Area23/pw/{id}', [Area23Controller::class, 'password'])->name('pw-Area23');
    Route::post('/home/add-Area23', [Area23Controller::class, 'upload'])->name('up-Area23');
    Route::get('/home/Area23/delete/{id}', [Area23Controller::class, 'delete'])->name('del-Area23');
    Route::get('/home/Area23/deleteAll/{category}', [Area23Controller::class, 'destroy'])->name('destroy-Area23');
    //Area24    
    Route::get('/home/Area24', [Area24Controller::class, 'index'])->name('Area24');
    Route::get('/home/Area24/{id}', [Area24Controller::class, 'open'])->name('open-Area24');
    Route::get('/home/Area24/view/{id}', [Area24Controller::class, 'view'])->name('view-Area24');
    Route::post('/home/Area24/pw/{id}', [Area24Controller::class, 'password'])->name('pw-Area24');
    Route::post('/home/add-Area24', [Area24Controller::class, 'upload'])->name('up-Area24');
    Route::get('/home/Area24/delete/{id}', [Area24Controller::class, 'delete'])->name('del-Area24');
    Route::get('/home/Area24/deleteAll/{category}', [Area24Controller::class, 'destroy'])->name('destroy-Area24');
    //Area25    
    Route::get('/home/Area25', [Area25Controller::class, 'index'])->name('Area25');
    Route::get('/home/Area25/{id}', [Area25Controller::class, 'open'])->name('open-Area25');
    Route::get('/home/Area25/view/{id}', [Area25Controller::class, 'view'])->name('view-Area25');
    Route::post('/home/Area25/pw/{id}', [Area25Controller::class, 'password'])->name('pw-Area25');
    Route::post('/home/add-Area25', [Area25Controller::class, 'upload'])->name('up-Area25');
    Route::get('/home/Area25/delete/{id}', [Area25Controller::class, 'delete'])->name('del-Area25');
    Route::get('/home/Area25/deleteAll/{category}', [Area25Controller::class, 'destroy'])->name('destroy-Area25');
    //Area26    
    Route::get('/home/Area26', [Area26Controller::class, 'index'])->name('Area26');
    Route::get('/home/Area26/{id}', [Area26Controller::class, 'open'])->name('open-Area26');
    Route::get('/home/Area26/view/{id}', [Area26Controller::class, 'view'])->name('view-Area26');
    Route::post('/home/Area26/pw/{id}', [Area26Controller::class, 'password'])->name('pw-Area26');
    Route::post('/home/add-Area26', [Area26Controller::class, 'upload'])->name('up-Area26');
    Route::get('/home/Area26/delete/{id}', [Area26Controller::class, 'delete'])->name('del-Area26');
    Route::get('/home/Area26/deleteAll/{category}', [Area26Controller::class, 'destroy'])->name('destroy-Area26');
    //Area27    
    Route::get('/home/Area27', [Area27Controller::class, 'index'])->name('Area27');
    Route::get('/home/Area27/{id}', [Area27Controller::class, 'open'])->name('open-Area27');
    Route::get('/home/Area27/view/{id}', [Area27Controller::class, 'view'])->name('view-Area27');
    Route::post('/home/Area27/pw/{id}', [Area27Controller::class, 'password'])->name('pw-Area27');
    Route::post('/home/add-Area27', [Area27Controller::class, 'upload'])->name('up-Area27');
    Route::get('/home/Area27/delete/{id}', [Area27Controller::class, 'delete'])->name('del-Area27');
    Route::get('/home/Area27/deleteAll/{category}', [Area27Controller::class, 'destroy'])->name('destroy-Area27');
    //Area28    
    Route::get('/home/Area28', [Area28Controller::class, 'index'])->name('Area28');
    Route::get('/home/Area28/{id}', [Area28Controller::class, 'open'])->name('open-Area28');
    Route::get('/home/Area28/view/{id}', [Area28Controller::class, 'view'])->name('view-Area28');
    Route::post('/home/Area28/pw/{id}', [Area28Controller::class, 'password'])->name('pw-Area28');
    Route::post('/home/add-Area28', [Area28Controller::class, 'upload'])->name('up-Area28');
    Route::get('/home/Area28/delete/{id}', [Area28Controller::class, 'delete'])->name('del-Area28');
    Route::get('/home/Area28/deleteAll/{category}', [Area28Controller::class, 'destroy'])->name('destroy-Area28');
    //Area29    
    Route::get('/home/Area29', [Area29Controller::class, 'index'])->name('Area29');
    Route::get('/home/Area29/{id}', [Area29Controller::class, 'open'])->name('open-Area29');
    Route::get('/home/Area29/view/{id}', [Area29Controller::class, 'view'])->name('view-Area29');
    Route::post('/home/Area29/pw/{id}', [Area29Controller::class, 'password'])->name('pw-Area29');
    Route::post('/home/add-Area29', [Area29Controller::class, 'upload'])->name('up-Area29');
    Route::get('/home/Area29/delete/{id}', [Area29Controller::class, 'delete'])->name('del-Area29');
    Route::get('/home/Area29/deleteAll/{category}', [Area29Controller::class, 'destroy'])->name('destroy-Area29');
    //Area30    
    Route::get('/home/Area30', [Area30Controller::class, 'index'])->name('Area30');
    Route::get('/home/Area30/{id}', [Area30Controller::class, 'open'])->name('open-Area30');
    Route::get('/home/Area30/view/{id}', [Area30Controller::class, 'view'])->name('view-Area30');
    Route::post('/home/Area30/pw/{id}', [Area30Controller::class, 'password'])->name('pw-Area30');
    Route::post('/home/add-Area30', [Area30Controller::class, 'upload'])->name('up-Area30');
    Route::get('/home/Area30/delete/{id}', [Area30Controller::class, 'delete'])->name('del-Area30');
    Route::get('/home/Area30/deleteAll/{category}', [Area30Controller::class, 'destroy'])->name('destroy-Area30');
    //Area31    
    Route::get('/home/Area31', [Area31Controller::class, 'index'])->name('Area31');
    Route::get('/home/Area31/{id}', [Area31Controller::class, 'open'])->name('open-Area31');
    Route::get('/home/Area31/view/{id}', [Area31Controller::class, 'view'])->name('view-Area31');
    Route::post('/home/Area31/pw/{id}', [Area31Controller::class, 'password'])->name('pw-Area31');
    Route::post('/home/add-Area31', [Area31Controller::class, 'upload'])->name('up-Area31');
    Route::get('/home/Area31/delete/{id}', [Area31Controller::class, 'delete'])->name('del-Area31');
    Route::get('/home/Area31/deleteAll/{category}', [Area31Controller::class, 'destroy'])->name('destroy-Area31');


    //Masterlist
    Route::get('/masterlist', [MasterListController::class, 'mstrlist'])->name('masterlist');
    Route::post('/add-masterlist', [MasterListController::class, 'upload'])->name('upload-mstr');
    Route::get('masterlist/{id}', [MasterListController::class, 'show'])->name('mstrlist.show');
    Route::get('/masterlist/delete/{id}', [MasterListController::class, 'delete'])->name('deleteML');





});

Route::group(['middleware' => ['auth', 'App\Http\Middleware\CekRole:admin']], function () {
    Route::get('/history', [HistoryController::class, 'index'])->name('history');
    Route::delete('history/delete-all', [HistoryController::class, 'destroy'])->name('del-history');
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

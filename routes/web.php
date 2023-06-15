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

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingPageController::class, 'home'])->name('home');

Route::post('login', [AuthController::class, 'login'])->name('login_post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('home', [LandingPageController::class, 'home'])->name('home');
Route::post('qrbooking', [LandingPageController::class, 'qrbooking'])->name('qrbooking');


//Action
Route::post('upload_profile', [DashboardController::class, 'upload_profile'])->name('upload_profile');
Route::post('actionshowdata', [DashboardController::class, 'actionshowdata'])->name('actionshowdata');
Route::post('actionshowdatawmulti', [DashboardController::class, 'actionshowdatawmulti'])->name('actionshowdatawmulti');
Route::post('actionlistdata', [DashboardController::class, 'actionlistdata'])->name('actionlistdata');
Route::post('actionedit', [DashboardController::class, 'actionedit'])->name('actionedit');
Route::post('actioneditwmulti', [DashboardController::class, 'actioneditwmulti'])->name('actioneditwmulti');
Route::post('actiondelete', [DashboardController::class, 'actiondelete'])->name('actiondelete');
Route::post('actionadd', [DashboardController::class, 'actionadd'])->name('actionadd');

Route::middleware(['auth'])->group(function () {
    //Dashboard
    Route::get('dasbor', [DashboardController::class, 'dasbor'])->name('dasbor');

    Route::middleware(['auth'],'role_id:1')->group(function () {
        //Users
        Route::get('users', [DashboardController::class, 'users'])->name('users');

        // Sparepart
        Route::get('categorypart', [DashboardController::class, 'categorypart'])->name('categorypart');
        Route::get('listpart', [DashboardController::class, 'listpart'])->name('listpart');

        // Booking
        Route::get('actionbooking', [DashboardController::class, 'actionbooking'])->name('actionbooking');
        Route::get('listbooking', [DashboardController::class, 'listbooking'])->name('listbooking');
        Route::post('addkeperluanbooking', [DashboardController::class, 'addkeperluanbooking'])->name('addkeperluanbooking');
        Route::post('konfirmationkeperluanbooking', [DashboardController::class, 'konfirmationkeperluanbooking'])->name('konfirmationkeperluanbooking');

        Route::get('montir', [DashboardController::class, 'montir'])->name('montir');
        Route::post('startmontir', [DashboardController::class, 'startmontir'])->name('startmontir');
        Route::post('endmontir', [DashboardController::class, 'endmontir'])->name('endmontir');
        Route::post('viewdetailbooking', [DashboardController::class, 'viewdetailbooking'])->name('viewdetailbooking');


    });

});

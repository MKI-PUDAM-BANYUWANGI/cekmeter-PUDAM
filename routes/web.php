<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MerkMeterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Login
Route::controller(LoginController::class)->group(function(){

    Route::get('/', 'index');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

});

// dashboard harus login
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    Route::resource('/dashboard/merkmeter', MerkMeterController::class);
});

Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::get('/', [AuthLoginController::class, 'index'])->name('login');
// Route::post('/', [LoginController::class, 'authenticate']);

// Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard')->middleware('auth');


Route::get('/pelanggan', function () {
    return view('data/pelanggan/pelanggan');
});

Route::get('/tambah-pelanggan', function () {
    return view('data/pelanggan/tambah-pelanggan');
});

Route::get('/staff', function () {
    return view('data/staff/staff');
});

Route::get('/tambahstaff', function () {
    return view('data/staff/tambahstaff');
});
Route::get('/profile', function () {
    return view('profile/profile');
});
Route::get('/ubahpassword', function () {
    return view('profile/ubahpassword');
});

// Route::get('/merkmeter', function () {
//     return view('data/merkmeter/merkmeter');
// });

// Route::get('/tambahmerkmeter', function () {
//     return view('data/merkmeter/tambahmerkmeter');
// });

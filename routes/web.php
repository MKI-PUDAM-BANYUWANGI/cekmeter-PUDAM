<?php

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

Route::get('/', function () {
    return view('Auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

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

Route::get('/merkmeter', function () {
    return view('merkmeter');
});

Route::get('/tambahmerkmeter', function () {
    return view('tambahmerkmeter');
});
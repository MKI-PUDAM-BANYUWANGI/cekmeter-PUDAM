<?php

use App\Http\Controllers\API\ApiLogDataController;
use App\Http\Controllers\API\ApiLoginController;
use App\Http\Controllers\API\MerkMeterController;
use App\Http\Controllers\API\PelangganController;
use App\Http\Controllers\API\StaffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('auth')->group(function () {
    Route::post('/login', [ApiLoginController::class, 'login'])->middleware('api');
    Route::middleware('auth:sanctum')->group(function () {
        // Login
        Route::post('/logout', [ApiLoginController::class, 'logout']);
        Route::get('/user-profile', [ApiLoginController::class, 'userProfile']);

        // Pelanggan
        Route::apiResource('pelanggan', PelangganController::class);
        Route::post('pelanggan/search', [PelangganController::class, 'search']);

        // Merk Meter
        Route::apiResource('merk-meter', MerkMeterController::class);

        // Staff
        Route::apiResource('staff', StaffController::class);

        // Log Data
        Route::apiResource('log-data', ApiLogDataController::class);
    });
});

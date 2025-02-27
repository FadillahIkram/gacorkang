<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\MedisController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\MedicineController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Di sini adalah tempat untuk mendaftarkan rute API untuk aplikasi Anda.
| Rute-rute ini dimuat oleh RouteServiceProvider dalam grup yang
| diberi middleware 'api'. Selamat membangun API Anda!
|
*/
Route::get('/patients', [PasienController::class, 'index']);
Route::get('/api/patients', [ApiController::class, 'index']);
Route::get('/patients/{id}/medis', [MedisController::class, 'getPatientMedis']);
Route::get('/medicines', [MedicineController::class, 'index']); // Get all medicines
Route::post('/medicines', [MedicineController::class, 'store']); // Add a new medicine
Route::get('/medicines/{id}', [MedicineController::class, 'show']); // Get a specific medicine
Route::put('/medicines/{id}', [MedicineController::class, 'update']); // Update a specific medicine
Route::delete('/medicines/{id}', [MedicineController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

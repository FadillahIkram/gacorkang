<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\MedisController;
use App\Http\Controllers\MedicineController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('patients', PasienController::class);
Route::resource('medis', MedisController::class)->parameters([
    'medis' => 'medis',]);
Route::resource('medicines', MedicineController::class);


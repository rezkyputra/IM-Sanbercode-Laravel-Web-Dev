<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarController;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/daftar', [DaftarController::class, 'pendaftaran']);

Route::post('/dashboard', [DaftarController::class, 'dashboard']);
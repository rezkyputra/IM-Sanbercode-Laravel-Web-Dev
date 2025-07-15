<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiodataController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/daftar', [BiodataController::class, 'formdaftar']);
Route::post('/home', [BiodataController::class, 'welcome']);

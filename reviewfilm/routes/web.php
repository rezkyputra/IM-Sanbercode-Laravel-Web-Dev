<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/daftar', [DaftarController::class, 'register']);
Route::post('/welcome', [DaftarController::class, 'welcome']);

Route::get('/master', function(){
    return view("layouts.master");
});

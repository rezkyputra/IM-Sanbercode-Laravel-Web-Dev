<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/daftar', [BiodataController::class, 'formdaftar']);
Route::post('/home', [BiodataController::class, 'welcome']);

// CRUD Categories
// C => Create Data
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);

// R => Read Data
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);

// U => Update Data
Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/category/{id}', [CategoryController::class, 'update']);

// D => Delete Data
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
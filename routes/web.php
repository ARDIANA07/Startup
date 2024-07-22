<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

//router login
Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth', [AuthController::class, 'post_login']);

//router home
Route::get('/', [HomeController::class, 'index']);
Route::get('/categori', [CategoryController::class, 'index']);

//router admin
route::get('/admin', [AdminController::class, 'index']);

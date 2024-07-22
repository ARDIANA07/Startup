<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

//router login
Route::get('/auth', [AuthController::class, 'index']);

//router home
Route::get('/', [HomeController::class, 'index']);
Route::get('/categori', [CategoryController::class, 'index']);
route::get('/admin', [AdminController::class, 'index']);

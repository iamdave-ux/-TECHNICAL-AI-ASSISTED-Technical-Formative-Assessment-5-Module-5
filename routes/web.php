<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

// Landing and About Pages handled by PageController
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);

// Account Pages handled by their respective controllers
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
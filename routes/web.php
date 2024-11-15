<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');


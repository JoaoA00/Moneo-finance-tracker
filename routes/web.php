<?php

use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\UserController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
Route::get('/transactions', [TransactionsController::class, 'show'])->middleware('auth');
Route::get('/add-transaction', [UserController::class, 'addTransaction'])->middleware('auth');
Route::post('/add-transaction', [TransactionsController::class, 'store'])->middleware('auth');


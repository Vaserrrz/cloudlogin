<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('login', [LoginController::class, 'index'])->name('login.sesion');
Route::post('login', [LoginController::class, 'log'])->name('login')->middleware('guest');
Route::get('login/register', [LoginController::class, 'register'])->name('login.register');
Route::post('login/register', [LoginController::class, 'store'])->name('login.store');
Route::get('Dashboard', [LoginController::class, 'show'])->name('login.dashboard')->middleware('auth');
Route::get('login/logout', [LoginController::class, 'exituser'])->name('login.exit');

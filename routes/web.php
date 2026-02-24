<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', [UserController::class , 'index']);
Route::get('login' , [LoginController::class , 'index'])->name('view.auth.login');
Route::get('register' , [RegisterController::class , 'index'])->name('view.auth.register');
Route::post('register' , [RegisterController::class , 'register'])->name('auth.register');
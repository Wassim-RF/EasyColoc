<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

Route::get('/', [UserController::class , 'index']);
Route::get('login' , [LoginController::class , 'index'])->name('view.auth.login');
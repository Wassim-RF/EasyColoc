<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ColocationsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\InAColocation;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', [UserController::class , 'index']);

// Auth
Route::get('login' , [LoginController::class , 'index'])->name('view.auth.login');
Route::get('register' , [RegisterController::class , 'index'])->name('view.auth.register');
Route::post('login' , [LoginController::class , 'login'])->name('auth.login');
Route::post('register' , [RegisterController::class , 'register'])->name('auth.register');


// Is Login
Route::middleware(Authenticate::class)->group(function() {
    Route::post('logout' , [LogoutController::class , 'logout'])->name('auth.logout');
    Route::get('home' , [UserController::class , 'userDashboard'])->name('view.user.home');
    Route::post('createColocation' , [ColocationsController::class , 'store'])->name('colocation.creation');
    Route::post('InviteToColocation' , [MailController::class , 'inviteToColocation'])->name('colocation.invite');
});

Route::get('/invitation/{token}' , function($token) {
    if (!Auth::check()) {
        session(['invite_token' => $token]);

        return redirect()->route('view.auth.login');  
    }
    return view('user.colocation.invite');
})->name('colocation.invitation');
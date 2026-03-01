<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ColocationsController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminVerification;
use App\Http\Middleware\Authenticate;
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
    Route::get('addColocation' , [UserController::class , 'addColocationView'])->name('view.user.addColocation');
    Route::get('return' , [UserController::class , 'returnToHome'])->name('view.user.returnToHome');
    Route::get('payements' , [PaymentController::class , 'index'])->name('view.user.payements');
    Route::get('colocation/{id}/addDepeses' , [DepenseController::class , 'index']);
    Route::get('colocation/{id}/invite' , [InvitationController::class , 'inviteNewMember'])->name('view.user.invite');
    Route::post('createColocation' , [ColocationsController::class , 'store'])->name('colocation.creation');
    Route::post('InviteToColocation' , [MailController::class , 'inviteToColocation'])->name('colocation.invite');
    Route::post('invitation/accept' , [InvitationController::class , 'acceptInvitation'])->name('invitation.accept');
    Route::post('invitation/refuse' , [InvitationController::class , 'refuseInvitation'])->name('invitation.refuse');
    Route::post('addDepense' , [DepenseController::class , 'store'])->name('depense.creation');
    Route::post('payement/toogleAsPayed' , [PaymentController::class , 'toogleAsPayed'])->name('payement.tooglePayed');
    Route::post('colocation/desactive' , [ColocationsController::class , 'desactiveColocation'])->name('colocation.desactive');
    Route::post('colocation/quit' , [UserController::class , 'quitterColocation'])->name('colocation.quitter');
    Route::get('colocation/{id}' , [ColocationsController::class , 'index']);

    Route::get('admin/dashboard' , [AdminController::class , 'index'])->middleware(AdminVerification::class);
    Route::post('banUser' , [AdminController::class , 'toggleBan'])->name('admin.banUser');
});

// Inviation
Route::get('invitation/{token}' , [InvitationController::class , 'index'])->name('colocation.invitation');
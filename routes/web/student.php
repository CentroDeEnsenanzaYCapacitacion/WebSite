<?php

use App\Http\Controllers\Student\Auth\LoginController;
use App\Http\Controllers\Student\Auth\LogoutController;
use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\PaymentsController;
use Illuminate\Support\Facades\Route;



Route::prefix('student')->name('student.')->group(function () {

    
    Route::middleware('guest:student')->group(function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])
            ->middleware('throttle:5,1')
            ->name('login.post');
    });

    
    Route::middleware('auth:student')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/payments', [PaymentsController::class, 'index'])->name('payments');
        Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    });
});

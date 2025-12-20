<?php

use App\Http\Controllers\Student\Auth\LoginController;
use App\Http\Controllers\Student\Auth\LogoutController;
use App\Http\Controllers\Student\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Student Area Routes
|--------------------------------------------------------------------------
|
| Rutas del área de estudiantes. Incluye autenticación y funcionalidades
| exclusivas para usuarios autenticados.
|
*/

Route::prefix('student')->name('student.')->group(function () {

    // Rutas para invitados (no autenticados)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])
            ->middleware('throttle:5,1')
            ->name('login.post');
    });

    // Rutas protegidas (requieren autenticación)
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    });
});

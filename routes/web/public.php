<?php

use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\CourseController;
use App\Http\Controllers\Web\CrewsController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\OfferController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactPost'])
    ->middleware('throttle:3,10')
    ->name('contact.post');

Route::get('/course', [CourseController::class, 'showCourse'])->name('course');

Route::get('/crews', [CrewsController::class, 'show'])->name('crews');

Route::get('/secondary', [OfferController::class, 'showOffer'])->name('secondary');





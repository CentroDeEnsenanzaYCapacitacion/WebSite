<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CrewsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'home'])->name('home');

Route::get('/contact', [ContactController::class,'contact'])->name('contact');

Route::post('/contact', [ContactController::class,'contactPost'])->name('contact.post');

Route::get('/course', [CourseController::class,'showCourse'])->name('course');

Route::get('/crews', [CrewsController::class,'show'])->name('crews');

// Route::get('/noticec', function () {
//     return view('cecnews');
// })->name('cecnews');

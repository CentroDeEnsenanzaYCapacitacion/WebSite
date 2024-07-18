<?php

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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/crews', function () {
    return view('crews');
})->name('crews');

Route::get('/noticec', function () {
    return view('cecnews');
})->name('cecnews');

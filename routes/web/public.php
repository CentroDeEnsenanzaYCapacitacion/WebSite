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

Route::get('/secundaria', [OfferController::class, 'secondary'])->name('secondary');
Route::get('/bachillerato-examen', [OfferController::class, 'bachilleratoExamen'])->name('bachillerato.examen');
Route::get('/bachillerato', [OfferController::class, 'bachillerato'])->name('bachillerato');
Route::get('/licenciatura-derecho', [OfferController::class, 'licenciaturaDerecho'])->name('licenciatura.derecho');
Route::get('/licenciatura-contabilidad', [OfferController::class, 'licenciaturaContabilidad'])->name('licenciatura.contabilidad');
Route::get('/licenciatura-psicologia', [OfferController::class, 'licenciaturaPsicologia'])->name('licenciatura.psicologia');
Route::get('/licenciatura-pedagogia', [OfferController::class, 'licenciaturaPedagogia'])->name('licenciatura.pedagogia');
Route::get('/licenciatura-administracion', [OfferController::class, 'licenciaturaAdministracion'])->name('licenciatura.administracion');
Route::get('/tecnico-ingles', [OfferController::class, 'tecnicoIngles'])->name('tecnico.ingles');
Route::get('/tecnico-informatica', [OfferController::class, 'tecnicoInformatica'])->name('tecnico.informatica');
Route::get('/cursos-kids', [OfferController::class, 'cursosKids'])->name('cursos.kids');





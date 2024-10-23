<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/friends', function () {
    return response()->json([
        [
            "id" => "1",
            "image_url" => "https://www.adslzone.net/app/uploads-adslzone.net/2019/04/borrar-fondo-imagen-1-930x523.jpg",
            "title" => "Card 1",
            "description" => "Descripción de la tarjeta 1"
        ],
        [
            "id" => "2",
            "image_url" => "https://definicion.com/wp-content/uploads/2022/09/imagen.jpg",
            "title" => "Card 2",
            "description" => "Descripción de la tarjeta 2"
        ],
        [
            "id" => "3",
            "image_url" => "https://www.educaciontrespuntocero.com/wp-content/uploads/2020/04/mejores-bancos-de-imagenes-gratis-860x492.jpg.webp",
            "title" => "Card 3",
            "description" => "Descripción de la tarjeta 3"
        ]
    ]);
});

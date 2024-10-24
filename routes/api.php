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
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/02/05-pedro-colab-1.jpg",
            "name" => "Pedro Reyes"
        ],
        [
            "id" => "2",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/07-mariana-colab-1.jpg",
            "name" => "Mariana Camacho"
        ],
        [
            "id" => "3",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-abena-colab-3.jpg",
            "name" => "Abena Anim-Somuah"
        ],
        [
            "id" => "4",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/04/02-lilly-colab-1.jpg",
            "name" => "liliana López"
        ]
    ]);
});

Route::get('/categories', function () {
    return response()->json([
        [
            "id" => "1",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-roma2.jpg",
            "name" => "Roma",
            "restaurants" => 39
        ],
        [
            "id" => "2",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-san-miguel-chapultepec.jpg",
            "name" => "Chapultepec",
            "restaurants" => 3
        ],
        [
            "id" => "3",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-condesa.jpg",
            "name" => "Condesa",
            "restaurants" => 15
        ],
        [
            "id" => "4",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-centro.jpg",
            "name" => "Centro",
            "restaurants" => 10
        ],
        [
            "id" => "5",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zona-coyoacan.jpg",
            "name" => "Coyoacán",
            "restaurants" => 1
        ],
        [
            "id" => "6",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zona-Cuauhtemoc.jpg",
            "name" => "Centro",
            "restaurants" => 5
        ],
        [
            "id" => "7",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zona-napoles.jpg",
            "name" => "Narvarte / Del Valle",
            "restaurants" => 4
        ],
        [
            "id" => "8",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zona-san-angel.jpg",
            "name" => "San Ángel",
            "restaurants" => 1
        ],
        [
            "id" => "9",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-juarez.jpg",
            "name" => "Juárez",
            "restaurants" => 11
        ],
        [
            "id" => "10",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-polanco.jpg",
            "name" => "Polanco",
            "restaurants" => 10
        ],
        [
            "id" => "11",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-santa-maria.jpg",
            "name" => "Santa María La Ribera",
            "restaurants" => 1
        ],
        [
            "id" => "12",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-pedregal.jpg",
            "name" => "Pedregal",
            "restaurants" => 2
        ],
        [
            "id" => "13",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-doctores.jpg",
            "name" => "Doctores",
            "restaurants" => 1
        ]
    ]);
});

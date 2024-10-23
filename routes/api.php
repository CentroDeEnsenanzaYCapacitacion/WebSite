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

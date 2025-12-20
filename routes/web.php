<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Archivo principal de rutas web. Las rutas están modularizadas en
| archivos separados dentro de la carpeta routes/web/ para mejor
| organización y mantenibilidad.
|
*/

// Rutas públicas del sitio web
require __DIR__.'/web/public.php';

// Rutas del área de estudiantes
require __DIR__.'/web/student.php';

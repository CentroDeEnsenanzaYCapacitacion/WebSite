<?php

namespace App\Http\Controllers;

use App\Models\WebCarousel;
use Illuminate\Http\Request;

class CrewsController extends Controller
{
    public function show()
    {
        $carousel_url = env('INTRANET_CAROUSEL_IMAGES_URL');
        $carousel_texts = WebCarousel::all();
        return view('crews', compact('carousel_url','carousel_texts'));
    }
}

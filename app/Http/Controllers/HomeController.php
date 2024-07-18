<?php

namespace App\Http\Controllers;

use App\Models\WebCarousel;
use App\Models\WebMvv;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $carousel_url = env('INTRANET_CAROUSEL_IMAGES_URL');
        $carousel_texts = WebCarousel::all();
        $mvv_data = WebMvv::all();
        return view('home', compact('carousel_url', 'carousel_texts', 'mvv_data'));
    }
}

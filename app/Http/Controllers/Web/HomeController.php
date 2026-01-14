<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\WebCarousel;
use App\Models\WebMvv;
use App\Models\WebOpinion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $carousel_url = env('INTRANET_CAROUSEL_IMAGES_URL');
        $opinions_url = rtrim($carousel_url, '/');
        if (strpos($opinions_url, '/carousel') !== false) {
            $opinions_url = str_replace('/carousel', '/opinions', $opinions_url);
        } else {
            $opinions_url .= '/opinions';
        }
        $carousel_texts = WebCarousel::all();
        $mvv_data = WebMvv::all();
        $opinions = WebOpinion::all();
        return view('home', compact('carousel_url', 'opinions_url', 'carousel_texts', 'mvv_data', 'opinions'));
    }
}

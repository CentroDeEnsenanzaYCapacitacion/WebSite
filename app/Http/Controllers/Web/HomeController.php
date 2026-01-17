<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\WebCarousel;
use App\Models\WebMvv;
use App\Models\WebOpinion;
use App\Services\UrlValidationService;

class HomeController extends Controller
{
    protected UrlValidationService $urlValidator;

    public function __construct(UrlValidationService $urlValidator)
    {
        $this->urlValidator = $urlValidator;
    }

    public function home()
    {
        $carousel_url = config('services.intranet.carousel_url', '');
        $carousel_url = $this->urlValidator->sanitizeUrl($carousel_url) ?? '';

        $opinions_url = '';
        if ($carousel_url) {
            $baseUrl = rtrim($carousel_url, '/');
            if (strpos($baseUrl, '/carousel') !== false) {
                $opinions_url = str_replace('/carousel', '/opinions', $baseUrl);
            } else {
                $opinions_url = $baseUrl . '/opinions';
            }
            $opinions_url = $this->urlValidator->sanitizeUrl($opinions_url) ?? '';
        }

        $carousel_texts = WebCarousel::all();
        $mvv_data = WebMvv::all();
        $opinions = WebOpinion::all();

        return view('home', compact('carousel_url', 'opinions_url', 'carousel_texts', 'mvv_data', 'opinions'));
    }
}

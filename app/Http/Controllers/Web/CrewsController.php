<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\WebCarousel;
use App\Services\UrlValidationService;

class CrewsController extends Controller
{
    protected UrlValidationService $urlValidator;

    public function __construct(UrlValidationService $urlValidator)
    {
        $this->urlValidator = $urlValidator;
    }

    public function show()
    {
        $carousel_url = config('services.intranet.carousel_url', '');
        $carousel_url = $this->urlValidator->sanitizeUrl($carousel_url) ?? '';
        $carousel_texts = WebCarousel::all();

        return view('crews', compact('carousel_url', 'carousel_texts'));
    }
}

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

        $opinionImages = [];
        if ($opinions_url) {
            foreach ($opinions as $opinion) {
                $imageUrl = $this->findOpinionImage($opinions_url, $opinion->id);
                $opinionImages[$opinion->id] = $imageUrl;
            }
        }

        return view('home', compact('carousel_url', 'opinions_url', 'carousel_texts', 'mvv_data', 'opinions', 'opinionImages'));
    }

    private function findOpinionImage(string $baseUrl, int $id): ?string
    {
        $extensions = ['jpg', 'jpeg', 'png'];
        $baseUrl = rtrim($baseUrl, '/');

        foreach ($extensions as $ext) {
            $url = "{$baseUrl}/{$id}.{$ext}";
            if ($this->imageExists($url)) {
                return $url;
            }
        }

        return null;
    }

    private function imageExists(string $url): bool
    {
        $headers = @get_headers($url, true);
        if ($headers === false) {
            return false;
        }
        $statusLine = is_array($headers[0]) ? $headers[0][0] : $headers[0];
        return str_contains($statusLine, '200');
    }
}

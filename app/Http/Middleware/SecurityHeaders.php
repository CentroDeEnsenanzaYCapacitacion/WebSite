<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        
        $response->headers->set('Content-Security-Policy', "default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net https://maps.googleapis.com https://maps.gstatic.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net; img-src 'self' data: https: *.googleapis.com *.gstatic.com; font-src 'self' data: https://fonts.gstatic.com https://cdn.jsdelivr.net; frame-src https://www.google.com;");

        return $response;
    }
}

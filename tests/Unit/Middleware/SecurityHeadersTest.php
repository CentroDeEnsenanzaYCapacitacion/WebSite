<?php

namespace Tests\Unit\Middleware;

use App\Http\Middleware\SecurityHeaders;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Tests\TestCase;

class SecurityHeadersTest extends TestCase
{
    private SecurityHeaders $middleware;

    protected function setUp(): void
    {
        parent::setUp();
        $this->middleware = new SecurityHeaders();
    }

    public function test_sets_x_frame_options_header(): void
    {
        $request = Request::create('/test', 'GET');
        $response = $this->middleware->handle($request, fn () => new Response());

        $this->assertEquals('SAMEORIGIN', $response->headers->get('X-Frame-Options'));
    }

    public function test_sets_x_content_type_options_header(): void
    {
        $request = Request::create('/test', 'GET');
        $response = $this->middleware->handle($request, fn () => new Response());

        $this->assertEquals('nosniff', $response->headers->get('X-Content-Type-Options'));
    }

    public function test_sets_x_xss_protection_header(): void
    {
        $request = Request::create('/test', 'GET');
        $response = $this->middleware->handle($request, fn () => new Response());

        $this->assertEquals('0', $response->headers->get('X-XSS-Protection'));
    }

    public function test_sets_referrer_policy_header(): void
    {
        $request = Request::create('/test', 'GET');
        $response = $this->middleware->handle($request, fn () => new Response());

        $this->assertEquals('strict-origin-when-cross-origin', $response->headers->get('Referrer-Policy'));
    }

    public function test_sets_permissions_policy_header(): void
    {
        $request = Request::create('/test', 'GET');
        $response = $this->middleware->handle($request, fn () => new Response());

        $this->assertEquals('geolocation=(self), microphone=(), camera=()', $response->headers->get('Permissions-Policy'));
    }

    public function test_sets_content_security_policy_header(): void
    {
        $request = Request::create('/test', 'GET');
        $response = $this->middleware->handle($request, fn () => new Response());

        $csp = $response->headers->get('Content-Security-Policy');
        $this->assertNotNull($csp);
        $this->assertStringContainsString("default-src 'self'", $csp);
        $this->assertStringContainsString("script-src 'self'", $csp);
        $this->assertStringContainsString("style-src 'self'", $csp);
        $this->assertStringContainsString("base-uri 'self'", $csp);
        $this->assertStringContainsString("form-action 'self'", $csp);
    }

    public function test_csp_contains_nonce(): void
    {
        $request = Request::create('/test', 'GET');
        $response = $this->middleware->handle($request, fn () => new Response());

        $csp = $response->headers->get('Content-Security-Policy');
        $this->assertMatchesRegularExpression("/nonce-[a-zA-Z0-9]{32}/", $csp);
    }

    public function test_nonce_is_shared_with_view(): void
    {
        $request = Request::create('/test', 'GET');
        $this->middleware->handle($request, fn () => new Response());

        $nonce = $request->attributes->get('csp_nonce');
        $this->assertNotNull($nonce);
        $this->assertEquals(32, strlen($nonce));
    }

    public function test_sets_hsts_header_in_production(): void
    {
        config(['app.env' => 'production']);

        $request = Request::create('/test', 'GET');
        $response = $this->middleware->handle($request, fn () => new Response());

        $hsts = $response->headers->get('Strict-Transport-Security');
        $this->assertNotNull($hsts);
        $this->assertStringContainsString('max-age=31536000', $hsts);
        $this->assertStringContainsString('includeSubDomains', $hsts);
    }

    public function test_does_not_set_hsts_header_in_non_production(): void
    {
        config(['app.env' => 'local']);

        $request = Request::create('/test', 'GET');
        $response = $this->middleware->handle($request, fn () => new Response());

        $this->assertNull($response->headers->get('Strict-Transport-Security'));
    }
}

<?php

namespace Tests\Unit\Services;

use App\Services\UrlValidationService;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class UrlValidationServiceTest extends TestCase
{
    private UrlValidationService $service;

    protected function setUp(): void
    {
        parent::setUp();
        config(['app.allowed_external_hosts' => 'localhost,capacitacioncec.edu.mx,example.com']);
        $this->service = new UrlValidationService();
    }

    public function test_allows_url_with_exact_host_match(): void
    {
        $this->assertTrue($this->service->isAllowedUrl('https://localhost/path'));
        $this->assertTrue($this->service->isAllowedUrl('https://capacitacioncec.edu.mx/api'));
        $this->assertTrue($this->service->isAllowedUrl('https://example.com'));
    }

    public function test_allows_url_with_subdomain_match(): void
    {
        $this->assertTrue($this->service->isAllowedUrl('https://api.capacitacioncec.edu.mx/data'));
        $this->assertTrue($this->service->isAllowedUrl('https://sub.example.com/test'));
    }

    public function test_rejects_url_with_non_allowed_host(): void
    {
        Log::shouldReceive('channel')
            ->with('security')
            ->andReturnSelf();

        Log::shouldReceive('warning')
            ->withAnyArgs();

        $this->assertFalse($this->service->isAllowedUrl('https://malicious.com/attack'));
        $this->assertFalse($this->service->isAllowedUrl('https://evil.org'));
    }

    public function test_rejects_invalid_url(): void
    {
        $this->assertFalse($this->service->isAllowedUrl('not-a-url'));
        $this->assertFalse($this->service->isAllowedUrl(''));
    }

    public function test_rejects_url_without_host(): void
    {
        $this->assertFalse($this->service->isAllowedUrl('/path/only'));
    }

    public function test_sanitize_url_returns_null_for_non_allowed_host(): void
    {
        Log::shouldReceive('channel')
            ->with('security')
            ->andReturnSelf();

        Log::shouldReceive('warning')
            ->withAnyArgs();

        $this->assertNull($this->service->sanitizeUrl('https://malicious.com'));
    }

    public function test_sanitize_url_returns_sanitized_url_for_allowed_host(): void
    {
        $result = $this->service->sanitizeUrl('https://example.com/path?query=value');
        $this->assertEquals('https://example.com/path?query=value', $result);
    }

    public function test_sanitize_url_rejects_non_http_schemes(): void
    {
        Log::shouldReceive('channel')
            ->with('security')
            ->andReturnSelf();

        Log::shouldReceive('warning')
            ->withAnyArgs();

        $this->assertNull($this->service->sanitizeUrl('javascript://example.com'));
        $this->assertNull($this->service->sanitizeUrl('ftp://example.com'));
    }

    public function test_sanitize_url_upgrades_http_to_https_in_production(): void
    {
        config(['app.env' => 'production']);
        $service = new UrlValidationService();

        $result = $service->sanitizeUrl('http://example.com/path');
        $this->assertStringStartsWith('https:', $result);
    }

    public function test_sanitize_url_preserves_http_in_non_production(): void
    {
        config(['app.env' => 'local']);
        $service = new UrlValidationService();

        $result = $service->sanitizeUrl('http://example.com/path');
        $this->assertStringStartsWith('http:', $result);
    }

    public function test_host_matching_is_case_insensitive(): void
    {
        $this->assertTrue($this->service->isAllowedUrl('https://LOCALHOST/path'));
        $this->assertTrue($this->service->isAllowedUrl('https://EXAMPLE.COM/test'));
    }
}

<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class UrlValidationService
{
    protected array $allowedHosts;

    public function __construct()
    {
        $hosts = config('app.allowed_external_hosts', 'localhost,capacitacioncec.edu.mx');
        $this->allowedHosts = array_map('trim', explode(',', $hosts));
    }

    public function isAllowedUrl(string $url): bool
    {
        $parsedUrl = parse_url($url);

        if (!$parsedUrl || !isset($parsedUrl['host'])) {
            return false;
        }

        $host = strtolower($parsedUrl['host']);

        foreach ($this->allowedHosts as $allowedHost) {
            $allowedHost = strtolower(trim($allowedHost));
            if ($host === $allowedHost || str_ends_with($host, '.' . $allowedHost)) {
                return true;
            }
        }

        Log::channel('security')->warning('Blocked URL access attempt', [
            'url' => $url,
            'host' => $host,
        ]);

        return false;
    }

    public function sanitizeUrl(string $url): ?string
    {
        if (!$this->isAllowedUrl($url)) {
            return null;
        }

        $parsedUrl = parse_url($url);
        $scheme = $parsedUrl['scheme'] ?? 'https';

        if (!in_array($scheme, ['http', 'https'], true)) {
            return null;
        }

        if (config('app.env') === 'production' && $scheme === 'http') {
            $url = preg_replace('/^http:/', 'https:', $url);
        }

        return filter_var($url, FILTER_SANITIZE_URL);
    }
}

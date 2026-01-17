<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class SecurityLogService
{
    public function logLoginAttempt(string $email, string $ip, bool $success, ?string $reason = null): void
    {
        $context = [
            'email' => $email,
            'ip' => $ip,
            'success' => $success,
            'timestamp' => now()->toIso8601String(),
        ];

        if ($reason) {
            $context['reason'] = $reason;
        }

        if ($success) {
            Log::channel('security')->info('Login successful', $context);
        } else {
            Log::channel('security')->warning('Login failed', $context);
        }
    }

    public function logSuspiciousActivity(string $type, array $context = []): void
    {
        $context['timestamp'] = now()->toIso8601String();
        Log::channel('security')->warning("Suspicious activity: {$type}", $context);
    }

    public function logDataAccess(string $resource, int $userId, string $action): void
    {
        Log::channel('security')->info('Data access', [
            'resource' => $resource,
            'user_id' => $userId,
            'action' => $action,
            'timestamp' => now()->toIso8601String(),
        ]);
    }
}

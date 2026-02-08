<?php

namespace Tests\Unit\Services;

use App\Services\SecurityLogService;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class SecurityLogServiceTest extends TestCase
{
    private SecurityLogService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new SecurityLogService();
    }

    public function test_logs_successful_login_attempt(): void
    {
        Log::shouldReceive('channel')
            ->with('security')
            ->once()
            ->andReturnSelf();

        Log::shouldReceive('info')
            ->once()
            ->withArgs(function ($message, $context) {
                return $message === 'Login successful'
                    && $context['email'] === 'test@example.com'
                    && $context['ip'] === '127.0.0.1'
                    && $context['success'] === true
                    && isset($context['timestamp']);
            });

        $this->service->logLoginAttempt('test@example.com', '127.0.0.1', true);
    }

    public function test_logs_failed_login_attempt(): void
    {
        Log::shouldReceive('channel')
            ->with('security')
            ->once()
            ->andReturnSelf();

        Log::shouldReceive('warning')
            ->once()
            ->withArgs(function ($message, $context) {
                return $message === 'Login failed'
                    && $context['email'] === 'test@example.com'
                    && $context['ip'] === '192.168.1.1'
                    && $context['success'] === false;
            });

        $this->service->logLoginAttempt('test@example.com', '192.168.1.1', false);
    }

    public function test_logs_failed_login_with_reason(): void
    {
        Log::shouldReceive('channel')
            ->with('security')
            ->once()
            ->andReturnSelf();

        Log::shouldReceive('warning')
            ->once()
            ->withArgs(function ($message, $context) {
                return $message === 'Login failed'
                    && $context['reason'] === 'Invalid password';
            });

        $this->service->logLoginAttempt('test@example.com', '127.0.0.1', false, 'Invalid password');
    }

    public function test_logs_suspicious_activity(): void
    {
        Log::shouldReceive('channel')
            ->with('security')
            ->once()
            ->andReturnSelf();

        Log::shouldReceive('warning')
            ->once()
            ->withArgs(function ($message, $context) {
                return $message === 'Suspicious activity: brute_force'
                    && $context['attempts'] === 10
                    && isset($context['timestamp']);
            });

        $this->service->logSuspiciousActivity('brute_force', ['attempts' => 10]);
    }

    public function test_logs_data_access(): void
    {
        Log::shouldReceive('channel')
            ->with('security')
            ->once()
            ->andReturnSelf();

        Log::shouldReceive('info')
            ->once()
            ->withArgs(function ($message, $context) {
                return $message === 'Data access'
                    && $context['resource'] === 'student_payments'
                    && $context['user_id'] === 123
                    && $context['action'] === 'view'
                    && isset($context['timestamp']);
            });

        $this->service->logDataAccess('student_payments', 123, 'view');
    }
}

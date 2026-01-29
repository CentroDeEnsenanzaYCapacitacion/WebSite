<?php

namespace App\Http\Middleware;

use App\Services\SecurityLogService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidateSessionIntegrity
{
    protected SecurityLogService $securityLog;

    public function __construct(SecurityLogService $securityLog)
    {
        $this->securityLog = $securityLog;
    }

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('student')->check()) {
            $sessionIp = $request->session()->get('login_ip');
            $sessionUserAgent = $request->session()->get('login_user_agent');

            if ($sessionIp && $sessionIp !== $request->ip()) {
                $this->securityLog->logSuspiciousActivity('ip_change_detected', [
                    'original_ip' => $sessionIp,
                    'current_ip' => $request->ip(),
                    'user_id' => Auth::guard('student')->id(),
                ]);

                Auth::guard('student')->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect()->route('student.login')->with('error', 'Sesión invalidada por razones de seguridad.');
            }

            if ($sessionUserAgent && $sessionUserAgent !== $request->userAgent()) {
                $this->securityLog->logSuspiciousActivity('user_agent_change_detected', [
                    'original_ua' => $sessionUserAgent,
                    'current_ua' => $request->userAgent(),
                    'user_id' => Auth::guard('student')->id(),
                ]);
            }
        }

        return $next($request);
    }
}

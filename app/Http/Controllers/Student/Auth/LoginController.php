<?php

namespace App\Http\Controllers\Student\Auth;

use App\Http\Controllers\Controller;
use App\Services\SecurityLogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    protected SecurityLogService $securityLog;

    public function __construct(SecurityLogService $securityLog)
    {
        $this->securityLog = $securityLog;
    }

    public function showLoginForm()
    {
        return view('student.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'max:128'],
        ]);

        $email = $credentials['email'];
        $lockoutKey = 'login_lockout_' . md5($email . $request->ip());
        $attemptsKey = 'login_attempts_' . md5($email . $request->ip());

        if (Cache::has($lockoutKey)) {
            $this->securityLog->logLoginAttempt($email, $request->ip(), false, 'Account locked');
            throw ValidationException::withMessages([
                'email' => 'Cuenta bloqueada temporalmente. Intenta de nuevo en 15 minutos.',
            ]);
        }

        $remember = $request->boolean('remember');

        if (Auth::guard('student')->attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $request->session()->put('login_ip', $request->ip());
            $request->session()->put('login_user_agent', $request->userAgent());

            Cache::forget($attemptsKey);
            $this->securityLog->logLoginAttempt($email, $request->ip(), true);

            return redirect()->intended(route('student.dashboard'));
        }

        $attempts = Cache::get($attemptsKey, 0) + 1;
        Cache::put($attemptsKey, $attempts, now()->addMinutes(15));

        if ($attempts >= 5) {
            Cache::put($lockoutKey, true, now()->addMinutes(15));
            $this->securityLog->logLoginAttempt($email, $request->ip(), false, 'Account locked after 5 attempts');
        } else {
            $this->securityLog->logLoginAttempt($email, $request->ip(), false);
        }

        throw ValidationException::withMessages([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }
}

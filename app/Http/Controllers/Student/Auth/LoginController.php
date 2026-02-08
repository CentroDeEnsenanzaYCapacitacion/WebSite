<?php

namespace App\Http\Controllers\Student\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Services\SecurityLogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
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
        $student = Student::where('email', $email)->first();

        if ($student && $this->attemptLogin($student, $credentials['password'], $remember, $request)) {
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

    protected function attemptLogin(Student $student, string $password, bool $remember, Request $request): bool
    {
        $storedHash = $student->getAttributes()['password'];

        if ($this->isBcrypt($storedHash)) {
            if (!Hash::check($password, $storedHash)) {
                return false;
            }
        } elseif (!$this->checkLegacyPassword($password, $storedHash)) {
            return false;
        } else {
            $student->password = $password;
            $student->save();
            $this->securityLog->logSuspiciousActivity('legacy_password_rehashed', [
                'email' => $student->email,
            ]);
        }

        Auth::guard('student')->login($student, $remember);
        $request->session()->regenerate();
        $request->session()->put('login_ip', $request->ip());
        $request->session()->put('login_user_agent', $request->userAgent());

        return true;
    }

    protected function isBcrypt(string $hash): bool
    {
        return str_starts_with($hash, '$2y$') || str_starts_with($hash, '$2a$') || str_starts_with($hash, '$2b$');
    }

    protected function checkLegacyPassword(string $password, string $storedHash): bool
    {
        if ($password === $storedHash) {
            return true;
        }

        if (md5($password) === $storedHash) {
            return true;
        }

        if (sha1($password) === $storedHash) {
            return true;
        }

        if (hash('sha256', $password) === $storedHash) {
            return true;
        }

        return false;
    }
}

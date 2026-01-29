<?php

namespace Tests\Feature\Student\Auth;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_form_is_displayed(): void
    {
        $response = $this->get(route('student.login'));

        $response->assertStatus(200);
        $response->assertViewIs('student.auth.login');
    }

    public function test_student_can_login_with_valid_credentials(): void
    {
        $student = Student::factory()->create([
            'email' => 'alumno@test.com',
            'password' => 'password123',
        ]);

        $response = $this->post(route('student.login.post'), [
            'email' => 'alumno@test.com',
            'password' => 'password123',
        ]);

        $response->assertRedirect(route('student.dashboard'));
        $this->assertAuthenticatedAs($student, 'student');
    }

    public function test_student_cannot_login_with_invalid_password(): void
    {
        Student::factory()->create([
            'email' => 'alumno@test.com',
            'password' => 'password123',
        ]);

        $response = $this->post(route('student.login.post'), [
            'email' => 'alumno@test.com',
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest('student');
    }

    public function test_student_cannot_login_with_nonexistent_email(): void
    {
        $response = $this->post(route('student.login.post'), [
            'email' => 'noexiste@test.com',
            'password' => 'password123',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest('student');
    }

    public function test_login_validates_required_fields(): void
    {
        $response = $this->post(route('student.login.post'), []);

        $response->assertSessionHasErrors(['email', 'password']);
    }

    public function test_login_validates_email_format(): void
    {
        $response = $this->post(route('student.login.post'), [
            'email' => 'not-an-email',
            'password' => 'password123',
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_login_validates_password_min_length(): void
    {
        $response = $this->post(route('student.login.post'), [
            'email' => 'alumno@test.com',
            'password' => 'short',
        ]);

        $response->assertSessionHasErrors('password');
    }

    public function test_locked_account_cannot_login(): void
    {
        Student::factory()->create([
            'email' => 'alumno@test.com',
            'password' => 'password123',
        ]);

        $lockoutKey = 'login_lockout_' . md5('alumno@test.com' . '127.0.0.1');
        Cache::put($lockoutKey, true, now()->addMinutes(15));

        $response = $this->post(route('student.login.post'), [
            'email' => 'alumno@test.com',
            'password' => 'password123',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest('student');
    }

    public function test_session_stores_ip_and_user_agent_on_login(): void
    {
        Student::factory()->create([
            'email' => 'alumno@test.com',
            'password' => 'password123',
        ]);

        $this->post(route('student.login.post'), [
            'email' => 'alumno@test.com',
            'password' => 'password123',
        ]);

        $this->assertEquals(request()->ip(), session('login_ip'));
        $this->assertEquals(request()->userAgent(), session('login_user_agent'));
    }

    public function test_authenticated_student_is_redirected_from_login(): void
    {
        $student = Student::factory()->create();

        $response = $this->actingAs($student, 'student')
            ->get(route('student.login'));

        $response->assertRedirect();
    }
}

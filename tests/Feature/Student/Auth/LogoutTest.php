<?php

namespace Tests\Feature\Student\Auth;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_student_can_logout(): void
    {
        $student = Student::factory()->create();

        $response = $this->actingAs($student, 'student')
            ->post(route('student.logout'));

        $response->assertRedirect(route('home'));
        $this->assertGuest('student');
    }

    public function test_unauthenticated_user_cannot_access_logout(): void
    {
        $response = $this->post(route('student.logout'));

        $response->assertRedirect();
    }
}

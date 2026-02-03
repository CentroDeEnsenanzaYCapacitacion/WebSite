<?php

namespace Tests\Feature\Student;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_unauthenticated_user_cannot_access_dashboard(): void
    {
        $response = $this->get(route('student.dashboard'));

        $response->assertRedirect();
    }

    public function test_authenticated_student_can_access_dashboard(): void
    {
        $student = Student::factory()->create();

        $response = $this->actingAs($student, 'student')
            ->withSession(['login_ip' => '127.0.0.1', 'login_user_agent' => 'Symfony'])
            ->get(route('student.dashboard'));

        $response->assertStatus(200);
        $response->assertViewIs('student.dashboard');
        $response->assertViewHas(['student', 'showExamGuide', 'paymentStatus']);
    }

    public function test_dashboard_shows_exam_guide_for_bachillerato_en_un_examen(): void
    {
        $course = Course::factory()->create(['name' => 'Bachillerato en un examen']);
        $student = Student::factory()->create(['course_id' => $course->id]);

        $response = $this->actingAs($student, 'student')
            ->withSession(['login_ip' => '127.0.0.1', 'login_user_agent' => 'Symfony'])
            ->get(route('student.dashboard'));

        $response->assertViewHas('showExamGuide', true);
    }

    public function test_dashboard_hides_exam_guide_for_other_courses(): void
    {
        $course = Course::factory()->create(['name' => 'Licenciatura en Administración']);
        $student = Student::factory()->create(['course_id' => $course->id]);

        $response = $this->actingAs($student, 'student')
            ->withSession(['login_ip' => '127.0.0.1', 'login_user_agent' => 'Symfony'])
            ->get(route('student.dashboard'));

        $response->assertViewHas('showExamGuide', false);
    }

    public function test_dashboard_includes_payment_status(): void
    {
        $student = Student::factory()->create();

        $response = $this->actingAs($student, 'student')
            ->withSession(['login_ip' => '127.0.0.1', 'login_user_agent' => 'Symfony'])
            ->get(route('student.dashboard'));

        $response->assertViewHas('paymentStatus');
        $paymentStatus = $response->viewData('paymentStatus');
        $this->assertArrayHasKey('status', $paymentStatus);
        $this->assertArrayHasKey('total_owed', $paymentStatus);
        $this->assertArrayHasKey('is_current', $paymentStatus);
    }
}

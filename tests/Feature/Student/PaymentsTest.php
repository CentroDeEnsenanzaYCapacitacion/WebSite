<?php

namespace Tests\Feature\Student;

use App\Models\Crew;
use App\Models\Receipt;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PaymentsTest extends TestCase
{
    use RefreshDatabase;

    public function test_unauthenticated_user_cannot_access_payments(): void
    {
        $response = $this->get(route('student.payments'));

        $response->assertRedirect();
    }

    public function test_authenticated_student_can_access_payments(): void
    {
        $student = Student::factory()->create();

        $response = $this->actingAs($student, 'student')
            ->withSession(['login_ip' => '127.0.0.1', 'login_user_agent' => 'Symfony'])
            ->get(route('student.payments'));

        $response->assertStatus(200);
        $response->assertViewIs('student.payments.index');
        $response->assertViewHas(['student', 'receipts', 'totalPaid', 'lastPayment', 'paymentStatus']);
    }

    public function test_payments_page_shows_student_receipts(): void
    {
        $crew = Crew::factory()->create();
        $student = Student::factory()->create(['crew_id' => $crew->id]);

        Receipt::factory()->count(3)->create([
            'student_id' => $student->id,
            'crew_id' => $crew->id,
            'amount' => 1000,
        ]);

        $response = $this->actingAs($student, 'student')
            ->withSession(['login_ip' => '127.0.0.1', 'login_user_agent' => 'Symfony'])
            ->get(route('student.payments'));

        $response->assertViewHas('receipts');
        $receipts = $response->viewData('receipts');
        $this->assertCount(3, $receipts);
    }

    public function test_payments_calculates_total_paid(): void
    {
        $crew = Crew::factory()->create();
        $student = Student::factory()->create(['crew_id' => $crew->id]);

        Receipt::factory()->create(['student_id' => $student->id, 'crew_id' => $crew->id, 'amount' => 1000]);
        Receipt::factory()->create(['student_id' => $student->id, 'crew_id' => $crew->id, 'amount' => 2000]);

        $response = $this->actingAs($student, 'student')
            ->withSession(['login_ip' => '127.0.0.1', 'login_user_agent' => 'Symfony'])
            ->get(route('student.payments'));

        $response->assertViewHas('totalPaid', 3000.0);
    }

    public function test_student_cannot_see_other_students_receipts(): void
    {
        $crew = Crew::factory()->create();
        $student1 = Student::factory()->create(['crew_id' => $crew->id]);
        $student2 = Student::factory()->create(['crew_id' => $crew->id]);

        Receipt::factory()->count(2)->create(['student_id' => $student2->id, 'crew_id' => $crew->id]);

        $response = $this->actingAs($student1, 'student')
            ->withSession(['login_ip' => '127.0.0.1', 'login_user_agent' => 'Symfony'])
            ->get(route('student.payments'));

        $receipts = $response->viewData('receipts');
        $this->assertCount(0, $receipts);
    }

    public function test_payments_page_shows_last_payment(): void
    {
        $crew = Crew::factory()->create();
        $student = Student::factory()->create(['crew_id' => $crew->id]);

        Receipt::factory()->create(['student_id' => $student->id, 'crew_id' => $crew->id, 'amount' => 500]);
        $lastReceipt = Receipt::factory()->create(['student_id' => $student->id, 'crew_id' => $crew->id, 'amount' => 1500]);

        $response = $this->actingAs($student, 'student')
            ->withSession(['login_ip' => '127.0.0.1', 'login_user_agent' => 'Symfony'])
            ->get(route('student.payments'));

        $lastPayment = $response->viewData('lastPayment');
        $this->assertEquals($lastReceipt->id, $lastPayment->id);
    }
}

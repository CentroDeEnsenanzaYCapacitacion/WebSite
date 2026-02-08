<?php

namespace Tests\Unit\Models;

use App\Models\Course;
use App\Models\Crew;
use App\Models\PaymentPeriodicity;
use App\Models\Receipt;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentTest extends TestCase
{
    use RefreshDatabase;

    public function test_student_belongs_to_course(): void
    {
        $course = Course::factory()->create();
        $student = Student::factory()->create(['course_id' => $course->id]);

        $this->assertInstanceOf(Course::class, $student->course);
        $this->assertEquals($course->id, $student->course->id);
    }

    public function test_student_belongs_to_crew(): void
    {
        $crew = Crew::factory()->create();
        $student = Student::factory()->create(['crew_id' => $crew->id]);

        $this->assertInstanceOf(Crew::class, $student->crew);
        $this->assertEquals($crew->id, $student->crew->id);
    }

    public function test_student_has_many_receipts(): void
    {
        $student = Student::factory()->create();
        $crew = Crew::factory()->create();
        Receipt::factory()->count(3)->create([
            'student_id' => $student->id,
            'crew_id' => $crew->id,
        ]);

        $this->assertCount(3, $student->receipts);
        $this->assertInstanceOf(Receipt::class, $student->receipts->first());
    }

    public function test_student_belongs_to_payment_periodicity(): void
    {
        $periodicity = PaymentPeriodicity::factory()->create();
        $student = Student::factory()->create(['payment_periodicity_id' => $periodicity->id]);

        $this->assertInstanceOf(PaymentPeriodicity::class, $student->paymentPeriodicity);
        $this->assertEquals($periodicity->id, $student->paymentPeriodicity->id);
    }

    public function test_student_password_is_hashed(): void
    {
        $student = Student::factory()->create(['password' => 'plaintext']);

        $this->assertNotEquals('plaintext', $student->password);
    }

    public function test_student_hides_sensitive_attributes(): void
    {
        $student = Student::factory()->create();
        $array = $student->toArray();

        $this->assertArrayNotHasKey('password', $array);
        $this->assertArrayNotHasKey('remember_token', $array);
    }
}

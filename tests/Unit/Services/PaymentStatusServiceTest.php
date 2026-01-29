<?php

namespace Tests\Unit\Services;

use App\Models\Course;
use App\Models\Crew;
use App\Models\PaymentPeriodicity;
use App\Models\Receipt;
use App\Models\Student;
use App\Services\PaymentStatusService;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PaymentStatusServiceTest extends TestCase
{
    use RefreshDatabase;

    private PaymentStatusService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new PaymentStatusService();
    }

    public function test_returns_pending_info_when_start_date_is_missing(): void
    {
        $student = Student::factory()->create(['start' => null]);

        $result = $this->service->calculatePaymentStatus($student);

        $this->assertEquals('pending_info', $result['status']);
        $this->assertFalse($result['is_current']);
    }

    public function test_returns_pending_info_when_tuition_is_missing(): void
    {
        $student = Student::factory()->create(['tuition' => null]);

        $result = $this->service->calculatePaymentStatus($student);

        $this->assertEquals('pending_info', $result['status']);
    }

    public function test_returns_pending_info_when_payment_periodicity_is_missing(): void
    {
        $student = Student::factory()->create(['payment_periodicity_id' => null]);

        $result = $this->service->calculatePaymentStatus($student);

        $this->assertEquals('pending_info', $result['status']);
    }

    public function test_returns_pending_info_for_invalid_date(): void
    {
        $student = Student::factory()->create(['start' => 'invalid-date']);

        $result = $this->service->calculatePaymentStatus($student);

        $this->assertEquals('pending_info', $result['status']);
        $this->assertEquals('Fecha inválida', $result['message']);
    }

    public function test_student_is_current_when_all_payments_made_monthly(): void
    {
        Carbon::setTestNow(Carbon::create(2025, 4, 3));

        $periodicity = PaymentPeriodicity::factory()->create(['id' => 1, 'name' => 'Mensual']);
        $crew = Crew::factory()->create();
        $student = Student::factory()->create([
            'start' => '01/01/2025',
            'tuition' => 2000,
            'payment_periodicity_id' => $periodicity->id,
            'crew_id' => $crew->id,
        ]);

        $expectedPayments = $this->service->calculatePaymentStatus($student)['expected_payments'];
        for ($i = 0; $i < $expectedPayments; $i++) {
            Receipt::factory()->create(['student_id' => $student->id, 'crew_id' => $crew->id]);
        }

        $result = $this->service->calculatePaymentStatus($student);

        $this->assertEquals('current', $result['status']);
        $this->assertTrue($result['is_current']);
        $this->assertEquals(0, $result['months_owed']);
        $this->assertEquals(0, $result['total_owed']);

        Carbon::setTestNow();
    }

    public function test_student_is_late_when_one_or_two_payments_owed(): void
    {
        Carbon::setTestNow(Carbon::create(2025, 3, 10));

        $periodicity = PaymentPeriodicity::factory()->create(['id' => 1, 'name' => 'Mensual']);
        $student = Student::factory()->create([
            'start' => '01/01/2025',
            'tuition' => 2000,
            'payment_periodicity_id' => $periodicity->id,
        ]);

        $result = $this->service->calculatePaymentStatus($student);

        $this->assertContains($result['status'], ['late', 'critical']);
        $this->assertFalse($result['is_current']);
        $this->assertGreaterThanOrEqual(1, $result['months_owed']);

        Carbon::setTestNow();
    }

    public function test_student_is_critical_when_three_or_more_payments_owed(): void
    {
        Carbon::setTestNow(Carbon::create(2025, 6, 10));

        $periodicity = PaymentPeriodicity::factory()->create(['id' => 1, 'name' => 'Mensual']);
        $student = Student::factory()->create([
            'start' => '01/01/2025',
            'tuition' => 2000,
            'payment_periodicity_id' => $periodicity->id,
        ]);

        $result = $this->service->calculatePaymentStatus($student);

        $this->assertEquals('critical', $result['status']);
        $this->assertGreaterThanOrEqual(3, $result['months_owed']);

        Carbon::setTestNow();
    }

    public function test_total_owed_is_calculated_correctly(): void
    {
        Carbon::setTestNow(Carbon::create(2025, 4, 10));

        $periodicity = PaymentPeriodicity::factory()->create(['id' => 1, 'name' => 'Mensual']);
        $student = Student::factory()->create([
            'start' => '01/01/2025',
            'tuition' => 1500,
            'payment_periodicity_id' => $periodicity->id,
        ]);

        $result = $this->service->calculatePaymentStatus($student);

        $this->assertEquals($result['months_owed'] * 1500, $result['total_owed']);

        Carbon::setTestNow();
    }

    public function test_weekly_periodicity_calculates_expected_payments(): void
    {
        Carbon::setTestNow(Carbon::create(2025, 2, 1));

        $periodicity = PaymentPeriodicity::factory()->create(['id' => 2, 'name' => 'Semanal']);
        $student = Student::factory()->create([
            'start' => '01/01/2025',
            'tuition' => 500,
            'payment_periodicity_id' => $periodicity->id,
        ]);

        $result = $this->service->calculatePaymentStatus($student);

        $this->assertGreaterThan(0, $result['expected_payments']);
        $this->assertEquals(500, $result['tuition']);

        Carbon::setTestNow();
    }

    public function test_tuition_is_returned_as_float(): void
    {
        $student = Student::factory()->create(['tuition' => '2500.50']);

        $result = $this->service->calculatePaymentStatus($student);

        $this->assertIsFloat($result['tuition']);
        $this->assertEquals(2500.50, $result['tuition']);
    }

    public function test_status_messages_are_correct(): void
    {
        Carbon::setTestNow(Carbon::create(2025, 1, 3));

        $periodicity = PaymentPeriodicity::factory()->create(['id' => 1, 'name' => 'Mensual']);
        $crew = Crew::factory()->create();
        $student = Student::factory()->create([
            'start' => '01/01/2025',
            'tuition' => 2000,
            'payment_periodicity_id' => $periodicity->id,
            'crew_id' => $crew->id,
        ]);

        $result = $this->service->calculatePaymentStatus($student);
        $this->assertEquals('Al corriente', $result['message']);

        Carbon::setTestNow();
    }
}

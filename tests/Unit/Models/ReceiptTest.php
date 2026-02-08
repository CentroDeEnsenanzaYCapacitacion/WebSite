<?php

namespace Tests\Unit\Models;

use App\Models\Crew;
use App\Models\PaymentType;
use App\Models\Receipt;
use App\Models\ReceiptType;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReceiptTest extends TestCase
{
    use RefreshDatabase;

    public function test_receipt_belongs_to_student(): void
    {
        $student = Student::factory()->create();
        $crew = Crew::factory()->create();
        $receipt = Receipt::factory()->create([
            'student_id' => $student->id,
            'crew_id' => $crew->id,
        ]);

        $this->assertInstanceOf(Student::class, $receipt->student);
        $this->assertEquals($student->id, $receipt->student->id);
    }

    public function test_receipt_belongs_to_crew(): void
    {
        $crew = Crew::factory()->create();
        $receipt = Receipt::factory()->create(['crew_id' => $crew->id]);

        $this->assertInstanceOf(Crew::class, $receipt->crew);
        $this->assertEquals($crew->id, $receipt->crew->id);
    }

    public function test_receipt_belongs_to_receipt_type(): void
    {
        $receiptType = ReceiptType::factory()->create();
        $crew = Crew::factory()->create();
        $receipt = Receipt::factory()->create([
            'receipt_type_id' => $receiptType->id,
            'crew_id' => $crew->id,
        ]);

        $this->assertInstanceOf(ReceiptType::class, $receipt->receiptType);
        $this->assertEquals($receiptType->id, $receipt->receiptType->id);
    }

    public function test_receipt_belongs_to_payment_type(): void
    {
        $paymentType = PaymentType::factory()->create();
        $crew = Crew::factory()->create();
        $receipt = Receipt::factory()->create([
            'payment_type_id' => $paymentType->id,
            'crew_id' => $crew->id,
        ]);

        $this->assertInstanceOf(PaymentType::class, $receipt->paymentType);
        $this->assertEquals($paymentType->id, $receipt->paymentType->id);
    }

    public function test_receipt_belongs_to_user(): void
    {
        $user = User::factory()->create();
        $crew = Crew::factory()->create();
        $receipt = Receipt::factory()->create([
            'user_id' => $user->id,
            'crew_id' => $crew->id,
        ]);

        $this->assertInstanceOf(User::class, $receipt->user);
        $this->assertEquals($user->id, $receipt->user->id);
    }

    public function test_receipt_casts_bill_to_boolean(): void
    {
        $crew = Crew::factory()->create();
        $receipt = Receipt::factory()->create([
            'bill' => 1,
            'crew_id' => $crew->id,
        ]);

        $this->assertIsBool($receipt->bill);
        $this->assertTrue($receipt->bill);
    }

    public function test_receipt_casts_dates(): void
    {
        $crew = Crew::factory()->create();
        $receipt = Receipt::factory()->create(['crew_id' => $crew->id]);

        $this->assertInstanceOf(\Illuminate\Support\Carbon::class, $receipt->created_at);
        $this->assertInstanceOf(\Illuminate\Support\Carbon::class, $receipt->updated_at);
    }
}

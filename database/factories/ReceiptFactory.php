<?php

namespace Database\Factories;

use App\Models\Crew;
use App\Models\PaymentType;
use App\Models\Receipt;
use App\Models\ReceiptType;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiptFactory extends Factory
{
    protected $model = Receipt::class;

    public function definition(): array
    {
        return [
            'crew_id' => Crew::factory(),
            'user_id' => User::factory(),
            'receipt_type_id' => ReceiptType::factory(),
            'payment_type_id' => PaymentType::factory(),
            'student_id' => Student::factory(),
            'voucher' => fake()->bothify('VOU-####'),
            'bill' => fake()->boolean(),
            'concept' => fake()->sentence(3),
            'amount' => fake()->randomFloat(2, 500, 5000),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\PaymentPeriodicity;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentPeriodicityFactory extends Factory
{
    protected $model = PaymentPeriodicity::class;

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Mensual', 'Semanal']),
        ];
    }
}

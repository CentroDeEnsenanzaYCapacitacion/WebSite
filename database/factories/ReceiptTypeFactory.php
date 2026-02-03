<?php

namespace Database\Factories;

use App\Models\ReceiptType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiptTypeFactory extends Factory
{
    protected $model = ReceiptType::class;

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Mensualidad', 'Inscripción', 'Examen']),
        ];
    }
}

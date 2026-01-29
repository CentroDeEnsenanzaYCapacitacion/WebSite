<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Crew;
use App\Models\PaymentPeriodicity;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'surnames' => fake()->lastName() . ' ' . fake()->lastName(),
            'genre' => fake()->randomElement(['M', 'F']),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password123'),
            'crew_id' => Crew::factory(),
            'course_id' => Course::factory(),
            'birthdate' => fake()->date('Y-m-d', '-18 years'),
            'address' => fake()->streetAddress(),
            'colony' => fake()->word(),
            'municipality' => fake()->city(),
            'PC' => fake()->postcode(),
            'phone' => fake()->phoneNumber(),
            'cel_phone' => fake()->phoneNumber(),
            'generation' => fake()->year(),
            'modality_id' => 1,
            'payment_periodicity_id' => PaymentPeriodicity::factory(),
            'schedule_id' => 1,
            'tuition' => fake()->randomFloat(2, 1000, 5000),
            'start' => now()->subMonths(3)->format('d/m/Y'),
            'curp' => strtoupper(fake()->bothify('????######??????##')),
        ];
    }
}

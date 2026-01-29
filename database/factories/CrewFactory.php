<?php

namespace Database\Factories;

use App\Models\Crew;
use Illuminate\Database\Eloquent\Factories\Factory;

class CrewFactory extends Factory
{
    protected $model = Crew::class;

    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'mail' => fake()->companyEmail(),
            'description' => fake()->sentence(),
        ];
    }
}

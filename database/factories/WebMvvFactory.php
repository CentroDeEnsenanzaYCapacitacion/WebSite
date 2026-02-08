<?php

namespace Database\Factories;

use App\Models\WebMvv;
use Illuminate\Database\Eloquent\Factories\Factory;

class WebMvvFactory extends Factory
{
    protected $model = WebMvv::class;

    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'type' => fake()->randomElement(['mission', 'vision', 'values']),
        ];
    }
}

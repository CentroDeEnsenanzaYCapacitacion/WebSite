<?php

namespace Database\Factories;

use App\Models\WebOpinion;
use Illuminate\Database\Eloquent\Factories\Factory;

class WebOpinionFactory extends Factory
{
    protected $model = WebOpinion::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'text' => fake()->paragraph(),
        ];
    }
}

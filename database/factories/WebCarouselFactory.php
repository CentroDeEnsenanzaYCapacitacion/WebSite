<?php

namespace Database\Factories;

use App\Models\WebCarousel;
use Illuminate\Database\Eloquent\Factories\Factory;

class WebCarouselFactory extends Factory
{
    protected $model = WebCarousel::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->sentence(),
        ];
    }
}

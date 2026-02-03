<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Licenciatura en Administración',
                'Bachillerato en un examen',
                'Licenciatura en Derecho',
            ]),
            'description' => fake()->sentence(),
        ];
    }
}

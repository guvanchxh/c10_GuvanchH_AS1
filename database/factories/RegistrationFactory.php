<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{

    protected $model = Registration::class;

    public function definition(): array
    {
        return [
            'lesson_id' => \App\Models\Lesson::inRandomOrder()->first()->id,
            'Student_id' => \App\Models\Student::inRandomOrder()->first()->id,
            'price' => $this->faker->randomFloat(2, 500, 2000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

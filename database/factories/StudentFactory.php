<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastNameName,
            'phone' => $this->faker->phoneNumber,
            'birthday' => $this->faker->date,
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

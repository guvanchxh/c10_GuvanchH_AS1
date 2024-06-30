<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{

    protected $model = Lesson::class;

    public function definition(): array
    {
        return [
            'classroom_id' => \App\Models\Classroom::inRandomOrder()->first()->id,
            'branch_id' => \App\Models\Branch::inRandomOrder()->first()->id,
            'teacher_id' => \App\Models\Teacher::inRandomOrder()->first()->id ?? null,
        ];
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classroom;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classroom::insert([
            ['location_id' => 1, 'name' => 'A'],
            ['location_id' => 1, 'name' => 'B'],
            ['location_id' => 1, 'name' => 'C'],
            ['location_id' => 1, 'name' => 'D'],
            ['location_id' => 1, 'name' => 'E'],
            ['location_id' => 1, 'name' => 'F'],
            ['location_id' => 1, 'name' => 'G'],
            ['location_id' => 1, 'name' => 'H'],
        ]);
    }
}

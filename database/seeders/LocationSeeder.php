<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::insert([
            ['name' => 'Univermag'],
            ['name' => 'Anew'],
            ['name' => 'Parahat-1'],

        ]);
    }
}

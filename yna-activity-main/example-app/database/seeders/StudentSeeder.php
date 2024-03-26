<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Student::factory()->count(5)->create(); // Create 50 student records using the factory
    }
}

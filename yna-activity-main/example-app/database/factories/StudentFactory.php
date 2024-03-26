<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $academicPrograms = ['BSIT', 'CE', 'ECE', 'BBA', 'NURS']; // List of academic program abbreviations

        return [
            'student_number' => $this->faker->unique()->numerify('##########'), // Generate a unique 10-digit student number
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'mobile_number' => $this->faker->numerify('###########'), // Generate an 11-digit mobile number
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'acadprog_id' => $this->faker->randomElement($academicPrograms), // Randomly select an academic program abbreviation
            'year_level' => $this->faker->numberBetween(1, 4), // Generate a random year level between 1 and 4
        ];
    }
}


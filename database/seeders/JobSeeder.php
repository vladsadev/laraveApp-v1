<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory()->create([
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => '350.000 USD'
        ]);

        Job::factory(7)->create();
    }
}

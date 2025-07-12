<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Creamos un usuario "específico"
        User::factory()->create([
            'first_name' => 'Pepe',
            'last_name' => 'Garcia',
            'email' => 'pepe@pp.com',
        ]);

        User::factory(100)->create();

        $this->call(JobSeeder::class);
    }
}

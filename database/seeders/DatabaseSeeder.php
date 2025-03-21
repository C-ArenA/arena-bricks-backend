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
        User::factory()->create([
            'name' => 'Cecilia Arena',
            'email' => 'arena.a.cecilia.v@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Carlos Arena',
            'email' => 'carlostata.ca@gmail.com',
        ]);
        $this->call([
            BrickSeeder::class
        ]);
    }
}

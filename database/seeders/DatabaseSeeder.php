<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $password = (fake()->word() . fake()->word() . fake()->word() . fake()->word());

        User::factory()->create([
            'username' => 'admin',
            'password' => $password,
        ]);

        $this->command->info("\tAdmin Password:\t" . $password . "\t- Change This!\n");
    }
}

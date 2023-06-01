<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\LcDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create();
        $this->call(LcDatabaseSeeder::class);
    }
}

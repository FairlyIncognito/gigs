<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();
        // Listing::factory(10)->create();

        User::factory(100)
            ->has(Profile::factory()->count(1))
            ->has(Listing::factory()->count(10))
            ->create();

          
}
}
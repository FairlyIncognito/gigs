<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use App\Models\Picture;
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
        // Seed DB with 100 users. Each user has 10 listings and one profile. Each profile has 10 pictures. Create all.
        User::factory(100)->hasListings(10)->has(Profile::factory(1)->hasPictures(10))->create();
        

          
}
}
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // LoremFlickr fake image provider for the FakerPHP library
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($faker)); // ignore IDE error; if compile error run composer install

        return [
            'user_id' => \App\Models\User::factory(),
            'title' => $this->faker->sentence(),
            'logo' => $faker->imageUrl(150, 150, ['logo']),
            'tags' => implode(" ", $this->faker->randomElements(['AV', 'Driver', 'Crew', 'Sound', 'Light', 'Scene', 'Hands'], 3)),
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(5)
        ];
    }
}
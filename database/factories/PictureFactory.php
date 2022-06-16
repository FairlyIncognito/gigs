<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Picture>
 */
class PictureFactory extends Factory
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
            'profile_id' => \App\Models\Profile::factory(),
            'picture_name' => $this->faker->slug(),
            'picture_alt' => $this->faker->words(3, true),
            'picture_path' => $faker->imageUrl(150, 150, ['logo']),
        ];
    }
}
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
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
        $faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($faker));
        
        // Fake pdf file for test seeding
        $pdf = \Illuminate\Http\UploadedFile::fake()->create('test.pdf')->store('pdfs');
        
        return [
            'id' => $this->faker->unique()->numberBetween(1, 1000),
            'user_id' => \App\Models\User::factory(),
            'name_first' => $this->faker->firstName(),
            'name_last' => $this->faker->lastName(),
            'job_roles' => $this->faker->words(3, true),
            'location_home' => $this->faker->address(),
            'location_current' => $this->faker->address(),
            'cover_letter' => $this->faker->paragraph(3),
            'curriculum_vitae' => $pdf,
            'gallery_references' => $faker->imageUrl(),
        ];
    }
}
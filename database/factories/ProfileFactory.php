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
        // Fake pdf file for test seeding
        $pdf = \Illuminate\Http\UploadedFile::fake()->create('test.pdf')->store('pdfs');
        // LoremFlickr fake image provider for the FakerPHP library
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($faker)); // ignore IDE error; if compile error run composer install

        return [
            'user_id' => \App\Models\User::factory(),
            'name_first' => $this->faker->firstName(),
            'name_last' => $this->faker->lastName(),
            'title' => $this->faker->sentence(),
            'picture' => $faker->imageUrl(150, 150, ['person']),
            'job_roles' => implode(" ", $this->faker->randomElements(['AV', 'Driver', 'Crew', 'Sound', 'Light', 'Scene', 'Hands'], 3)),
            'location_home' => $this->faker->address(),
            'location_current' => $this->faker->address(),
            'cover_letter' => $this->faker->paragraph(3),
            'curriculum_vitae' => $pdf,
        ];
    }
}
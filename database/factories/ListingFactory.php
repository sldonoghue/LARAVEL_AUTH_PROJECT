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
        return [
            'title' => $this->faker->sentence,
            'company' => $this->faker->company,
            'location' => $this->faker->city,
            'email' => $this->faker->email,
            'website' => $this->faker->url,
            'tags' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(5),
        ];
    }
}

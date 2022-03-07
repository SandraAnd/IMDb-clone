<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $title = $this->faker->name();
        $title = $this->faker->name();
        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => $this->faker->paragraph(),
            'year' => $this->faker->numberBetween(1888, 2022),
            'category' => $this->faker->sentence(2, 5),
            'director' => $this->faker->name(),
            'actor' => $this->faker->name(),
            'rating' => $this->faker->numberBetween(1, 10),
            'duration' => $this->faker->sentence(2, 5),
            'public' => $this->faker->sentence(1, 2),
            'imageurl' => $this->faker->sentence(2, 5),
            'trailerurl' => $this->faker->sentence(2, 5)
        ];
    }
}

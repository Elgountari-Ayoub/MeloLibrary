<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition():array
    {
        return [
            'cover_image' => $this->faker->imageUrl(640, 480, 'cats'),
            'title' => $this->faker->sentence(),
            'artists' => $this->faker->name(),
            'writers' => $this->faker->name(),
            'languages' => $this->faker->languageCode(),
            'release_date' => $this->faker->date(),
            'lyrics' => $this->faker->text(),
            'duration' => $this->faker->numberBetween(180, 600),
            'song_path' => $this->faker->name()
        ];
    }
}

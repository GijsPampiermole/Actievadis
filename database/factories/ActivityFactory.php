<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'location' => fake()->city(),
            'food' => rand(0,1) < 0.5,
            'image' => 'https://www.google.nl/images/branding/googlelogo/2x/googlelogo_color_160x56dp.png',
            'price' => fake()->randomNumber(2),
            'startTime' => fake()->dateTime(),
            'endTime' => fake()->dateTime(),
            'description' => 'bla bla bla',
            'needs' => 'bla bla bla',
            'minParticipants' => fake()->randomNumber(),
            'maxParticipants' => fake()->randomNumber(),
            'signedUpUsers' => '[{user: 1}{user: 2}]'
        ];
    }
}

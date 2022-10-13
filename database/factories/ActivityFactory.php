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
            'name' => 'Zwemmen',
            'location' => 'Zwembad Rozengaarde, Doetinchem',
            'food' => false,
            'image' => 'https://www.grotegroepsaccommodatie.nl/wp-content/uploads/2019/02/rozengaarde-doetinchem-zwembad.jpg',
            'price' => '14.99',
            'startTime' => '2022-10-25 16:00:00',
            'endTime' => '2022-10-25 21:00:00',
            'description' => 'We gaan zwemmen bij zwembad de rozengaarde in doetinchem. Na die tijd doen we nog een drankje op een terras',
            'needs' => 'Zwemkleding',
            'minParticipants' => '5',
            'maxParticipants' => '100'
        ];
    }
}

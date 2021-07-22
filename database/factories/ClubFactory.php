<?php

namespace Database\Factories;

use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Club::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $clubName = ['FC', 'CF', 'City', 'United'];
        return [
            'name' => $this->faker->city ." ". \Arr::random($clubName),
            'logo' => 'avatar.jpg',
            'url'  => 'https://www.google.com/',
            'trophy' => rand(0, 30),
        ];
    }
}

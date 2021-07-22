<?php

namespace Database\Factories;

use App\Models\Manager;
use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManagerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Manager::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'club_id' => Club::inRandomOrder()->first()->id,
            'name' => $this->faker->name,
            'photo' => 'avatar.jpg',
            'old' => rand(45, 70) . " years",
            'nationality' => $this->faker->country,
        ];
       
    }
}

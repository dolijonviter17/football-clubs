<?php

namespace Database\Factories;

use App\Models\Stadium;
use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

class StadiumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stadium::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $capacityStd = [50000, 60000, 70000, 80000, 90000];
        return [
            // 'club_id' => Club::inRandomOrder()->first()->id,
            'name' => $this->faker->city . " International Stadium",
            'capacity' => rand(50000, 95000),
            'address' => $this->faker->address
        ];
    }
}

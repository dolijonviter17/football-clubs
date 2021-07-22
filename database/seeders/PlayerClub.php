<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;
use App\Models\Player;
use Illuminate\Support\Arr;

class PlayerClub extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $position = ['GK', 'CB', 'LB', 'RB', 'DMF', 'RM', 'LW', 'ST', 'RW'];
        $club = new Club();
        $clubId = Club::pluck('id')->all();
        for ($i=1; $i <= count($clubId); $i++) { 
            for ($c = 1; $c <= 24 ; $c++) { 
                \DB::table('players')->insert([
                'club_id' => $i,
                'name' => $faker->name,
                'photo' => 'avatar.jpg',
                'height' => rand(1.55, 2.10) . " cm",
                 'position' => \Arr::random($position)
                ]);
            }
        }
        
    }
}

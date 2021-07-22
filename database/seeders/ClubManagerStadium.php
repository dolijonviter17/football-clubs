<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;
use App\Models\Manager;
use App\Models\Stadium;
use App\Models\User;
use App\Models\Role;
class ClubManagerStadium extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

       User::factory()->make();
        // $stdId = Stadium::all();
        User::factory(20)->create()->each(function($u) {
            $u->club()->save(Club::factory()->make());
        });

        
            
        
        $clubId = Club::pluck('id')->all();
        $faker = \Faker\Factory::create();
        for ($i=1; $i<= count($clubId); $i++) { 
        \DB::table('managers')->insert([
            'name' => $faker->name,
            'club_id' => $i,
            'photo' => 'avatar.jpg',
            'old' => rand(45, 65) . " years",
            'nationality' => $faker->country,
        ]);

       
        
    }
    }
}

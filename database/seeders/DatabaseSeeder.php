<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('users')->truncate();
        \DB::table('roles')->truncate();
        \DB::table('role_user')->truncate();
        \DB::table('clubs')->truncate();
        \DB::table('stadium')->truncate();
        \DB::table('managers')->truncate();
        \DB::table('players')->truncate();
        \App\Models\Stadium::factory(20)->create();
        $this->call([
            ClubManagerStadium::class,
            UserRole::class,
            PlayerClub::class
        ]);
    }
}

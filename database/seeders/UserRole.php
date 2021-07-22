<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
class UserRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // \DB::table('users')->truncate();
        // \DB::table('roles')->truncate();
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'User Administrator', // optional
            'description' => 'User is allowed to manage and edit other clubs', // optional
        ]);
        $club = Role::create([
            'name' => 'club',
            'display_name' => 'Admin Clubs', // optional
            'description' => 'Club account to allowed access awn clubs other each', // optional
        ]);
        // $userAdmin = User::find(1);
        $userClub = new User();
        // $userAdmin->attachRole($admin);
        for ($i=1; $i <= 20; $i++) { 
            $userClub->find($i)->attachRole($club);
        }
        
        


    
    }
}

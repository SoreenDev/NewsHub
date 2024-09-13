<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
            defaults roles

            guardName 'admin' for AdminDashboard
            guardName 'journalist' for JournalistDashboard
            guardName 'user' for App
        */

        Role::findOrCreate('manager','admin');
        Role::findOrCreate('leader','Journalist');
        Role::findOrCreate('member','user');
    }
}

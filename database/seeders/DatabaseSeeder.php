<?php

namespace Database\Seeders;

use Domain\AdminDashboard\UserManagement\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

//        User::factory()->create([
//            'name' => 'SoreenDev',
//            'email' => 'soreendev@gmail.com',
//        ]);
    }
}

<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Domain\AdminDashboard\UserManagement\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::factory(200)->create();
       User::factory(10)->create()->each(fn(User $user) => $user->assignRole('joulnalist') );
    }
}

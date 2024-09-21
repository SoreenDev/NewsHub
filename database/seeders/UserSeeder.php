<?php

namespace Database\Seeders;

use Domain\AdminDashboard\UserManagement\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 100; $i++) {
            $user = User::create([
                'name' => fake()->name(),
                'path_profile' => asset('storage/images.png'),
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make('password')
            ]);

            if ($i % 20 === 0) {
                $role = Role::findByName('Journalist_manager');
                $user->assignRole($role);
                continue;
            }

            if ($i === 50) {
                $role = Role::findByName('Admin_manager');
                User::create([
                    'name' => 'SoreenDev',
                    'path_profile' => asset('storage/images.png'),
                    'email' => 'soreendev@gmail.com',
                    'password' => Hash::make('12345678')
                ])->assignRole($role);
                continue ;
            }

            $role = Role::findByName('Member');
            $user->assignRole($role);
        }
    }
}

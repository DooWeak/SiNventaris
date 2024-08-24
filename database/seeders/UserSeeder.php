<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_super_admin = Role::where('name', 'super_admin')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_staff = Role::where('name', 'staff')->first();

        if ($role_staff && !User::where('username', 'staff')->exists()) {
            User::create([
                'name' => 'Dwi',
                'username' => 'staff',
                'role_id' => $role_staff->id,
                'password' => bcrypt('12345678'),
            ]);
        }

        if ($role_admin && !User::where('username', 'admin')->exists()) {
            User::create([
                'name' => 'Admin',
                'username' => 'admin',
                'role_id' => $role_admin->id,
                'password' => bcrypt('12345678'),
            ]);
        }

        if ($role_super_admin && !User::where('username', 'super_admin')->exists()) {
            User::create([
                'name' => 'Super Admin',
                'username' => 'super_admin',
                'role_id' => $role_super_admin->id,
                'password' => bcrypt('12345678'),
            ]);
        }
    }
}

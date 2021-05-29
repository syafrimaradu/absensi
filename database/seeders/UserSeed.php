<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, Role};

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superadmin = Role::where('name', 'superadmin')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $superadmin = User::create([
            'name'      => 'Superadmin',
            'email'     => 'superadmin@superadmin.com',
            'username'  => 'superadmin',
            'password'  => bcrypt('superadmin'),
        ]);

        $admin = User::create([
            'name'      => 'Admin',
            'email'     => 'admin@admin.com',
            'username'  => 'admin',
            'password'  => bcrypt('admin'),
        ]);
    
        $superadmin->roles()->attach($role_superadmin->id);
        $admin->roles()->attach($role_admin);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $roles = [
            'admin',
            'manager',
            'user',
        ];

        foreach($roles as $role) {

            $newRole = new Role();
            $newRole->name = $role;
            $newRole->save();
        }


        //* ASSIGN ROLES
        $user = User::where('email', 'shourab.cit.bd@gmail.com')->first(); //* shourab
        $user->assignRole('admin');

        //* ASSIGN ROLES
        $user = User::where('email', 'abdur.rahman.cit.bd@gmail.com')->first(); //* abdur rahman sir
        $user->assignRole('user');
       
    }
}

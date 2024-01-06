<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Shourab";
        $user->email = "shourab.cit.bd@gmail.com";
        $user->password = Hash::make("password");
        $user->save();
        $user = new User();
        $user->name = "hamim";
        $user->email = "hamim@gmail.com";
        $user->password = Hash::make("password");
        $user->save();

        $user = new User();
        $user->name = "abdur rahman";
        $user->email = "abdur.rahman.cit.bd@gmail.com";
        $user->password = Hash::make("password");
        $user->save();

        


    }
}

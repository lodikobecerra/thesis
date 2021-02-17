<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "firstName" => "Admin",
            "lastName" => "Admin",
            "email" => "admin@example.com",
            "user_type" => "admin",
            "password" => Hash::make("password"),
        ]);

        User::create([
            "firstName" => "Engineer",
            "lastName" => "Engineer",
            "email" => "engineer@example.com",
            "user_type" => "engineer",
            "password" => Hash::make("password"),
        ]);
    }
}

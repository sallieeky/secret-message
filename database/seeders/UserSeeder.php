<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "username" => "lixie",
            "email" => "lixie@gmail.com",
            "password" => bcrypt("aiseky123")
        ]);
        User::create([
            "username" => "admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("admin123")
        ]);
    }
}

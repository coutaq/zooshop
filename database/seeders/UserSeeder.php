<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            "name" => "Администратор",
            "email" => "admin@admin.com",
            "password" => Hash::make('12345678'),
            "role_id" => Role::where('slug', 'admin')->first()->id()
        ]);
        User::create([
            "name" => "Пользователь",
            "email" => "user@gmail.com",
            "password" => Hash::make('123456789'),
            "role_id" => Role::where('slug', 'user')->first()->id()
        ]);
    }
}
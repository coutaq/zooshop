<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "title" => "Администратор",
            "slug" => "admin"
        ]);
        Role::create([
            "title" => "Пользователь",
            "slug" => "user"
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            // BasketSeeder::class,
            CategorySeeder::class,
            // OrderSeeder::class,
            
            // // RoleSeeder::class,
            BrandSeeder::class,
            SubcategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
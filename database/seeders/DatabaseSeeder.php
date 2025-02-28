<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        // User::factory(10)->create();

        //I'm calling the Role & User Seeder class.
        $this->call([
            RoleSeeder::class,
            UserSeeder::class
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory()->create([
            'id' =>1,
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'status' => 1
        ]);
        
        \App\Models\User::factory(20)->create();

    }
}

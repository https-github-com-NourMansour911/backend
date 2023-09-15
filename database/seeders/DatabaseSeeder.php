<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Coach::factory(5)->create();
        \App\Models\CoachPlan::factory(5)->create();
        \App\Models\Review::factory(5)->create();
        \App\Models\BookedSession::factory(5)->create();
        \App\Models\Transformation::factory(5)->create();
        \App\Models\Coach::factory()->create([
            'name' => 'Eman Zaki',
            'email' => 'eman@eman.com',
            'password' => bcrypt('123456789'),
            'username' => 'eman',
        ]);
    }
}

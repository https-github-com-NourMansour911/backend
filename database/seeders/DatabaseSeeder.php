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
        \App\Models\User::factory(10)->create();
        \App\Models\Coach::factory(10)->create();
        \App\Models\CoachPlan::factory(20)->create();
        \App\Models\Review::factory(20)->create();
        \App\Models\BookedSession::factory(20)->create();
        \App\Models\Transformation::factory(20)->create();
        \App\Models\Certification::factory(20)->create();
        \App\Models\Coach::factory()->create([
            'name' => 'Eman Zaki',
            'email' => 'eman@eman.com',
            'password' => bcrypt('123456789'),
            'username' => 'eman',
        ]);
    }
}

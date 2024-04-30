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
        //$this->call(UserRoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoadmapSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TechnologySeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(CourseDetailSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

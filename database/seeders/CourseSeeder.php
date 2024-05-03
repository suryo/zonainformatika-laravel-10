<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'PHP',
            'text' => '-',
            'type' => '-',
            'image' => 'php.svg',
            'price' => 0,
            'author' => 'Suryo Atmojo',
            'slug' => 'php',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
        ]);
        Course::create([
            'title' => 'Laravel for Beginner',
            'text' => '-',
            'type' => '-',
            'image' => 'laravel.svg',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'laravel_for_beginner',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
        ]);

        Course::create([
            'title' => 'HTML',
            'text' => '-',
            'type' => '-',
            'image' => 'html.svg',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'html',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
        ]);

        Course::create([
            'title' => 'JavaScript',
            'text' => '-',
            'type' => '-',
            'image' => 'javascript.svg',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'javascript',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
        ]);

        Course::create([
            'title' => 'Git',
            'text' => '-',
            'type' => '-',
            'image' => 'git.svg',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'git',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
        ]);

        Course::create([
            'title' => 'Python for Beginner',
            'text' => '-',
            'type' => '-',
            'image' => 'python.svg',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'python_for_beginner',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
        ]);
    }
}

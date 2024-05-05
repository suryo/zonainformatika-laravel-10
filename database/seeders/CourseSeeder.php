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
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman PHP sehingga kamu akan paham gimana cara coding di PHP.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman PHP. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'php.png',
            'price' => 0,
            'author' => 'Suryo Atmojo',
            'slug' => 'php',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
        ]);
        Course::create([
            'title' => 'Laravel for Beginner',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman framework Laravel sehingga kamu akan paham gimana cara menggunakan framework Laravel.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar framework Laravel. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'laravel.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'laravel_for_beginner',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
        ]);

        Course::create([
            'title' => 'HTML',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman HTML sehingga kamu akan paham gimana cara coding di HTML.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman HTML. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'html.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'html',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
        ]);

        Course::create([
            'title' => 'JavaScript',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman JavaScript sehingga kamu akan paham gimana cara coding di Javascript.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman Javascript. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'javascript.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'javascript',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
        ]);

        Course::create([
            'title' => 'Git',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar menggunakan Git.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar penggunaan Git. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'git.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'git',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
        ]);

        Course::create([
            'title' => 'Python for Beginner',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman Python sehingga kamu akan paham gimana cara coding di Python.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman Python. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'python.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'python_for_beginner',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
        ]);
    }
}

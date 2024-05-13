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
            'title' => 'HTML',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman HTML sehingga kamu akan paham gimana cara menggunakan tag-tag pada HTML.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar tag HTML. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'html.png',
            'price' => 0,
            'author' => 'Suryo Atmojo',
            'slug' => 'html',
            'status'=> 'active',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'CSS',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar CSS sehingga kamu akan paham gimana cara menggunakan CSS.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar CSS. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'css.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'css',
            'status'=> 'active',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

   

        Course::create([
            'title' => 'JAVASCRIPT',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman HTML sehingga kamu akan paham gimana cara menggunakan tag-tag pada HTML.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar tag HTML. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'javascript.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'javascript',
            'status'=> 'active',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'BOOTSTRAP',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar Bootstrap sehingga kamu akan paham gimana cara menggunakan Bootstrap.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bootstrap. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'bootstrap.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'bootstrap',
            'status'=> 'active',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'JQUERY',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar JQuery sehingga kamu akan paham gimana cara menggunakan JQuery.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar JQuery. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'jquery.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'jquery',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);


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
            'video' => ''
        ]);
        Course::create([
            'title' => 'Laravel',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman framework Laravel sehingga kamu akan paham gimana cara menggunakan framework Laravel.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar framework Laravel. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'laravel.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'laravel',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'Typescript',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman Typescript sehingga kamu akan paham gimana cara coding di typescript.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman Typescript. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'typescript.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'typescript',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'Node.JS',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman Node.JS sehingga kamu akan paham gimana cara coding di Node.JS.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Node.JS. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'nodejs.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'nodejs',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'REACT',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman react sehingga kamu akan paham gimana cara coding di react.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar react. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'react.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'react',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'VUE',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman vue sehingga kamu akan paham gimana cara coding di vue.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar vue. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'vue.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'vue',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'SQL',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman SQL sehingga kamu akan paham gimana cara menggunakan SQL pada database.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar SQL. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'sql.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'sql',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
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
            'video' => ''
        ]);

        Course::create([
            'title' => 'DART',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman dart sehingga kamu akan paham gimana cara coding di dart.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar dart. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'dart.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'dart',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'FLUTTER',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman flutter sehingga kamu akan paham gimana cara coding di flutter.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar flutter. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'flutter.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'flutter',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'Python',
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
            'video' => ''
        ]);

        Course::create([
            'title' => 'GO',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman GO sehingga kamu akan paham gimana cara coding di GO.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman GO. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'go.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'go',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'JAVA',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman Java sehingga kamu akan paham gimana cara coding di Java.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman Java. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'java.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'java',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'C++',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman C++ sehingga kamu akan paham gimana cara coding di Java.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman C++. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'cplusplus.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'cplusplus',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'R',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman R sehingga kamu akan paham gimana cara coding di R.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman R. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'r.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'r',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'LINUX',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar sistem operasi linux sehingga kamu akan paham gimana cara menggunakan sistem operasi linux.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah praktis penggunaan sistem operasi linux. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'linux.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'linux',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'OOP JAVA',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar OOP menggunakan Java sehingga kamu akan paham gimana tentang konsep OOP.',
            'text' => 'Dalam kelas online ini kamu akan belajar langkah praktis penggunaan konsep OOP. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'oopjava.png',
            'price' => 50000,
            'author' => 'Suryo Atmojo',
            'slug' => 'oopjava',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);

        Course::create([
            'title' => 'Analisa & Perancangan Sistem Informasi',
            'short_desc' => 'Pada tutorial ini, kita akan belajar dasar-dasar analisa dan perancangan sistem informasi sehingga kamu akan paham bagaimana langkah-langkah melakukan analisa sisten dan melakukan perancangan sistem informasi.',
            'text' => 'Dalam kelas online ini kamu akan belajar tentang analisa dan perancangan sistem informasi. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.',
            'type' => '-',
            'image' => 'apsi.png',
            'price' => 0,
            'author' => 'Suryo Atmojo',
            'slug' => 'apsi',
            'status'=> 'inactive',
            'category_id'=> 1,
            'technology_id'=> 1,
            'video' => ''
        ]);
    }
}

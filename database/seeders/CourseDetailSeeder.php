<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CourseDetail;


class CourseDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1	HTML
        CourseDetail::create(['id_course' => 1, 'title' =>'Pengenalan Dasar HTML untuk Pemula','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Apa itu Tag, Elemen, dan Atribut dalam HTML?','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Membuat Paragraf pada HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Cara Membuat Heading di HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Cara Membuat Komentar di HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Text Formatting di HTML (Bold, Italic, Underline, dll)','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Membuat Link untuk Menghubungkan Halaman Web','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Menampilkan Gambar di HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Membuat List di HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Menampilkan Gambar di HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Membuat List di HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Membuat Tabel di HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Membuat Form pada HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Elemen Semantik pada HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Menambahkan Video pada Web','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Menambahkan Audio pada HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 1, 'title' =>'Project Web Pribadi dengan HTML','text' => '-',]);
        // 2	CSS
        CourseDetail::create(['id_course' => 2, 'title' =>'Pengenalan Dasar CSS untuk Pemula','text' => '-',]);
        CourseDetail::create(['id_course' => 2, 'title' =>'Cara Menulis CSS di HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 2, 'title' =>'Sintaks dasar CSS','text' => '-',]);
        CourseDetail::create(['id_course' => 2, 'title' =>'Selector pada CSS','text' => '-',]);
        CourseDetail::create(['id_course' => 2, 'title' =>'Warna di CSS','text' => '-',]);
        CourseDetail::create(['id_course' => 2, 'title' =>'Background di CSS','text' => '-',]);
        CourseDetail::create(['id_course' => 2, 'title' =>'Text Formating di CSS','text' => '-',]);
        CourseDetail::create(['id_course' => 2, 'title' =>'Font di CSS','text' => '-',]);
        CourseDetail::create(['id_course' => 2, 'title' =>'Garis atau Border pada CSS','text' => '-',]);
        CourseDetail::create(['id_course' => 2, 'title' =>'Elemen','text' => '-',]);
        
        // 3	JAVASCRIPT
        CourseDetail::create(['id_course' => 3, 'title' =>'Mengenal Javascript','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'Menulis Javascript di HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'Output pada JAvascript','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'Variabel dan Tipe Data','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'Dialog Untuk Input','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'Operator','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'Percabangan','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'Perulangan','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'Struktur Data Array','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'Fungsi di Javascript','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'Objek di JAvascript','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'DOM untuk Memanipulasi HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'Objek Math','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'AJAX','text' => '-',]);
        CourseDetail::create(['id_course' => 3, 'title' =>'Event Pada Javascript','text' => '-',]);
        
        
        // 4	BOOTSTRAP
        CourseDetail::create(['id_course' => 4, 'title' =>'','text' => '-',]);
        
        // 5	JQUERY
        CourseDetail::create(['id_course' => 5, 'title' =>'','text' => '-',]);
        
        // 6	PHP
        CourseDetail::create(['id_course' => 6, 'title' =>'Mengenal Bahasa Pemrograman PHP', 'text' => '-',]);
        CourseDetail::create(['id_course' => 6, 'title' =>'Persiapan Pemrograman PHP', 'text' => '-',]);
        CourseDetail::create(['id_course' => 6, 'title' =>'Struktur Dasar Sintaks PHP', 'text' => '-',]);
        CourseDetail::create(['id_course' => 6, 'title' =>'Operasi String pada PHP', 'text' => '-',]);
        CourseDetail::create(['id_course' => 6, 'title' =>'Pengenal Variabel dan Tipe Data di PHP', 'text' => '-',]);
        CourseDetail::create(['id_course' => 6, 'title' =>'Mengenal Konstanta', 'text' => '-',]);
        CourseDetail::create(['id_course' => 6, 'title' =>'Operator Pada PHP', 'text' => '-',]);
        CourseDetail::create(['id_course' => 6, 'title' =>'Percabangan pada PHP', 'text' => '-',]);
        CourseDetail::create(['id_course' => 6, 'title' =>'Perulangan pada PHP', 'text' => '-',]);
        CourseDetail::create(['id_course' => 6, 'title' =>'Array pada PHP', 'text' => '-',]);
        CourseDetail::create(['id_course' => 6, 'title' =>'Procedure pada PHP', 'text' => '-',]);
        CourseDetail::create(['id_course' => 6, 'title' =>'Function pada PHP', 'text' => '-',]);
        // 7	Laravel
        CourseDetail::create(['id_course' => 7, 'title' =>'Pendahuluan', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Pengenalan Laravel', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Membuat Project', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Struktur Project', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Menjalankan Laravel', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Git', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Artisan', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Request Lifecycle', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Testing', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Environment', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Application Environment', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Configuration', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Configuration Cache', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Dependency Injection', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Service Container', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Service Provider', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Facades', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Routing', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'View', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Static File', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Route Parameter', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Named Route', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Controller', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Request', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Request Input', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Input Type', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Filter Request Input', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'File Storage', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'File Upload', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Response', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Encryption', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Cookie', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Redirect', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Middleware', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Cross Site Request Forgery', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Route Group', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'URL Generation', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Session', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Error Handling', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'HTTP Exception', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Maintenance Mode', 'text' => '-',]);
        CourseDetail::create(['id_course' => 7, 'title' =>'Materi Selanjutnya', 'text' => '-',]);
        // 8	Typescript
        CourseDetail::create(['id_course' => 8, 'title' =>'','text' => '-',]);
        
        // 9	Node.JS
        CourseDetail::create(['id_course' => 9, 'title' =>'','text' => '-',]);
        
        // 10	REACT
        CourseDetail::create(['id_course' => 10, 'title' =>'','text' => '-',]);
        
        // 11	VUE
        CourseDetail::create(['id_course' => 11, 'title' =>'','text' => '-',]);
        
        // 12	SQL
        CourseDetail::create(['id_course' => 12, 'title' =>'','text' => '-',]);
        
        // 13	Git
        CourseDetail::create(['id_course' => 13, 'title' =>'','text' => '-',]);
        
        // 14	DART
        CourseDetail::create(['id_course' => 14, 'title' =>'','text' => '-',]);
        
        // 15	FLUTTER
        CourseDetail::create(['id_course' => 15, 'title' =>'','text' => '-',]);
        
        // 16	Python
        CourseDetail::create(['id_course' => 16, 'title' =>'','text' => '-',]);
        
        // 17	GO
        CourseDetail::create(['id_course' => 17, 'title' =>'','text' => '-',]);
        
        // 18	JAVA
        CourseDetail::create(['id_course' => 18, 'title' =>'','text' => '-',]);
        
        // 19	C++
        CourseDetail::create(['id_course' => 19, 'title' =>'','text' => '-',]);
        
        // 20	R
        CourseDetail::create(['id_course' => 20, 'title' =>'','text' => '-',]);
        
        // 21	LINUX
        CourseDetail::create(['id_course' => 21, 'title' =>'','text' => '-',]);
        

        
    }
}

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
        CourseDetail::create(['id_course' => 4, 'title' =>'Mengenal Bootstrap','text' => '-',]);
        CourseDetail::create(['id_course' => 4, 'title' =>'Cara Pakai Bootstrap dan Memahami Containers','text' => '-',]);
        CourseDetail::create(['id_course' => 4, 'title' =>'Component Button','text' => '-',]);
        CourseDetail::create(['id_course' => 4, 'title' =>'Typography dan Kebutuhan lainnya yg bisa dimanfaatkan','text' => '-',]);
        CourseDetail::create(['id_course' => 4, 'title' =>'Componen lencana, alert dan menggabungkan Button dengan bootstrap','text' => '-',]);
        CourseDetail::create(['id_course' => 4, 'title' =>'Mengenal Sistem Grid Bootstrap dan Manfaatnya','text' => '-',]);
        CourseDetail::create(['id_course' => 4, 'title' =>'Responsive design dengan Bootstrap','text' => '-',]);
        CourseDetail::create(['id_course' => 4, 'title' =>'Fungsi yang bermanfaat pada Grid','text' => '-',]);
        CourseDetail::create(['id_course' => 4, 'title' =>'Mendesain Form dengan Bootstrap','text' => '-',]);
        CourseDetail::create(['id_course' => 4, 'title' =>'Membuat Navbars dengan Bootstrap','text' => '-',]);
        CourseDetail::create(['id_course' => 4, 'title' =>'Fungsi lain yang dimiliki Bootstrap','text' => '-',]);
        CourseDetail::create(['id_course' => 4, 'title' =>'Kita campurkan fungsi-fungsi yang ada di dalam Boostrap pada Halaman','text' => '-',]);
        
        // 5	JQUERY
        CourseDetail::create(['id_course' => 5, 'title' =>'Pendahuluan JQuery','text' => '-',]);
        CourseDetail::create(['id_course' => 5, 'title' =>'Menggunakan JQuery Selector','text' => '-',]);
        CourseDetail::create(['id_course' => 5, 'title' =>'Bekerja dengan DOM di JQuery','text' => '-',]);
        CourseDetail::create(['id_course' => 5, 'title' =>'Memanipulasi DOM di JQuery','text' => '-',]);
        CourseDetail::create(['id_course' => 5, 'title' =>'Event Handler di JQuery','text' => '-',]);
        CourseDetail::create(['id_course' => 5, 'title' =>'Fitur Effect di JQuery','text' => '-',]);
        CourseDetail::create(['id_course' => 5, 'title' =>'Manipulasi CSS dalam JQuery','text' => '-',]);
        CourseDetail::create(['id_course' => 5, 'title' =>'Menggunakan Library untuk JQuery','text' => '-',]);
        
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
        CourseDetail::create(['id_course' => 8, 'title' =>'Pendahuluan','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Pengenalan TypeScript','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Membuat Project','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Setup TypeScript Project','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Say Hello Function','text' => '-',]);

        CourseDetail::create(['id_course' => 8, 'title' =>'Kompilasi TypeScript','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Tipe Data Primitif','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Babel TypeScript','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Tipe Data Array','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Tipe Data Any','text' => '-',]);

        CourseDetail::create(['id_course' => 8, 'title' =>'Union Type','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Type Alias','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Object Type','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Optional Properties','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Enum','text' => '-',]);

        CourseDetail::create(['id_course' => 8, 'title' =>'Null dan Undefined','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Interface','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Function Interface','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Indexable Interface','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Extending Interface','text' => '-',]);

        CourseDetail::create(['id_course' => 8, 'title' =>'Function di Interface','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Intersection Types','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Type Assertions','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Function','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Function Parameter','text' => '-',]);

        CourseDetail::create(['id_course' => 8, 'title' =>'Function Overloading','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Function Sebagai Parameter','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'If Statement','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Ternary Operator','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Switch Statement','text' => '-',]);

        CourseDetail::create(['id_course' => 8, 'title' =>'For Loop','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'While Loop','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Do While Loop','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'Break dan Continue','text' => '-',]);
        CourseDetail::create(['id_course' => 8, 'title' =>'JavaScript Feature','text' => '-',]);
        
        // 9	Node.JS
        CourseDetail::create(['id_course' => 9, 'title' =>'Pendahuluan','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Pengenalan NodeJS','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Web Application','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Concurrency dan Parallel','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Threadpool Web Model','text' => '-',]);

        CourseDetail::create(['id_course' => 9, 'title' =>'Blocking dan Non Blocking','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'NodeJS Architecture','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Menginstall NodeJS','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Hello World','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'NodeJS REPL','text' => '-',]);

        CourseDetail::create(['id_course' => 9, 'title' =>'NodeJS Standard Library','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Modules','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Require Function','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Global Async di Module','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'OS','text' => '-',]);

        CourseDetail::create(['id_course' => 9, 'title' =>'Path','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'File System','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Debugger','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'DNS','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Events','text' => '-',]);

        CourseDetail::create(['id_course' => 9, 'title' =>'Globals','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Process','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Readline','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Report','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Buffer','text' => '-',]);

        CourseDetail::create(['id_course' => 9, 'title' =>'Stream','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Timer','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Net','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'URL','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Util','text' => '-',]);

        CourseDetail::create(['id_course' => 9, 'title' =>'Zlib','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Console','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'Worker Threads','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'HTTP Client','text' => '-',]);
        CourseDetail::create(['id_course' => 9, 'title' =>'HTTP Server','text' => '-',]);
      
        CourseDetail::create(['id_course' => 9, 'title' =>'Cluster','text' => '-',]);
        
        // 10	REACT
        CourseDetail::create(['id_course' => 10, 'title' =>'Introduction - Instalasi','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Pengenalan Project React','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Pengenalan Component Dasar','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'JSX','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Props pada Child Component','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Blog sederhana menggunakan JSON','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Fitur Filter Data dan Pengenalan useState','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Mengembalikan Value ke Parent melalui Props','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Conditional Rendering','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Conditional Rendering 2','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'onClick Methods','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Lifecycle dan useEffect','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Fetch API dengan useEffect','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Multiple useEffect','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Dasar State Management dengan useContext','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Menginstall React Router','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Halaman About','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Layouting dan Children Routes','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Halaman Blog','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Dynamic Parameter Route dan Menampilkan Artikel','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'React Router Data Loader','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Error Page','text' => '-',]);
        CourseDetail::create(['id_course' => 10, 'title' =>'Dynamic Style untuk NavLink','text' => '-',]);
        
        // 11	VUE
        CourseDetail::create(['id_course' => 11, 'title' =>'Cara Install VueJS','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Mengenal Reactive Data pada VueJS','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Cara Binding Data ke dalam Attribute HTML','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Perulangan di dalam VueJS','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Fungsi Kondisi di dalam VueJS','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Menangani Input Data dari User','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Mengenal Lifecyle Hooks VueJS','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Mengenal Event dan Method di dalam VueJS','text' => '-',]);
        
        CourseDetail::create(['id_course' => 11, 'title' =>'Interpolation Template','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Berbagai Cara Penggunaan Data Binding','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Mengenal Computed Property','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Perbedaan Methods dan Computed Property','text' => '-',]);
        
        CourseDetail::create(['id_course' => 11, 'title' =>'Binding Attribute dengan Array dan Object','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Styling Secara Terprogram dengan Vue','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Toggle UI dengan Computed Property','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Efek Transisi dengan Vuejs','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Menggunakan Animation Library','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Memahami Transition Group pada Vuejs','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Mengatur Style dengan JavaScrip','text' => '-',]);
        
        CourseDetail::create(['id_course' => 11, 'title' =>'Mengenal Properti Filters','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Memuat Data pada Toggle Element','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Pengkategorian Data Array','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Fungsi Total dengan Computed','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Delete Item dalam Array','text' => '-',]);
        

        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Component Sederhana di Vue','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Menggunakan Props pada Vuejs','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Menambahkan Default Value pada Props','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Component Lebih Kompleks','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Menggunakan Event Method dari Parent Component','text' => '-',]);
        

        CourseDetail::create(['id_course' => 11, 'title' =>'Installasi Project dengan Vue CLI','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Memahami Struktur Folder Vue CLI','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Cara Install Modul di Vuejs','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Implementasi Modul di Vuejs','text' => '-',]);
        
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Component Price','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Component ProductList','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Method Add Item','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Price Slider Component','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Navbar Component','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Fungsi Delete Item','text' => '-',]);
        
        CourseDetail::create(['id_course' => 11, 'title' =>'Mengubah Struktur Project','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Checkout Component','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Menggunakan VueRouter untuk Components','text' => '-',]);
        CourseDetail::create(['id_course' => 11, 'title' =>'Membuat Link Antar Component','text' => '-',]);
        
        
        // 12	SQL
        CourseDetail::create(['id_course' => 12, 'title' =>'','text' => '-',]);
        
        // 13	Git
        CourseDetail::create(['id_course' => 13, 'title' =>'Pengenalan GIT','text' => '-',]);
        CourseDetail::create(['id_course' => 13, 'title' =>'Repository dan Menambahkan File','text' => '-',]);
        CourseDetail::create(['id_course' => 13, 'title' =>'Mengubah File dan Git Diff','text' => '-',]);
        CourseDetail::create(['id_course' => 13, 'title' =>'Melihat History dengan Git Log','text' => '-',]);
        CourseDetail::create(['id_course' => 13, 'title' =>'Membatalkan Perubahan dengan Git Restore','text' => '-',]);
        CourseDetail::create(['id_course' => 13, 'title' =>'Git Reset dan Git Restore Staged','text' => '-',]);
        CourseDetail::create(['id_course' => 13, 'title' =>'Kembali ke Commit Sebelumnya dengan Git Reset','text' => '-',]);
        CourseDetail::create(['id_course' => 13, 'title' =>'Branch dan Merge','text' => '-',]);
        CourseDetail::create(['id_course' => 13, 'title' =>'Merevisi Commit dengan Git Revert','text' => '-',]);
        CourseDetail::create(['id_course' => 13, 'title' =>'Memulai dan Membuat Repository di Github','text' => '-',]);
        CourseDetail::create(['id_course' => 13, 'title' =>'Git Clone dan Git Push','text' => '-',]);
        CourseDetail::create(['id_course' => 13, 'title' =>'Github Pull Request','text' => '-',]);
        CourseDetail::create(['id_course' => 13, 'title' =>'Aturan Menulis Commit','text' => '-',]);
        
        // 14	DART
        CourseDetail::create(['id_course' => 14, 'title' =>'Pendahuluan','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Pengenalan Dart','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Dart Sdk','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Membuat Project','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Program Hello World','text' => '-',]);

        CourseDetail::create(['id_course' => 14, 'title' =>'Variable','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Komentar','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Number','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Boolean','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'String','text' => '-',]);
       
        CourseDetail::create(['id_course' => 14, 'title' =>'Dynamic','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Konversi Tipe Data','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Operator Aritmatika','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Operator Perbandingan','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Operator Penugasan','text' => '-',]);
       
        CourseDetail::create(['id_course' => 14, 'title' =>'Operator Logika','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Operator Type Test','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'List','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Set','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Map','text' => '-',]);
       
        CourseDetail::create(['id_course' => 14, 'title' =>'Symbol','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'If Else','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Switch Case','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Null','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Ternary Operator','text' => '-',]);
       
        CourseDetail::create(['id_course' => 14, 'title' =>'Null Safety','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'For Loop','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'While Loop','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Do While Loop','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Break dan Continue','text' => '-',]);
       
        CourseDetail::create(['id_course' => 14, 'title' =>'For In','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Function','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Function Parameter','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Optional Parameter','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Named Parameter','text' => '-',]);
       
        CourseDetail::create(['id_course' => 14, 'title' =>'Function Return Value','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Function Short Expression','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Inner Function','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Main Function','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Higher Order Function','text' => '-',]);
       
        CourseDetail::create(['id_course' => 14, 'title' =>'Anonymous Function','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Scope','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Closure','text' => '-',]);
        CourseDetail::create(['id_course' => 14, 'title' =>'Recursive Function','text' => '-',]);
      
       
        // 15	FLUTTER
        CourseDetail::create(['id_course' => 15, 'title' =>'','text' => '-',]);
        
        // 16	Python
        CourseDetail::create(['id_course' => 16, 'title' =>'','text' => '-',]);
        
        // 17	GO
        CourseDetail::create(['id_course' => 17, 'title' =>'Pendahuluan','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Pengenalan Golang','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Menginstall Golang','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Membuat Project','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Program Hello World','text' => '-',]);

        CourseDetail::create(['id_course' => 17, 'title' =>'Multiple Main Function','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Tipe Data Number','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Tipe Data Boolean','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Tipe Data String','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Variable','text' => '-',]);

        CourseDetail::create(['id_course' => 17, 'title' =>'Constant','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Konversi Tipe Data','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Type Declarations','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Operasi Matematika','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Operasi Perbandingan','text' => '-',]);

        CourseDetail::create(['id_course' => 17, 'title' =>'Operasi Boolean','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Tipe Data Array','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Tipe Data Slice','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Tipe Data Map','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'If','text' => '-',]);

        CourseDetail::create(['id_course' => 17, 'title' =>'Switch','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'For','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Break dan Continue','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Function','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Function Parameter','text' => '-',]);

        CourseDetail::create(['id_course' => 17, 'title' =>'Function Return Value','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Returning Multiple Values','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Named Return Values','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Variadic Function','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Function as Value','text' => '-',]);

        CourseDetail::create(['id_course' => 17, 'title' =>'Function as Parameter','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Anonymous Function','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Recursive Function','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Closure','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Defer Panic dan Recover','text' => '-',]);

        CourseDetail::create(['id_course' => 17, 'title' =>'Komentar','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Struct','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Struct Method','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Interface','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Interface Kosong','text' => '-',]);

        CourseDetail::create(['id_course' => 17, 'title' =>'Nil','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Type Assertions','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Pointer','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Asterisk Operator','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Operator New','text' => '-',]);

        CourseDetail::create(['id_course' => 17, 'title' =>'Pointer di Function','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Pointer di Method','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Package dan Import','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Access Modifier','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Package Initialization','text' => '-',]);

        CourseDetail::create(['id_course' => 17, 'title' =>'Error','text' => '-',]);
        CourseDetail::create(['id_course' => 17, 'title' =>'Membuat Custom Error','text' => '-',]);

        
        // 18	JAVA
        CourseDetail::create(['id_course' => 18, 'title' =>'Pendahuluan','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Pengenalan Object Oriented Programming','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Class','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Object','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Field','text' => '-',]);

        CourseDetail::create(['id_course' => 18, 'title' =>'Method','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Constructor','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Constructor Overloading','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Variable Shadowing','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'This Keyword','text' => '-',]);

        CourseDetail::create(['id_course' => 18, 'title' =>'Inheritance','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Method Overriding','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Super Keyword','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Super Constructor','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Object Class','text' => '-',]);

        CourseDetail::create(['id_course' => 18, 'title' =>'Polymorphism','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Type Check dan Casts','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Variable Hiding','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Package','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Access Modifier','text' => '-',]);

        CourseDetail::create(['id_course' => 18, 'title' =>'Import','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Abstract Class','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Abstract Method','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Getter and setter','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Interface','text' => '-',]);

        CourseDetail::create(['id_course' => 18, 'title' =>'Interface Inheritance','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Default Method','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'toString() Method','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'equals() Method','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'hashCode() Method','text' => '-',]);

        CourseDetail::create(['id_course' => 18, 'title' =>'Final Class','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Final Method','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Inner Class','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Anonymous Class','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Static Keyword','text' => '-',]);

        CourseDetail::create(['id_course' => 18, 'title' =>'Record Class','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Enum Class','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Exception','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Runtime Exception','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Error','text' => '-',]);

        CourseDetail::create(['id_course' => 18, 'title' =>'StackTraceElement Class','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Try with Resource','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Annotation','text' => '-',]);
        CourseDetail::create(['id_course' => 18, 'title' =>'Reflection','text' => '-',]);
       
        
        // 19	C++
        CourseDetail::create(['id_course' => 19, 'title' =>'Apa itu C++','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Cara Kerja C++','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Instalasi Codeblocks - Windows','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Instalasi Visual Studio - Windows','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Instalasi Sublime Text + MinGW - Windows','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Instalasi XCode - Mac','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Instalasi Sublime Text - Mac','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Memahami Program dan Compiler','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Preprocessing, Compiling, dan Linking','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Review dan Recap Cara Menjalankan Program C++','text' => '-',]);
        
        CourseDetail::create(['id_course' => 19, 'title' =>'Printing pada Console','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Variabel','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Deklarasi dan Cin','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Tipe Data Fundamental','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Aritmatika','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Komparasi','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Operator Logika, and, or, dan not','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'if Statement','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'if else','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'switch case','text' => '-',]);
        
        CourseDetail::create(['id_course' => 19, 'title' =>'Latihan membuat calculator','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Operator Assignment','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Increment dan Decrement','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'While Loop','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Do While Loop','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'For Loop','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'break dan continue','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Latihan Deret Fibonacci','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Latihan membuat Segitiga Siku-Siku','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Latihan Membuat Segitiga Sama Kaki','text' => '-',]);
        
        CourseDetail::create(['id_course' => 19, 'title' =>'Fungsi (Pengenalan)','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Latihan Dadu Acak (Fungsi built-in)','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Fungsi Dengan Kembalian (return)','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Void | Fungsi Tanpa Kembalian','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Latihan Fungsi Luas dan Keliling Persegi Panjang','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Prototipe Fungsi','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Scope Variabel (Global, Lokal, dan Block)','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Default argumen pada fungsi','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Overloading sebuah fungsi','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Fungsi Rekursif','text' => '-',]);
        
        CourseDetail::create(['id_course' => 19, 'title' =>'Latihan Rekursif - Faktorial','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Latihan Rekursif - Fibonacci','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Pointer','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Reference','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Fungsi dengan Pointer','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Fungsi dengan Reference','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Pendahuluan Array','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Array || Standard Library','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Latihan Array','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Looping Array','text' => '-',]);
        
        CourseDetail::create(['id_course' => 19, 'title' =>'Multidimensi Array | Built-in','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Multidimensi Array | Standard Library','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Sort Array | std library','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Search Array | std library','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Pengenalan String','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Operasi pada String','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Komparasi atau Perbandingan String','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Akses Substring','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Substitusi String','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'GetLine Console String','text' => '-',]);
        
        CourseDetail::create(['id_course' => 19, 'title' =>'Struct','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Nesting Struct','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Unions','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Enum','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Ternary Operator','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Comma operator','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Bitwise operator','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Casting operator','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Menulis File Eksternal | ofstream','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Membaca File Ekstrenal | ifstream','text' => '-',]);
        
        CourseDetail::create(['id_course' => 19, 'title' =>'Menulis Binary File | ios::binary','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Membaca Binary File | ios::binary','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Latihan I/O External File Binary','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Project CRUD part 1 | Membuat Menu','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Project CRUD Part 2 | Create and Read','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Project CRUD Part 3 | Update and Delete','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Preprocessing Directive ( pendahuluan )','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Preprocessing Directive Macro, define, undef','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Preprocessing Directive if else','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Preprocessing Directive include','text' => '-',]);
        
        CourseDetail::create(['id_course' => 19, 'title' =>'Preprocessing Directive ifdef, ifndef, pragma','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'namespace','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Latihan MultiFile | Project CRUD','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'typedef','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Template Fungsi','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Auto','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Error Handling (exception)','text' => '-',]);
        CourseDetail::create(['id_course' => 19, 'title' =>'Final','text' => '-',]);
    
        
        // 20	R
        CourseDetail::create(['id_course' => 20, 'title' =>'','text' => '-',]);
        
        // 21	LINUX
        CourseDetail::create(['id_course' => 21, 'title' =>'','text' => '-',]);
        

        
    }
}

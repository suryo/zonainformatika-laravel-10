<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CourseCategory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryData = [
            ["Pemula (Beginner)", "Kategori ini ditujukan untuk mereka yang baru memulai dalam suatu bidang atau topik tertentu. Materi pada tingkat ini biasanya memberikan pengantar dan pemahaman dasar tentang konsep-konsep dasar.", "beginner"],
            ["Menengah (Intermediate)", "Kategori ini cocok untuk mereka yang telah memiliki pemahaman dasar dan siap untuk mengeksplorasi lebih dalam. Materi pada tingkat ini biasanya lebih kompleks dan menuntut pemahaman yang lebih mendalam.", "intermediate"],
            ["Lanjutan (Advanced)", "Kategori ini ditujukan untuk mereka yang telah memiliki pengetahuan yang cukup dalam dan siap untuk menguasai konsep-konsep yang lebih kompleks. Materi pada tingkat ini sering kali menawarkan tantangan yang lebih besar dan penekanan pada penerapan praktis.", "advanced"],
            ["Semua Tingkatan (All Levels)", "Kategori ini mencakup semua tingkat keahlian, mulai dari pemula hingga lanjutan. Materi pada kategori ini dirancang untuk menyesuaikan dengan berbagai tingkat pengalaman dan pengetahuan.", "alllevels"],
        ];

        foreach ($categoryData as $category) {
            CourseCategory::create([
                'name' => $category[0],
                'text' => $category[1],
                'slug' => $category[2],
            ]);
        }
    }
}

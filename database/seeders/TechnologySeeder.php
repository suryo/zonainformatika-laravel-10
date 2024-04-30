<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CourseTechnology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologyData = [
            ["Web","web"],
            ["Mobile","mobile"],
            ["Dekstop","dekstop"],
        ];

        foreach ($technologyData as $technology) {
            CourseTechnology::create([
                'name' => $technology[0],
                'slug' => $technology[1],
            ]);
        }
    }
}

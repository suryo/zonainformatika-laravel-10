<?php

namespace Database\Seeders;
use App\Models\CourseRoadmap;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoadmapSeeder extends Seeder
{
    public function run()
    {
        $roadmapsData = [
            ["Frontend", "Step by step guide to becoming a modern frontend developer", "-"],
            ["Backend", "Step by step guide to becoming a modern backend developer", "-"],
            ["DevOps", "Step by step guide for DevOps, SRE or any other Operations Role", "-"],
            ["Full Stack", "Step by step guide to becoming a modern full stack developer", "-"],
            ["AI and Data Scientist", "Step by step guide to becoming an AI and Data Scientist", "-"],
            ["Data Analyst", "Step by step guide to becoming an Data Analyst", "-"],
            ["Android", "Step by step guide to becoming an Android developer", "-"],
            ["PostgreSQL", "Step by step guide to becoming a modern PostgreSQL DB Administrator", "-"],
            ["Blockchain", "Step by step guide to becoming a blockchain developer", "-"],
            ["QA", "Steps to follow in order to become a modern QA Engineer", "-"],
            ["Software Architect", "Step by step guide to becoming a Software Architect", "-"],
            ["Flutter", "Step by step guide to becoming a Flutter developer", "-"],
            ["Cyber Security", "Step by step guide to becoming a Cyber Security Expert", "-"],
            ["UX Design", "Step by step guide to becoming a UX Designer", "-"],
            ["React Native", "Step by step guide to becoming a React Native developer", "-"],
            ["Game Developer", "Roadmap to becoming a Game Developer", "-"],
            ["Technical Writer", "Roadmap for anyone looking for a career in technical writing", "-"],
            ["MLOps", "Step by step guide to learn MLOps", "-"],
        ];

        foreach ($roadmapsData as $roadmap) {
            CourseRoadmap::create([
                'title' => $roadmap[0],
                'short_desc' => $roadmap[1],
                'text' => $roadmap[2],
            ]);
        }
    }
}

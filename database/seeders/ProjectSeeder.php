<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\DB::table('projects')->insert([
            ['name' => 'Personal Portfolio Website', 'category' => 'WEB DEVELOPMENT', 'image' => 'images/project_1.png'],
            ['name' => 'Student Management App', 'category' => 'Mobile App Development', 'image' => 'images/project_2.png'],
            ['name' => 'Visual Foxpro Project', 'category' => 'Database Application', 'image' => 'images/project_333.jpg'],
            ['name' => 'Hestii Henna Booking System', 'category' => 'FULLSTACK WEB DEVELOPMENT', 'image' => 'images/project_4.png'],
            ['name' => 'AI Chatbot for Emotional Support', 'category' => 'PYTHON & NLP', 'image' => 'images/project_5.webp'],
            ['name' => 'Simple AI Prediction Model', 'category' => 'PYTHON & DATA SCIENCE', 'image' => 'images/project_6.jpeg'],
        ]);
    }
}

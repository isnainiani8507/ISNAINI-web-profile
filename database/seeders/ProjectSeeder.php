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
        \Illuminate\Support\Facades\DB::table('projects')->truncate();
        \Illuminate\Support\Facades\DB::table('projects')->insert([
            [
                'name' => 'Personal Portfolio Website',
                'category' => 'WEB DEVELOPMENT',
                'image' => 'images/project_1.png',
                'github_link' => 'https://github.com/isnainiani8507/ISNAINI-web-profile.git'
            ],
            [
                'name' => 'Student Management App',
                'category' => 'Mobile App Development',
                'image' => 'images/project_2.png',
                'github_link' => 'https://github.com/isnainiani8507/student-crud-app-kodular.git'
            ],
            [
                'name' => 'Visual Foxpro Project',
                'category' => 'Database Application',
                'image' => 'images/project_333.jpg',
                'github_link' => 'https://github.com/isnainiani8507/student-cash-management-system.git'
            ],
            [
                'name' => 'Hestii Henna Booking System',
                'category' => 'FULLSTACK WEB DEVELOPMENT',
                'image' => 'images/project_4.png',
                'github_link' => 'https://github.com/yunitainesis/hestii_henna.git'
            ],
            [
                'name' => 'AI Chatbot for Emotional Support',
                'category' => 'PYTHON & NLP',
                'image' => 'images/project_5.webp',
                'github_link' => 'https://github.com/devannoap31/student-emotional-consultation-web-with-AI.git'
            ],
            [
                'name' => 'Simple AI Prediction Model',
                'category' => 'PYTHON & DATA SCIENCE',
                'image' => 'images/project_6.jpeg',
                'github_link' => '#'
            ],
            [
                'name' => 'Jimpitan Digital',
                'category' => 'WEB DEVELOPMENT',
                'image' => 'images/project_7.jpeg',
                'github_link' => 'https://github.com/isnainiani8507/JimpitIn-Digital.git'
            ],
        ]);
    }
}

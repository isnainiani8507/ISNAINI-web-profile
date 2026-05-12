<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\DB::table('skills')->insert([
            ['name' => 'PHP & Laravel', 'percentage' => 75, 'description' => 'Fokus pada pembuatan routes, views, dan sistem backend sederhana.'],
            ['name' => 'HTML & CSS', 'percentage' => 80, 'description' => 'Membangun struktur website yang rapi dan memastikan tampilan responsif.'],
            ['name' => 'Database (SQL)', 'percentage' => 70, 'description' => 'Memahami pengelolaan data menggunakan MySQL dan phpMyAdmin.'],
            ['name' => 'JavaScript', 'percentage' => 60, 'description' => 'Terus belajar menerapkan interaktivitas dasar pada elemen halaman web.'],
            ['name' => 'Python', 'percentage' => 55, 'description' => 'Memperkuat pemahaman logika pemrograman melalui dasar-dasar Python.'],
            ['name' => 'Teamwork & Collaboration', 'percentage' => 85, 'description' => 'Senang berkolaborasi dalam tim untuk diskusi dan pemecahan masalah proyek web.'],
        ]);
    }
}

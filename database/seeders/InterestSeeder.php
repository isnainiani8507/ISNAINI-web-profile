<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\DB::table('interests')->insert([
            ['name' => 'Web Structure', 'icon' => 'flaticon-3d-design', 'description' => 'Mempelajari bagaimana menyusun kerangka website yang rapi dan standar menggunakan HTML.'],
            ['name' => 'Web Styling', 'icon' => 'flaticon-app-development', 'description' => 'Menekuni teknik styling menggunakan CSS untuk membuat tampilan website yang responsif dan enak dilihat di berbagai perangkat.'],
            ['name' => 'Backend Logic', 'icon' => 'flaticon-web-programming', 'description' => 'Belajar membangun logika aplikasi web menggunakan framework Laravel untuk mengelola proses data di balik layar.'],
            ['name' => 'Data Management', 'icon' => 'flaticon-branding', 'description' => 'Mendalami cara penyimpanan dan pengelolaan informasi melalui sistem database seperti MySQL dan SQLite.'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\DB::table('certifications')->insert([
            ['name' => 'Seri Literasi Keuangan TDA Soloraya', 
            'role' => 'Peserta', 
            'date' => 'November 14, 2024', 
            'description' => 'Edukasi mengenai pengelolaan keuangan pribadi untuk mencapai tujuan hidup jangka panjang bersama Komunitas TDA Soloraya.', 
            'image' => 'images/sertifikat-2.jpg'],
            ['name' => 'Seminar Nasional Media Kreatif Digital', 
            'role' => 'Peserta', 'date' => 'Januari 18, 2025', 
            'description' => 'Mempelajari peran media kreatif dalam perkembangan Teknologi Informasi dan industri otomotif masa kini.', 
            'image' => 'images/sertifikat-1.jpg'],
            ['name' => 'Pelatihan Public Speaking: Character Building', 
            'role' => 'Panitia', 'date' => 'Januari 14-15, 2026', 
            'description' => 'Berkontribusi dalam kepanitiaan pelatihan komunikasi mahasiswa, sekaligus dipercaya mengemban tanggung jawab sebagai Ketua Pelaksana acara.', 
            'image' => 'images/sertifikat-3.jpg'],
        ]);
    }
}

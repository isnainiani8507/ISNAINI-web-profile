<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('certifications')->insert([
            'name' => 'Sertifikat Praktik Kerja Industri (Prakerin)',
            'date' => 'September 27, 2022',
            'role' => 'Peserta',
            'description' => 'Menyelesaikan program Praktik Kerja Industri (Prakerin) di PT. Media Sarana Digitalindo untuk meningkatkan kemampuan dan pengalaman kerja di lingkungan profesional.',
            'image' => 'images/sertifikat-5.png',
            'pdf' => 'Sertifikat Prakerin - Media Sarana Digitalindo.pdf',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('certifications', function (Blueprint $table) {
            //
        });
    }
};

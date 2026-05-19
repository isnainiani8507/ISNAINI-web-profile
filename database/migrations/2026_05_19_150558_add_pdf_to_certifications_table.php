<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('certifications', function (Blueprint $table) {
            // Check if column already exists in case local was already migrated
            if (!Schema::hasColumn('certifications', 'pdf')) {
                $table->string('pdf')->nullable()->after('image');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('certifications', function (Blueprint $table) {
            if (Schema::hasColumn('certifications', 'pdf')) {
                $table->dropColumn('pdf');
            }
        });
    }
};

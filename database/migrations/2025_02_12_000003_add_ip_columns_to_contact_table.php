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
        Schema::table('contact', function (Blueprint $table) {
            if (!Schema::hasColumn('contact', 'ip')) {
                $table->string('ip', 45)->nullable()->after('cv');
            }
            if (!Schema::hasColumn('contact', 'ip_info')) {
                $table->longText('ip_info')->nullable()->after('ip');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact', function (Blueprint $table) {
            if (Schema::hasColumn('contact', 'ip_info')) {
                $table->dropColumn('ip_info');
            }
            if (Schema::hasColumn('contact', 'ip')) {
                $table->dropColumn('ip');
            }
        });
    }
};

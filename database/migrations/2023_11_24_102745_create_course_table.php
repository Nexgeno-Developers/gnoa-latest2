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
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('short_description');
            $table->string('image');
            $table->string('language');
            $table->decimal('rating', 3, 2); // Assuming a decimal field for the rating
            $table->string('cont_title');
            $table->text('content');
            $table->string('period_b');
            $table->string('duration_b');
            $table->string('period_s');
            $table->string('duration_s');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course');
    }
};

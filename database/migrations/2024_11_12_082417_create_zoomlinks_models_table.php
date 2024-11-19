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
        Schema::create('zoomlinks_models', function (Blueprint $table) {
            $table->id();

            $table->string('courseId');
            $table->string('courseName');
            $table->string('zoomLink');
            $table->string('description');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zoomlinks_models');
    }
};

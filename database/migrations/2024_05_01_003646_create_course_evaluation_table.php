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
        Schema::create('course_evaluation', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_id')->unsigned();
            $table->bigInteger('course_detail_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('grade1');
            $table->bigInteger('grade2');
            $table->bigInteger('grade3');
            $table->string('status', 191)->nullable();
            $table->enum('deleted', ['false', 'true'])->default('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_evaluation');
    }
};

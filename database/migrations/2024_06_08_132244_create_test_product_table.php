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
        Schema::create('test_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 191);
            $table->text('desc')->nullable();
            $table->integer('price')->nullable();
            $table->text('image_url')->nullable();
            $table->string('slug', 191)->nullable();
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
        Schema::dropIfExists('test_product');
    }
};

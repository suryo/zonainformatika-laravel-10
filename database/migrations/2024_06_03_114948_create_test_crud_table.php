<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestCrudTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('test_crud', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content', 191);
            $table->string('author', 191);
            $table->integer('price')->nullable();
            $table->text('file_content')->nullable();
            $table->string('slug', 191);
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
        Schema::dropIfExists('test_crud');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 191);
            $table->text('short_desc')->nullable();
            $table->text('text');
            $table->text('type')->nullable();
            $table->text('image')->nullable();
            $table->text('image_landscape')->nullable();
            $table->string('image_square', 255)->nullable();
            $table->text('quote_text')->nullable();
            $table->text('quote_author')->nullable();
            $table->string('author', 191);
            $table->string('slug', 191);
            $table->string('status', 191)->nullable();
            $table->bigInteger('article_category_id')->unsigned();
            $table->enum('deleted', ['false', 'true'])->default('false');
            $table->timestamps();

            $table->foreign('article_category_id')->references('id')->on('article_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
}

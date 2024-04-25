<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 191);
            $table->text('short_desc')->nullable();
            $table->text('text');
            $table->text('type');
            $table->text('image')->nullable();
            $table->text('image_landscape')->nullable();
            $table->string('image_square', 255)->nullable();
            $table->string('level', 255)->nullable();
            $table->integer('price_buy')->nullable();
            $table->integer('price_rent')->nullable();
            $table->text('video')->nullable();
            $table->text('quote_text')->nullable();
            $table->text('quote_author')->nullable();
            $table->string('author', 191);
            $table->string('slug', 191);
            $table->string('status', 191);
            $table->string('images_code', 191);
            $table->integer('order');
            $table->bigInteger('category_id')->unsigned();
            $table->integer('technology_id')->nullable();
            $table->enum('deleted', ['false', 'true'])->default('false');
            $table->timestamps();

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}

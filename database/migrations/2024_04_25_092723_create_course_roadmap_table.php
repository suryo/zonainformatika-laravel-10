<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRoadmapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_roadmap', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 191);
            $table->text('short_desc')->nullable();
            $table->text('text');
            $table->text('type');
            $table->text('image')->nullable();
            $table->text('image_landscape')->nullable();
            $table->string('image_square', 255)->nullable();
            $table->string('level', 255)->nullable();
            $table->decimal('price_buy', 15, 0)->nullable();
            $table->decimal('price_rent', 15, 2)->nullable();
            $table->text('video')->nullable();
            $table->text('quote_text')->nullable();
            $table->text('quote_author')->nullable();
            $table->string('author', 191);
            $table->string('slug', 191);
            $table->string('status', 191);
            $table->string('images_code', 191);
            $table->integer('order');
            $table->bigInteger('category_id')->unsigned();
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
        Schema::dropIfExists('course_roadmap');
    }
}

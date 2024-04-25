<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_course')->nullable();
            $table->string('title', 191);
            $table->text('short_desc')->nullable();
            $table->text('text');
            $table->text('type');
            $table->text('image')->nullable();
            $table->text('video')->nullable();
            $table->text('quote_text')->nullable();
            $table->text('quote_author')->nullable();
            $table->string('author', 191);
            $table->string('slug', 191);
            $table->string('status', 191);
            $table->string('images_code', 191);
            $table->integer('order');
            $table->enum('deleted', ['false', 'true'])->default('false');
            $table->bigInteger('category_id')->unsigned()->nullable();
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
        Schema::dropIfExists('course_detail');
    }
}

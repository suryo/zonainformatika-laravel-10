<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterCourseUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_course_user', function (Blueprint $table) {
            $table->id();
            $table->string('register_number');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('user_id');
            $table->text('note')->nullable();
            $table->string('status')->default('active');
            $table->enum('deleted', ['false', 'true'])->default('false');
            $table->timestamps();

            // Add foreign key constraints
            // $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_course_user');
    }
}

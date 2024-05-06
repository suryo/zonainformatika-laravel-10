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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('nomerorder');
            $table->unsignedBigInteger('user_id');
            $table->string('status');
            $table->integer('subtotal');
            $table->integer('tax');
            $table->integer('ordertotal');
            $table->integer('payment');
            $table->text('addcatatan')->nullable();
            $table->integer('payment_id');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->enum('deleted', ['true', 'false'])->default('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

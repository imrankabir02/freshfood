<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('order_no')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('billing_address')->nullable();
            $table->text('shipping_address')->nullable();
            $table->decimal('payable', 10, 2);
            $table->decimal('discount', 10, 2);
            $table->decimal('net_payable', 10, 2);
            $table->string('status');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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

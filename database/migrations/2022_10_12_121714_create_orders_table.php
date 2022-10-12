<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('order_number', 10)->unique();
            $table->dateTime('order_dateTime');
            $table->string('customer_firstName', 30);
            $table->string('customer_lastName', 30);
            $table->string('customer_address');
            $table->string('customer_phoneNumber', 10); // Italian number format without country prefix or whitespaces
            $table->string('additional_notes')->nullable();
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
        Schema::dropIfExists('orders');
    }
}

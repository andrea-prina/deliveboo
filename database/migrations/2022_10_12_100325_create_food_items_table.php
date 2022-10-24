<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('description');
            $table->string('image_path')->nullable()->default('https://media.istockphoto.com/vectors/foods-service-icon-vector-id500595486?k=20&m=500595486&s=612x612&w=0&h=g7XdDJOKG1yaA70RnwSr11ZGzhIPBbCW5uzJznGV1mc=');
            $table->float('price', 5, 2);
            $table->boolean('availability')->default(true);
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
        Schema::dropIfExists('food_items');
    }
}

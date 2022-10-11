<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->after('name');
            $table->string('restaurant_name')->after('surname');
            $table->string('vat_number')->after('restaurant_name');
            $table->string('address')->after('password');
            $table->float('delivery_fee', 4, 2, true)->after('address');
            $table->boolean('free_delivery')->nullable()->after('delivery_fee');
            $table->string('image_path')->nullable()->after('free_delivery');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('restaurant_name');
            $table->dropColumn('vat_number');
            $table->dropColumn('address');
            $table->dropColumn('delivery_fee');
            $table->dropColumn('free_delivery');
            $table->dropColumn('image_path');
        });
    }
}

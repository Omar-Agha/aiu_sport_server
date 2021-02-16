<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUserSubscription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_subscription', function (Blueprint $table) {
            //
            //$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sub_id')->references('id')->on('subscription') ->onDelete('cascade');;
            $table->foreign('class_id')->references('id')->on('class');
            $table->foreign('sub_type_id')->references('id')->on('sub_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_subscription', function (Blueprint $table) {
            //
        });
    }
}

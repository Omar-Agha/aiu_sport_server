<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id');           
            $table->enum('gender',['m','f','n']);
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->string('department');//////////enum or string            
            $table->string('email')->unique();
            $table->string('home_phone');
            $table->string('mobile_number');
            $table->string('emergency_contact_name');
            $table->string('relationship');//////////enum????
            $table->string('work_phone');
            $table->json('medical_info')->nullable();
            $table->string('password');///////////?????????
            $table->rememberToken();
            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

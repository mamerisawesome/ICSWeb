<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultiesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->date('birthdate');
            $table->string('sex');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password', 60);
            $table->string('employeeNumber')->unique();
            $table->string('room');
            $table->string('academicPosition');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('faculties');
    }

}

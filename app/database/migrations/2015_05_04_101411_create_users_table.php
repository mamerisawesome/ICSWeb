<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('firstName',50);
            $table->string('middleName',50);
            $table->string('lastName',50);
            $table->date('birthdate');
            $table->string('sex',10);
            $table->string('email',60)->unique();
            $table->string('username',60)->unique();
            $table->string('password', 60);
            // for faculty
            $table->string('employeeNumber')->nullable()->unique();
            $table->string('room',5)->nullable();
            $table->string('academicPosition',20)->nullable();
            // for student
            $table->string('studentNumber',10)->nullable()->unique();

			//$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}

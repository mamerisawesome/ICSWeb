<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type', 10);
            $table->string('firstName', 50);
            $table->string('middleName', 50);
            $table->string('lastName', 50);
            $table->date('birthdate');
            $table->string('sex', 10);
            $table->string('email', 60)->unique();
            $table->string('username', 60)->unique();
            $table->string('password', 60);
            $table->string('studentNumber', 10)->nullable()->unique();
            $table->string('employeeNumber')->nullable()->unique();
            $table->string('room', 5)->nullable();
            $table->string('academicPosition', 30)->nullable();
            // will accept a url to a filename with a file type JSON
            $table->string('groups',20);
            $table->string('messages',20);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
//        File::delete('public/JSONcontents/groups/*.json');
//        File::delete('public/JSONcontents/messages/*.json');
        File::cleanDirectory('public/JSONcontents/groups');
        File::cleanDirectory('public/JSONcontents/messages');
        Schema::drop('accounts');
	}

}

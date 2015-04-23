<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Schema::create('studentAccounts', function(Blueprint $table)
		// {
		// 	$table->increments('id');

  //           $table->string('firstName',50);
  //           $table->string('middleName',50);
  //           $table->string('LastName',50);

  //           $table->date('birthdate');
  //           $table->string('sex',20);
  //           $table->string('email',50);

  //           $table->string('userName',50);
  //           $table->string('password',50);
  //           $table->string('studentNumber',10);

  //           $table->timestamps();
		// });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Schema::drop('studentAccounts');
	}

}

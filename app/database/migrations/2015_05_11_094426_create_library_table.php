<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('library', function(Blueprint $table)
		{
			$table->integer('id');
			$table->integer('year');
			$table->string('author', 100);
			$table->string('lastName', 50);
			$table->string('title', 200);
			$table->string('url', 100);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('library');
	}

}

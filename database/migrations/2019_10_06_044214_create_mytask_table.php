<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMytaskTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mytask', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('name', 8);
			$table->float('project', 5);
			$table->integer('year');
			$table->string('C_ID', 100);
			$table->float('bistfisad', 5);
			$table->string('final', 5);
			$table->float('class_activity', 5);
			$table->float('assignment', 5);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mytask');
	}

}

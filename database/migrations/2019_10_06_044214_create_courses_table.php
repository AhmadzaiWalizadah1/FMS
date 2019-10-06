<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->string('C_ID', 10);
			$table->string('Title', 45);
			$table->string('E_title', 45);
			$table->integer('Credits')->unsigned();
			$table->integer('Semester')->unsigned();
			$table->integer('D_ID')->nullable()->index('D_ID');
			$table->integer('Year');
			$table->primary(['C_ID','Year']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}

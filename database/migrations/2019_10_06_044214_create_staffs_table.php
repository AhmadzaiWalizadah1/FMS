<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staffs', function(Blueprint $table)
		{
			$table->smallInteger('Staff_ID')->unsigned()->primary();
			$table->string('Name', 40);
			$table->string('E_Name', 40);
			$table->string('Last_name', 30);
			$table->string('E_last_name', 30);
			$table->string('F_Name', 40)->nullable();
			$table->string('Degree', 40)->nullable();
			$table->string('E_degree', 40)->nullable();
			$table->string('Position', 40);
			$table->string('E_position', 40);
			$table->string('Contact', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('staffs');
	}

}

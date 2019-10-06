<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentAttenInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_atten_info', function(Blueprint $table)
		{
			$table->char('S_ID', 8)->index('S_ID');
			$table->string('C_ID', 10)->index('C_ID');
			$table->integer('Month')->unsigned();
			$table->integer('Year');
			$table->integer('Present')->unsigned();
			$table->integer('Absent')->unsigned();
			$table->string('comment', 100);
			$table->index(['C_ID','Year'], 'student_atten_info_ibfk_2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student_atten_info');
	}

}

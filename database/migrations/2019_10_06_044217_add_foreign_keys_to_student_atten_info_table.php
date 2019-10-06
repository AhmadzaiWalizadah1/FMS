<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentAttenInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('student_atten_info', function(Blueprint $table)
		{
			$table->foreign('S_ID', 'student_atten_info_ibfk_1')->references('S_ID')->on('student_info')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('C_ID', 'student_atten_info_ibfk_2')->references('C_ID')->on('courses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('student_atten_info', function(Blueprint $table)
		{
			$table->dropForeign('student_atten_info_ibfk_1');
			$table->dropForeign('student_atten_info_ibfk_2');
		});
	}

}

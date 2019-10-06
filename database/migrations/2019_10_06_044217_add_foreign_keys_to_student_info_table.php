<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('student_info', function(Blueprint $table)
		{
			$table->foreign('K_ID', 'student_info_ibfk_1')->references('k_id')->on('kankor_list')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('D_ID', 'student_info_ibfk_2')->references('D_ID')->on('departments')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('student_info', function(Blueprint $table)
		{
			$table->dropForeign('student_info_ibfk_1');
			$table->dropForeign('student_info_ibfk_2');
		});
	}

}

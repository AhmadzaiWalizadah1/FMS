<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExamResChanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exam_res_chance', function(Blueprint $table)
		{
			$table->foreign('S_ID', 'exam_res_chance_ibfk_1')->references('S_ID')->on('student_info')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('C_ID', 'exam_res_chance_ibfk_2')->references('C_ID')->on('courses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exam_res_chance', function(Blueprint $table)
		{
			$table->dropForeign('exam_res_chance_ibfk_1');
			$table->dropForeign('exam_res_chance_ibfk_2');
		});
	}

}

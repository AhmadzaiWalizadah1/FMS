<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStaffCourseRelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('staff_course_rel', function(Blueprint $table)
		{
			$table->foreign('C_ID', 'staff_course_rel_ibfk_1')->references('C_ID')->on('courses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Staff_ID', 'staff_course_rel_ibfk_2')->references('Staff_ID')->on('staffs')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('staff_course_rel', function(Blueprint $table)
		{
			$table->dropForeign('staff_course_rel_ibfk_1');
			$table->dropForeign('staff_course_rel_ibfk_2');
		});
	}

}

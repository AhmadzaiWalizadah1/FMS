<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffCourseRelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staff_course_rel', function(Blueprint $table)
		{
			$table->string('C_ID', 10);
			$table->smallInteger('Staff_ID')->unsigned()->index('staff_course_rel_ibfk_2');
			$table->integer('year');
			$table->primary(['C_ID','Staff_ID','year']);
			$table->index(['C_ID','year'], 'staff_course_rel_ibfk_1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('staff_course_rel');
	}

}

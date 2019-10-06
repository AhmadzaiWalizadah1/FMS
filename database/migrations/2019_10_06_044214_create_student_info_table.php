<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_info', function(Blueprint $table)
		{
			$table->string('K_ID', 10)->index('K_ID');
			$table->char('S_ID', 8)->primary();
			$table->string('E_name', 20)->default(' ');
			$table->string('E_f_name', 20)->nullable();
			$table->string('E_faculty', 30);
			$table->integer('D_ID')->nullable()->index('D_ID');
			$table->string('Birth_date', 10);
			$table->string('E_Birth_place', 20);
			$table->string('Native_language', 10);
			$table->string('NID_page_number', 3);
			$table->string('NID_Volume_number', 16);
			$table->string('NID_sabt_number', 10);
			$table->integer('NID_general_number');
			$table->char('Marital_status', 1);
			$table->char('Contact', 10);
			$table->string('Comments', 30)->nullable();
			$table->string('S_image_name', 15)->nullable();
			$table->string('Native_village', 20);
			$table->string('Native_district', 20);
			$table->string('Native_province', 20);
			$table->string('e_native_province', 15);
			$table->string('Currect_village', 20);
			$table->string('Current_district', 20);
			$table->string('Current_province', 20);
			$table->integer('Admission_year');
			$table->string('Father_job', 20);
			$table->string('Father_work_location', 20);
			$table->string('Uncle_name', 20)->nullable();
			$table->string('Uncle_job', 20)->nullable();
			$table->string('Uncle_work_location', 20)->nullable();
			$table->string('m_name', 20);
			$table->string('m_work', 30);
			$table->string('m_work_location', 30);
			$table->string('b_name', 35);
			$table->string('b_work', 35);
			$table->string('b_work_location', 35);
			$table->integer('Semester')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student_info');
	}

}

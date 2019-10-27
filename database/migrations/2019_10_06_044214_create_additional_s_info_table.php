<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdditionalSInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('additional_s_info', function(Blueprint $table)
		{
			$table->char('S_ID', 8)->nullable()->index('S_ID');
			$table->string('ID_Card_Number', 20)->nullable();
			$table->string('U_change_doc_num', 10)->nullable();
			$table->string('Tajil_Number', 20)->nullable();
			$table->string('Admission_doc_num', 10)->nullable();
			$table->string('Leaving_num', 10)->nullable();
			$table->binary('Fired_status', 1)->nullable();
			$table->string('Hostel_doc_num', 10)->nullable();
			$table->binary('Scholarship', 1)->nullable();
			$table->string('Reward', 20)->nullable();
			$table->string('Punishment', 20)->nullable();
			$table->integer('Uni_Graduation_year')->nullable();
			$table->string('Thesis_title', 200)->nullable();
			$table->string('Thesis_date', 10)->nullable();
			$table->string('theses_number', 20)->nullable();
			$table->string('Comment', 30)->nullable();
			$table->string('E_Thesis_title', 200)->nullable();
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('additional_s_info');
	}

}

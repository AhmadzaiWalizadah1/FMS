<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKankorListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kankor_list', function(Blueprint $table)
		{
			$table->string('k_id', 10)->primary();
			$table->string('name', 20);
			$table->string('f_name', 20);
			$table->string('gf_name', 20);
			$table->string('last_name', 20)->nullable();
			$table->string('school', 30);
			$table->string('e_school', 40);
			$table->smallInteger('g_year');
			$table->integer('k_exam_year');
			$table->float('kankor_score', 7, 4);
			$table->string('faculty', 40);
			$table->string('province', 10);
			$table->char('gender', 45);
			$table->date('updated_at');
			$table->date('created_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kankor_list');
	}

}

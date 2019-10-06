<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamResultTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exam_result', function(Blueprint $table)
		{
			$table->char('S_ID', 8);
			$table->string('C_ID', 10)->index('C_ID');
			$table->integer('Year');
			$table->float('Class_activity', 5)->nullable();
			$table->float('Assignment', 5)->nullable();
			$table->float('Project', 5)->nullable();
			$table->float('Midterm', 5)->nullable();
			$table->decimal('Final', 5)->nullable();
			$table->string('comment', 100);
			$table->primary(['S_ID','C_ID','Year']);
			$table->index(['C_ID','Year'], 'exam_result_ibfk_2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exam_result');
	}

}

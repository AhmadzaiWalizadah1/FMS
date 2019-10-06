<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamResChanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exam_res_chance', function(Blueprint $table)
		{
			$table->char('S_ID', 8);
			$table->string('C_ID', 10)->index('C_ID');
			$table->integer('Year');
			$table->float('Final', 5);
			$table->integer('Chance')->unsigned();
			$table->text('comment', 65535);
			$table->primary(['S_ID','C_ID','Chance']);
			$table->index(['C_ID','Year'], 'exam_res_chance_ibfk_2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exam_res_chance');
	}

}

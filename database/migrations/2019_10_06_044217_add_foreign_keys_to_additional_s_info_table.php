<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAdditionalSInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('additional_s_info', function(Blueprint $table)
		{
			$table->foreign('S_ID', 'additional_s_info_ibfk_1')->references('S_ID')->on('student_info')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('additional_s_info', function(Blueprint $table)
		{
			$table->dropForeign('additional_s_info_ibfk_1');
		});
	}

}

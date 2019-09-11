<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KankorList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Kankor_Result', function (Blueprint $table) {
          $table->increments('id');
          $table->Integer('k_id');
          $table->string('f_name');
          $table->string('gf_name');
          $table->string('school');
          $table->string('e_school');
          $table->date('g_year');
          $table->date('k_exam_year');
          $table->Integer('kankor_score');
          $table->string('faculty');
          $table->string('province');
          $table->string('gender');
          $table->rememberToken();
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

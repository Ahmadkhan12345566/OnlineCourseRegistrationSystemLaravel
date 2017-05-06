<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemsterScourseslimitsTable extends Migration {

	public function up()
	{
		Schema::create('semster_scourseslimits', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('semster_c_L');
			$table->integer('semseter_num');
		});
	}

	public function down()
	{
		Schema::drop('semster_scourseslimits');
	}
}
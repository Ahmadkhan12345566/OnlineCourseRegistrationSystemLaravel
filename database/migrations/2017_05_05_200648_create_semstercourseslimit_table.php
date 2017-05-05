<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemstercourseslimitTable extends Migration {

	public function up()
	{
		Schema::create('semstercourseslimit', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('semster_c_L');
			$table->integer('semseter_num');
		});
	}

	public function down()
	{
		Schema::drop('semstercourseslimit');
	}
}
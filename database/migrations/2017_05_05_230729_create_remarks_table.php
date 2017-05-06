<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRemarksTable extends Migration {

	public function up()
	{
		Schema::create('remarks', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title', 20);
		});
	}

	public function down()
	{
		Schema::drop('remarks');
	}
}
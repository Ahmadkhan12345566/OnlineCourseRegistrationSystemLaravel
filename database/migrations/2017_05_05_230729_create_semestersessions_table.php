<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemestersessionsTable extends Migration {

	public function up()
	{
		Schema::create('semestersessions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title', 100)->unique();
		});
	}

	public function down()
	{
		Schema::drop('semestersessions');
	}
}
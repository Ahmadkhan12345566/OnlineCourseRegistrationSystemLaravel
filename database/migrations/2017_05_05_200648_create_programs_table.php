<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramsTable extends Migration {

	public function up()
	{
		Schema::create('programs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 100)->unique();
			$table->integer('department_id');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('programs');
	}
}
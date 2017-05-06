<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstructorsTable extends Migration {

	public function up()
	{
		Schema::create('instructors', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('department_id');
			$table->string('name', 30);
			$table->string('instructor_id', 5);
			$table->integer('user_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('instructors');
	}
}
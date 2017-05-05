<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('code', 20)->unique();
			$table->string('title', 100)->unique();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('credit_hours');
			$table->integer('program_id')->unsigned();
			$table->integer('semester_id')->unsigned();
			$table->integer('prereq_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('courses');
	}
}
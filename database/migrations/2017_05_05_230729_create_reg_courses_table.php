<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegCoursesTable extends Migration {

	public function up()
	{
		Schema::create('reg_courses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('offer_course_id');
			$table->integer('status_id')->unsigned();
			$table->integer('remark_id')->unsigned();
			$table->integer('student_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('reg_courses');
	}
}
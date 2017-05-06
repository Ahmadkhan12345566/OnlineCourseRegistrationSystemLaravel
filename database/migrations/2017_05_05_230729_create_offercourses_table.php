<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffercoursesTable extends Migration {

	public function up()
	{
		Schema::create('offercourses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('semestersessions_id');
			$table->integer('course_id');
			$table->integer('instructor_id');
			$table->integer('program_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('offercourses');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOfferCourseTable extends Migration {

	public function up()
	{
		Schema::create('offer_course', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('semestersessions_id');
			$table->integer('course_id');
			$table->integer('instructor_id');
		});
	}

	public function down()
	{
		Schema::drop('offer_course');
	}
}
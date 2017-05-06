<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('programs', function(Blueprint $table) {
			$table->foreign('department_id')->references('id')->on('departments')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->foreign('program_id')->references('id')->on('programs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('offercourses', function(Blueprint $table) {
			$table->foreign('semestersessions_id')->references('id')->on('semestersessions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('offercourses', function(Blueprint $table) {
			$table->foreign('course_id')->references('id')->on('courses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('offercourses', function(Blueprint $table) {
			$table->foreign('instructor_id')->references('id')->on('instructors')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('instructors', function(Blueprint $table) {
			$table->foreign('department_id')->references('id')->on('departments')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('instructors', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('reg_courses', function(Blueprint $table) {
			$table->foreign('offer_course_id')->references('id')->on('offercourses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('reg_courses', function(Blueprint $table) {
			$table->foreign('status_id')->references('id')->on('statuses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('reg_courses', function(Blueprint $table) {
			$table->foreign('remark_id')->references('id')->on('remarks')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('reg_courses', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('students')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('students', function(Blueprint $table) {
			$table->foreign('program_id')->references('id')->on('programs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('students', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('user_role')->references('id')->on('roles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('programs', function(Blueprint $table) {
			$table->dropForeign('programs_department_id_foreign');
		});
		Schema::table('courses', function(Blueprint $table) {
			$table->dropForeign('courses_program_id_foreign');
		});
		Schema::table('offercourses', function(Blueprint $table) {
			$table->dropForeign('offercourses_semestersessions_id_foreign');
		});
		Schema::table('offercourses', function(Blueprint $table) {
			$table->dropForeign('offercourses_course_id_foreign');
		});
		Schema::table('offercourses', function(Blueprint $table) {
			$table->dropForeign('offercourses_instructor_id_foreign');
		});
		Schema::table('instructors', function(Blueprint $table) {
			$table->dropForeign('instructors_department_id_foreign');
		});
		Schema::table('instructors', function(Blueprint $table) {
			$table->dropForeign('instructors_user_id_foreign');
		});
		Schema::table('reg_courses', function(Blueprint $table) {
			$table->dropForeign('reg_courses_offer_course_id_foreign');
		});
		Schema::table('reg_courses', function(Blueprint $table) {
			$table->dropForeign('reg_courses_status_id_foreign');
		});
		Schema::table('reg_courses', function(Blueprint $table) {
			$table->dropForeign('reg_courses_remark_id_foreign');
		});
		Schema::table('reg_courses', function(Blueprint $table) {
			$table->dropForeign('reg_courses_student_id_foreign');
		});
		Schema::table('students', function(Blueprint $table) {
			$table->dropForeign('students_program_id_foreign');
		});
		Schema::table('students', function(Blueprint $table) {
			$table->dropForeign('students_user_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_user_role_foreign');
		});
	}
}
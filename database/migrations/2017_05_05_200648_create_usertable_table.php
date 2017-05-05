<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsertableTable extends Migration {

	public function up()
	{
		Schema::create('usertable', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('user_id', 20)->unique();
			$table->string('password', 20);
			$table->integer('user_role');
		});
	}

	public function down()
	{
		Schema::drop('usertable');
	}
}
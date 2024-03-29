<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('users', function($table){

			$table->increments('id');
	        $table->string('email')->unique();
	        $table->string('name');
	        $table->string('password');
	        $table->timestamps();
	        $table->string('remember_token')->nullable()->index();

			});
	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('authors');
	}

}

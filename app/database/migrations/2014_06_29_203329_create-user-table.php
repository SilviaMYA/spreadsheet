<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function ($table) {
				$table->increments('id');
				$table->string('firstname', 20);
				$table->string('lastname', 20);
				$table->string('username', 40);
				$table->string('email', 100)->unique();
				$table->string('password', 64);
				$table->string('remember_token', 100)->nullable();
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('users');
	}

}

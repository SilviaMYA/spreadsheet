<?php

use Illuminate\Database\Migrations\Migration;

class AddUserToTransaction extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('transactions', function ($table) {
				$table->string('user_id');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('transactions', function () {
				$table->dropColumn(array('user_id'));
			});
	}

}

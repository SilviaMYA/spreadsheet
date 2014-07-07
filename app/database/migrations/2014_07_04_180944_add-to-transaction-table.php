<?php

use Illuminate\Database\Migrations\Migration;

class AddToTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('transactions', function ($table) {
				$table->string('item');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('transactions', function ($table) {
				$table->dropColumn(array('item'));
			});
	}

}

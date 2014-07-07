<?php

use Illuminate\Database\Migrations\Migration;

class AddDateToTransactions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('transactions', function ($table) {
				$table->string('date_purchased');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('transactions', function ($table) {
				$table->dropColumn('date_purchased');
			});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStaffpayTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('staffpay', function(Blueprint $table)
		{
			$table->foreign('staffid', 'pids')->references('PersonnelId')->on('personnel')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('paycat', 'spc')->references('id')->on('staffpaycategory')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('staffpay', function(Blueprint $table)
		{
			$table->dropForeign('pids');
			$table->dropForeign('spc');
		});
	}

}

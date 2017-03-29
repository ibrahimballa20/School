<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStaffpayhistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('staffpayhistory', function(Blueprint $table)
		{
			$table->foreign('staffid', 'psid')->references('PersonnelId')->on('personnel')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('paycat', 'spci')->references('id')->on('staffpaycategory')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('staffpayhistory', function(Blueprint $table)
		{
			$table->dropForeign('psid');
			$table->dropForeign('spci');
		});
	}

}

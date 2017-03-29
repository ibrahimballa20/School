<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffpayhistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staffpayhistory', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('staffid', 20)->index('staffid');
			$table->integer('paycat')->index('paycat');
			$table->decimal('amount', 15, 3);
			$table->date('dateended');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('staffpayhistory');
	}

}

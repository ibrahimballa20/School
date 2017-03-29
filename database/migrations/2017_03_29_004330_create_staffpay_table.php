<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffpayTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staffpay', function(Blueprint $table)
		{
			$table->string('staffid', 20)->index('staffid');
			$table->integer('paycat')->index('paycat');
			$table->decimal('amount', 15, 3);
			$table->date('dateUpdated');
			$table->primary(['staffid','paycat']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('staffpay');
	}

}

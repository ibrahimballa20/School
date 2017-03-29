<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSalespaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('salespayment', function(Blueprint $table)
		{
			$table->foreign('saleid', 'slsid')->references('saleid')->on('sales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('salespayment', function(Blueprint $table)
		{
			$table->dropForeign('slsid');
		});
	}

}

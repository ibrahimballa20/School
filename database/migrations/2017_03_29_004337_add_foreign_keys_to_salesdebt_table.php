<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSalesdebtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('salesdebt', function(Blueprint $table)
		{
			$table->foreign('saleid', 'smid')->references('saleid')->on('sales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('salesdebt', function(Blueprint $table)
		{
			$table->dropForeign('smid');
		});
	}

}

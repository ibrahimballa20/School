<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStoreinventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('storeinventory', function(Blueprint $table)
		{
			$table->foreign('productid', 'prid')->references('id')->on('product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('storeinventory', function(Blueprint $table)
		{
			$table->dropForeign('prid');
		});
	}

}

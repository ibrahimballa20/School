<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSaleproductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('saleproducts', function(Blueprint $table)
		{
			$table->foreign('productid', 'pctid')->references('id')->on('product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('saleid', 'sides')->references('saleid')->on('sales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('saleproducts', function(Blueprint $table)
		{
			$table->dropForeign('pctid');
			$table->dropForeign('sides');
		});
	}

}

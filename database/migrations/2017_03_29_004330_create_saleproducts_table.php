<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleproductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('saleproducts', function(Blueprint $table)
		{
			$table->integer('saleid')->index('saleid');
			$table->integer('productid')->index('productid');
			$table->integer('quantity');
			$table->decimal('price', 10, 3);
			$table->primary(['saleid','productid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('saleproducts');
	}

}

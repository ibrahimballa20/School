<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stockin', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('product')->index('product');
			$table->integer('quantity');
			$table->string('acceptedby', 250);
			$table->date('date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stockin');
	}

}

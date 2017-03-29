<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalesdebtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salesdebt', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('saleid')->index('saleid');
			$table->decimal('amount', 13, 3);
			$table->date('updatedate');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('salesdebt');
	}

}

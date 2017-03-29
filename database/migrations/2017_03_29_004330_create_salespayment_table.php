<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalespaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salespayment', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('saleid')->index('saleid');
			$table->decimal('amount', 10, 3);
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
		Schema::drop('salespayment');
	}

}

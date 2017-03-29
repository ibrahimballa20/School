<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOtherfeespaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('otherfeespayment', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->integer('feeid')->index('feeid');
			$table->string('studentid', 20)->index('studentid');
			$table->decimal('amount', 10, 3);
			$table->string('collectedby', 200);
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
		Schema::drop('otherfeespayment');
	}

}

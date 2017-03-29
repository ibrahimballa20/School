<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonnelpositionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personnelposition', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('personnelid', 20)->index('personnelid');
			$table->string('position', 250);
			$table->date('startdate');
			$table->date('enddate')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personnelposition');
	}

}

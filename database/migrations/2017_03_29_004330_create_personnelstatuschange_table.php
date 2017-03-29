<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonnelstatuschangeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personnelstatuschange', function(Blueprint $table)
		{
			$table->integer('Id')->primary();
			$table->string('PersonnelId', 20)->index('PersonnelId');
			$table->integer('StatusFrom');
			$table->integer('StatusTo');
			$table->text('ReasonForChange', 65535);
			$table->date('Date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personnelstatuschange');
	}

}

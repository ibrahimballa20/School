<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonnelacademicrecTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personnelacademicrec', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('PersonnelId', 20)->index('PersonnelId');
			$table->string('SchoolName', 200);
			$table->text('Address', 65535);
			$table->string('Qualification', 200);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personnelacademicrec');
	}

}

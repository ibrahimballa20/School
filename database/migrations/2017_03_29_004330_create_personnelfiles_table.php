<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonnelfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personnelfiles', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('PersonnelId', 20)->index('PersonnelId');
			$table->string('Url', 200);
			$table->string('Filename', 150);
			$table->date('SubmittedOn');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personnelfiles');
	}

}

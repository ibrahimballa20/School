<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonnelsubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personnelsubjects', function(Blueprint $table)
		{
			$table->string('personnelid', 20)->index('personnelid');
			$table->string('subjectid', 15)->index('subjectid');
			$table->integer('classtype')->index('classtype');
			$table->integer('session')->index('session');
			$table->primary(['personnelid','subjectid','classtype','session']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personnelsubjects');
	}

}

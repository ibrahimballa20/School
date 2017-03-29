<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonnelpositionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personnelposition', function(Blueprint $table)
		{
			$table->foreign('personnelid', 'per')->references('PersonnelId')->on('personnel')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('personnelposition', function(Blueprint $table)
		{
			$table->dropForeign('per');
		});
	}

}

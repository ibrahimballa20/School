<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonnelacademicrecTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personnelacademicrec', function(Blueprint $table)
		{
			$table->foreign('PersonnelId', 'personnelacademicrec_ibfk_1')->references('PersonnelId')->on('personnel')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('personnelacademicrec', function(Blueprint $table)
		{
			$table->dropForeign('personnelacademicrec_ibfk_1');
		});
	}

}

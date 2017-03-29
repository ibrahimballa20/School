<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonnelfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personnelfiles', function(Blueprint $table)
		{
			$table->foreign('PersonnelId', 'personnelfiles_ibfk_1')->references('PersonnelId')->on('personnel')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('personnelfiles', function(Blueprint $table)
		{
			$table->dropForeign('personnelfiles_ibfk_1');
		});
	}

}

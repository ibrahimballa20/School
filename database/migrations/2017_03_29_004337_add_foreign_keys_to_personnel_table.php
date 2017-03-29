<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonnelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personnel', function(Blueprint $table)
		{
			$table->foreign('TypeId', 'personnel_ibfk_1')->references('TypeId')->on('personneltype')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Status', 'personnel_ibfk_3')->references('Id')->on('personnelstatus')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('personnel', function(Blueprint $table)
		{
			$table->dropForeign('personnel_ibfk_1');
			$table->dropForeign('personnel_ibfk_3');
		});
	}

}

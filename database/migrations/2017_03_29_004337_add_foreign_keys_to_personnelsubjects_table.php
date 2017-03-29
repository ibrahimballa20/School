<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonnelsubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personnelsubjects', function(Blueprint $table)
		{
			$table->foreign('session', 'acas')->references('SessionId')->on('academicsession')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('classtype', 'ctids')->references('TypeId')->on('classtype')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('personnelid', 'pists')->references('PersonnelId')->on('personnel')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('subjectid', 'ssid')->references('SubjectId')->on('subjects')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('personnelsubjects', function(Blueprint $table)
		{
			$table->dropForeign('acas');
			$table->dropForeign('ctids');
			$table->dropForeign('pists');
			$table->dropForeign('ssid');
		});
	}

}

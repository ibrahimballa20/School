<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExamtypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('examtypes', function(Blueprint $table)
		{
			$table->foreign('ClassTaken', 'examtypes_ibfk_1')->references('TypeId')->on('classtype')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('examtypes', function(Blueprint $table)
		{
			$table->dropForeign('examtypes_ibfk_1');
		});
	}

}

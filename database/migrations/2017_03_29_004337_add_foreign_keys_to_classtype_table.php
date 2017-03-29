<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClasstypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('classtype', function(Blueprint $table)
		{
			$table->foreign('Division', 'classtype_ibfk_1')->references('DivisionId')->on('schooldivision')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('classtype', function(Blueprint $table)
		{
			$table->dropForeign('classtype_ibfk_1');
		});
	}

}

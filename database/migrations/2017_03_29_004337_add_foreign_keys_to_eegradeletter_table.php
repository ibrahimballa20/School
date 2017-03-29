<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEegradeletterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('eegradeletter', function(Blueprint $table)
		{
			$table->foreign('section', 'sect')->references('DivisionId')->on('schooldivision')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('eegradeletter', function(Blueprint $table)
		{
			$table->dropForeign('sect');
		});
	}

}

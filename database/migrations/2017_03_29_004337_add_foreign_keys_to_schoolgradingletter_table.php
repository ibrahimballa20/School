<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSchoolgradingletterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('schoolgradingletter', function(Blueprint $table)
		{
			$table->foreign('Division', 'sdv')->references('DivisionId')->on('schooldivision')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('schoolgradingletter', function(Blueprint $table)
		{
			$table->dropForeign('sdv');
		});
	}

}

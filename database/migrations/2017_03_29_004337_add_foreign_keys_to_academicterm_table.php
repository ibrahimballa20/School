<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAcademictermTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('academicterm', function(Blueprint $table)
		{
			$table->foreign('SessionId', 'academicterm_ibfk_1')->references('SessionId')->on('academicsession')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('academicterm', function(Blueprint $table)
		{
			$table->dropForeign('academicterm_ibfk_1');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSchoolgradingsystemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('schoolgradingsystem', function(Blueprint $table)
		{
			$table->foreign('division', 'sgsd')->references('DivisionId')->on('schooldivision')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('schoolgradingsystem', function(Blueprint $table)
		{
			$table->dropForeign('sgsd');
		});
	}

}

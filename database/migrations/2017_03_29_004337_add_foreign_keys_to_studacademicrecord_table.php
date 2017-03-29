<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudacademicrecordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('studacademicrecord', function(Blueprint $table)
		{
			$table->foreign('StudentId', 'studacademicrecord_ibfk_1')->references('StudentId')->on('student')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('studacademicrecord', function(Blueprint $table)
		{
			$table->dropForeign('studacademicrecord_ibfk_1');
		});
	}

}

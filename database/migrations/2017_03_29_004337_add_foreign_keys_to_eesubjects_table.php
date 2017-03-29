<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEesubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('eesubjects', function(Blueprint $table)
		{
			$table->foreign('Id', 'eesubjects_ibfk_1')->references('Id')->on('studentexternalexam')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('SubjectId', 'eesubjects_ibfk_2')->references('SubjectId')->on('subjects')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('eesubjects', function(Blueprint $table)
		{
			$table->dropForeign('eesubjects_ibfk_1');
			$table->dropForeign('eesubjects_ibfk_2');
		});
	}

}

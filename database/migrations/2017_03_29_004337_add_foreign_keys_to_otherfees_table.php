<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOtherfeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('otherfees', function(Blueprint $table)
		{
			$table->foreign('ClassEligible', 'ce')->references('TypeId')->on('classtype')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Semester', 'sems')->references('TermId')->on('academicterm')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('otherfees', function(Blueprint $table)
		{
			$table->dropForeign('ce');
			$table->dropForeign('sems');
		});
	}

}

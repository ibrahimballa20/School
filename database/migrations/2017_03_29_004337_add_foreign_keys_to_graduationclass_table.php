<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGraduationclassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('graduationclass', function(Blueprint $table)
		{
			$table->foreign('classtype', 'cti')->references('TypeId')->on('classtype')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('section', 'secid')->references('DivisionId')->on('schooldivision')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('graduationclass', function(Blueprint $table)
		{
			$table->dropForeign('cti');
			$table->dropForeign('secid');
		});
	}

}

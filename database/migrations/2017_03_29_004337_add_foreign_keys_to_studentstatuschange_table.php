<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentstatuschangeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('studentstatuschange', function(Blueprint $table)
		{
			$table->foreign('StudentId', 'studentstatuschange_ibfk_1')->references('StudentId')->on('student')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('StatusFrom', 'studentstatuschange_ibfk_2')->references('StatusId')->on('studentstatus')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('StatusTo', 'studentstatuschange_ibfk_3')->references('StatusId')->on('studentstatus')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('studentstatuschange', function(Blueprint $table)
		{
			$table->dropForeign('studentstatuschange_ibfk_1');
			$table->dropForeign('studentstatuschange_ibfk_2');
			$table->dropForeign('studentstatuschange_ibfk_3');
		});
	}

}

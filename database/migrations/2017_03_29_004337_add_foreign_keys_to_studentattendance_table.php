<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentattendanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('studentattendance', function(Blueprint $table)
		{
			$table->foreign('classid', 'csids')->references('ClassId')->on('classes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('studentid', 'studid')->references('StudentId')->on('student')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('semester', 'tids')->references('TermId')->on('academicterm')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('studentattendance', function(Blueprint $table)
		{
			$table->dropForeign('csids');
			$table->dropForeign('studid');
			$table->dropForeign('tids');
		});
	}

}

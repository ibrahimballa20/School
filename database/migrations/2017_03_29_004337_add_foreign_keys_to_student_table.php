<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('student', function(Blueprint $table)
		{
			$table->foreign('JoinClass', 'student_ibfk_1')->references('TypeId')->on('classtype')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Status', 'student_ibfk_2')->references('StatusId')->on('studentstatus')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('student', function(Blueprint $table)
		{
			$table->dropForeign('student_ibfk_1');
			$table->dropForeign('student_ibfk_2');
		});
	}

}

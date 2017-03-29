<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentexternalexamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('studentexternalexam', function(Blueprint $table)
		{
			$table->foreign('StudentId', 'studentexternalexam_ibfk_1')->references('StudentId')->on('student')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ExamType', 'studentexternalexam_ibfk_2')->references('ETypeId')->on('examtypes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('SessionId', 'studentexternalexam_ibfk_3')->references('SessionId')->on('academicsession')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('studentexternalexam', function(Blueprint $table)
		{
			$table->dropForeign('studentexternalexam_ibfk_1');
			$table->dropForeign('studentexternalexam_ibfk_2');
			$table->dropForeign('studentexternalexam_ibfk_3');
		});
	}

}

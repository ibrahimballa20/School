<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentClassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('student_class', function(Blueprint $table)
		{
			$table->foreign('StudentId', 'student_class_ibfk_1')->references('StudentId')->on('student')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ClassId', 'student_class_ibfk_2')->references('ClassId')->on('classes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('SessionId', 'student_class_ibfk_3')->references('SessionId')->on('academicsession')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('student_class', function(Blueprint $table)
		{
			$table->dropForeign('student_class_ibfk_1');
			$table->dropForeign('student_class_ibfk_2');
			$table->dropForeign('student_class_ibfk_3');
		});
	}

}

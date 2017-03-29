<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentexternalexamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentexternalexam', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('StudentId', 20)->index('StudentId');
			$table->string('CandidateNo', 50)->unique('CandidateNo');
			$table->integer('ExamType')->index('EID');
			$table->integer('SessionId')->index('SID');
			$table->integer('NoOfSubjects');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('studentexternalexam');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentClassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_class', function(Blueprint $table)
		{
			$table->string('StudentId', 20)->index('StudentId');
			$table->integer('ClassId')->index('CID');
			$table->integer('SessionId')->index('SID');
			$table->primary(['StudentId','ClassId','SessionId']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student_class');
	}

}

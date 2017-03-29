<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentattendanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentattendance', function(Blueprint $table)
		{
			$table->integer('semester')->index('semester');
			$table->string('studentid', 20)->index('studentid');
			$table->date('date');
			$table->integer('classid')->index('classid');
			$table->boolean('status');
			$table->primary(['studentid','date']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('studentattendance');
	}

}

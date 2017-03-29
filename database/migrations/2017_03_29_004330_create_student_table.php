<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student', function(Blueprint $table)
		{
			$table->string('StudentId', 20)->primary();
			$table->string('Firstname', 150);
			$table->string('Lastname', 150);
			$table->string('OtherNames', 150);
			$table->text('Address', 65535);
			$table->string('Email', 150);
			$table->string('Phonenumber', 16);
			$table->date('DOB');
			$table->char('Gender', 1);
			$table->string('StateOfOrigin', 150);
			$table->integer('JoinClass')->index('JoinClass');
			$table->date('JoinDate');
			$table->integer('Status')->index('Status');
			$table->string('Picture', 200)->default('None');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentfiles', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('StudentId', 20)->index('StudentId');
			$table->string('Filename', 100);
			$table->string('Url', 200);
			$table->date('SubmittedOn');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('studentfiles');
	}

}

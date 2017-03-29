<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudacademicrecordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studacademicrecord', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('StudentId', 20)->index('StudentId');
			$table->string('SchoolName', 200);
			$table->text('Address', 65535);
			$table->string('Qualification', 200);
			$table->date('StartYear');
			$table->date('EndYear');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('studacademicrecord');
	}

}

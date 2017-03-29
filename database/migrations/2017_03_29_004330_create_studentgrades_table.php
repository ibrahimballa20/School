<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentgradesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentgrades', function(Blueprint $table)
		{
			$table->string('studentid', 20)->index('studentid');
			$table->integer('classid')->index('classid');
			$table->integer('semester')->index('semester');
			$table->integer('gradeid')->index('gradeid');
			$table->string('subjectid', 15)->index('subjectid');
			$table->integer('grade');
			$table->primary(['studentid','semester','gradeid','subjectid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('studentgrades');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamtypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('examtypes', function(Blueprint $table)
		{
			$table->integer('ETypeId', true);
			$table->string('ETypeName', 150);
			$table->string('Fullname', 200);
			$table->string('CenterNo', 150);
			$table->integer('ClassTaken')->index('ClassTaken');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('examtypes');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTuitionfeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tuitionfee', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('Name', 200);
			$table->integer('Semester')->index('Semester');
			$table->decimal('Amount', 15, 3);
			$table->integer('Section')->index('Section');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tuitionfee');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcademictermTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('academicterm', function(Blueprint $table)
		{
			$table->integer('TermId', true);
			$table->string('TermName', 100);
			$table->integer('SessionId')->index('SessionId');
			$table->date('StartDate');
			$table->date('EndDate');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('academicterm');
	}

}

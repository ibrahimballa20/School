<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcademicsessionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('academicsession', function(Blueprint $table)
		{
			$table->integer('SessionId', true);
			$table->date('StartYear');
			$table->date('EndYear');
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
		Schema::drop('academicsession');
	}

}

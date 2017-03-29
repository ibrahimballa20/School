<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolgradingsystemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schoolgradingsystem', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('gradename', 100);
			$table->integer('total');
			$table->integer('division')->index('division');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('schoolgradingsystem');
	}

}

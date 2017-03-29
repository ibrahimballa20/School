<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEegradeletterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eegradeletter', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('grade', 5);
			$table->string('remark', 50);
			$table->integer('section')->index('section');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('eegradeletter');
	}

}

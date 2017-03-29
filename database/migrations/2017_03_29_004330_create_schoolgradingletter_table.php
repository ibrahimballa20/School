<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolgradingletterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schoolgradingletter', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->integer('startrange');
			$table->integer('endrange');
			$table->string('gradeLetter', 20);
			$table->integer('Division')->index('Division');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('schoolgradingletter');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOtherfeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('otherfees', function(Blueprint $table)
		{
			$table->integer('FeeId', true);
			$table->string('Name', 200);
			$table->decimal('Amount', 10);
			$table->integer('Semester')->index('Semester');
			$table->integer('ClassEligible')->index('ClassEligible');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('otherfees');
	}

}

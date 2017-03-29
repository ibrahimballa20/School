<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentoffenceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentoffence', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('StudentId', 20)->index('StudentId');
			$table->integer('Offence')->index('offe');
			$table->integer('Penalty')->index('PEN');
			$table->date('Date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('studentoffence');
	}

}

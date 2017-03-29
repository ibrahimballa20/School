<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentstatuschangeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentstatuschange', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('StudentId', 20)->index('StudentId');
			$table->integer('StatusFrom')->index('SF');
			$table->integer('StatusTo')->index('ST');
			$table->text('ReasonForChange', 65535);
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
		Schema::drop('studentstatuschange');
	}

}

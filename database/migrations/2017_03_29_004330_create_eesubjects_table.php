<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEesubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eesubjects', function(Blueprint $table)
		{
			$table->integer('Id')->index('IIID');
			$table->string('SubjectId', 15)->index('SubjectId');
			$table->string('Grade', 3);
			$table->primary(['Id','SubjectId']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('eesubjects');
	}

}

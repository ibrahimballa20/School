<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGraduationclassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('graduationclass', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->integer('classtype')->index('classtype');
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
		Schema::drop('graduationclass');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOtherfeespaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('otherfeespayment', function(Blueprint $table)
		{
			$table->foreign('feeid', 'feid')->references('FeeId')->on('otherfees')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('studentid', 'sidt')->references('StudentId')->on('student')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('otherfeespayment', function(Blueprint $table)
		{
			$table->dropForeign('feid');
			$table->dropForeign('sidt');
		});
	}

}

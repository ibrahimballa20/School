<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDebtorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('debtors', function(Blueprint $table)
		{
			$table->foreign('studentid', 'sids')->references('StudentId')->on('student')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tuitionid', 'tit')->references('Id')->on('tuitionfee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('debtors', function(Blueprint $table)
		{
			$table->dropForeign('sids');
			$table->dropForeign('tit');
		});
	}

}

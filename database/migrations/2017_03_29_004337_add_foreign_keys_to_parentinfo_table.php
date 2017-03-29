<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParentinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('parentinfo', function(Blueprint $table)
		{
			$table->foreign('StudentId', 'parentinfo_ibfk_1')->references('StudentId')->on('student')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('parentinfo', function(Blueprint $table)
		{
			$table->dropForeign('parentinfo_ibfk_1');
		});
	}

}

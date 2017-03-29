<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUseraccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('useraccount', function(Blueprint $table)
		{
			$table->foreign('employeeid', 'pid')->references('PersonnelId')->on('personnel')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('role', 'rlid')->references('roleid')->on('role')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('useraccount', function(Blueprint $table)
		{
			$table->dropForeign('pid');
			$table->dropForeign('rlid');
		});
	}

}

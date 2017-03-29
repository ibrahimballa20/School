<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRolepermissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rolepermission', function(Blueprint $table)
		{
			$table->foreign('permission', 'poid')->references('id')->on('permission')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('roleid', 'roid')->references('roleid')->on('role')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rolepermission', function(Blueprint $table)
		{
			$table->dropForeign('poid');
			$table->dropForeign('roid');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolepermissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rolepermission', function(Blueprint $table)
		{
			$table->integer('roleid')->index('roleid');
			$table->integer('permission')->index('permission');
			$table->primary(['roleid','permission']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rolepermission');
	}

}

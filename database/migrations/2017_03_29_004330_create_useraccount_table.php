<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUseraccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('useraccount', function(Blueprint $table)
		{
			$table->string('username', 200)->primary();
			$table->string('password', 200);
			$table->string('employeeid', 15)->index('employeeid');
			$table->string('salt', 250);
			$table->integer('role')->index('role');
			$table->date('created');
			$table->date('lastaccess');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('useraccount');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDebtorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('debtors', function(Blueprint $table)
		{
			$table->string('studentid', 20)->index('studentid');
			$table->integer('tuitionid')->index('tuitionid');
			$table->decimal('amountowed', 10, 3);
			$table->primary(['studentid','tuitionid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('debtors');
	}

}

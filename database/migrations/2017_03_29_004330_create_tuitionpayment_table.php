<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTuitionpaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tuitionpayment', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('studentid', 20)->index('studentid');
			$table->integer('tuitionid')->index('tuitionid');
			$table->decimal('amount', 10, 3);
			$table->string('collectedby', 150);
			$table->string('bank', 200);
			$table->string('tellerno', 200);
			$table->date('date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tuitionpayment');
	}

}

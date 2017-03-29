<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTuitionpaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tuitionpayment', function(Blueprint $table)
		{
			$table->foreign('studentid', 'stdi')->references('StudentId')->on('student')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tuitionid', 'tid')->references('Id')->on('tuitionfee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tuitionpayment', function(Blueprint $table)
		{
			$table->dropForeign('stdi');
			$table->dropForeign('tid');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('studentfiles', function(Blueprint $table)
		{
			$table->foreign('StudentId', 'studentfiles_ibfk_1')->references('StudentId')->on('student')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('studentfiles', function(Blueprint $table)
		{
			$table->dropForeign('studentfiles_ibfk_1');
		});
	}

}

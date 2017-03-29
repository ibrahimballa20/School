<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentoffenceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('studentoffence', function(Blueprint $table)
		{
			$table->foreign('StudentId', 'studentoffence_ibfk_1')->references('StudentId')->on('student')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Offence', 'studentoffence_ibfk_2')->references('TypeId')->on('offencetype')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Penalty', 'studentoffence_ibfk_3')->references('id')->on('penalty')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('studentoffence', function(Blueprint $table)
		{
			$table->dropForeign('studentoffence_ibfk_1');
			$table->dropForeign('studentoffence_ibfk_2');
			$table->dropForeign('studentoffence_ibfk_3');
		});
	}

}

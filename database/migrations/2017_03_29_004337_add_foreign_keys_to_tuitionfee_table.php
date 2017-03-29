<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTuitionfeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tuitionfee', function(Blueprint $table)
		{
			$table->foreign('Section', 'sec')->references('DivisionId')->on('schooldivision')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Semester', 'sem')->references('TermId')->on('academicterm')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tuitionfee', function(Blueprint $table)
		{
			$table->dropForeign('sec');
			$table->dropForeign('sem');
		});
	}

}

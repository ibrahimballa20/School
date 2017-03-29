<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentgradesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('studentgrades', function(Blueprint $table)
		{
			$table->foreign('classid', 'cids')->references('ClassId')->on('classes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('gradeid', 'gid')->references('Id')->on('schoolgradingsystem')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('semester', 'sesm')->references('TermId')->on('academicterm')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('studentid', 'sgid')->references('StudentId')->on('student')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('subjectid', 'subs')->references('SubjectId')->on('subjects')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('studentgrades', function(Blueprint $table)
		{
			$table->dropForeign('cids');
			$table->dropForeign('gid');
			$table->dropForeign('sesm');
			$table->dropForeign('sgid');
			$table->dropForeign('subs');
		});
	}

}

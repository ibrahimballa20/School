<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonnelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personnel', function(Blueprint $table)
		{
			$table->string('PersonnelId', 20)->primary();
			$table->string('Title', 15);
			$table->string('Firstname', 150);
			$table->string('Lastname', 150);
			$table->string('Othernames', 150);
			$table->char('Gender', 1);
			$table->text('Address', 65535);
			$table->string('MaritalStatus', 150);
			$table->string('Email', 200);
			$table->date('DOB');
			$table->string('TypeId', 15)->index('TypeId');
			$table->date('EmploymentDate');
			$table->integer('Status')->index('Status');
			$table->string('Picture', 200)->default('None');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personnel');
	}

}

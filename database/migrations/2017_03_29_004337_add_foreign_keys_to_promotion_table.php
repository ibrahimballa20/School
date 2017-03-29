<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPromotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('promotion', function(Blueprint $table)
		{
			$table->foreign('classid', 'clst')->references('TypeId')->on('classtype')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('nextclassid', 'stcs')->references('TypeId')->on('classtype')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('promotion', function(Blueprint $table)
		{
			$table->dropForeign('clst');
			$table->dropForeign('stcs');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFfAirportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ff_airports', function(Blueprint $table)
		{
			$table->foreign('countrie_id', 'fk_ff_airports_ff_countries')->references('id')->on('ff_countries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ff_airports', function(Blueprint $table)
		{
			$table->dropForeign('fk_ff_airports_ff_countries');
		});
	}

}

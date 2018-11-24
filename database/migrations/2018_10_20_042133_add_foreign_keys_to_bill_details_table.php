<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBillDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bill_details', function(Blueprint $table)
		{
			$table->foreign('bill_id', 'bill_details_ibfk_1')->references('id')->on('bills')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bill_details', function(Blueprint $table)
		{
			$table->dropForeign('bill_details_ibfk_1');
		});
	}

}

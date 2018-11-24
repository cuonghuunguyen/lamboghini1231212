<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bill_details', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('bill_id')->nullable()->index('bill_id');
			$table->integer('size_id')->nullable();
			$table->integer('quantity')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bill_details');
	}

}

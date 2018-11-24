<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bills', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('customer_first_name')->nullable();
			$table->string('customer_last_name')->nullable();
			$table->string('customer_phone')->nullable();
			$table->string('customer_email')->nullable();
			$table->string('customer_company')->nullable();
			$table->string('customer_address')->nullable();
			$table->string('customer_receiving_address')->nullable();
			$table->boolean('paid')->nullable();
			$table->boolean('delivered')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bills');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLever1MenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lever1_menus', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('name')->nullable();
			$table->boolean('is_shown')->nullable();
			$table->boolean('is_info_page')->nullable();
			$table->integer('page_id')->nullable()->index('page_id');
			$table->integer('category_id')->nullable()->index('category_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lever1_menus');
	}

}

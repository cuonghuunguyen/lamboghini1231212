<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLever1MenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lever1_menus', function(Blueprint $table)
		{
			$table->foreign('page_id', 'lever1_menus_ibfk_1')->references('id')->on('pages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('category_id', 'lever1_menus_ibfk_2')->references('id')->on('categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lever1_menus', function(Blueprint $table)
		{
			$table->dropForeign('lever1_menus_ibfk_1');
			$table->dropForeign('lever1_menus_ibfk_2');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLever3MenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lever3_menus', function(Blueprint $table)
		{
			$table->foreign('page_id', 'lever3_menus_ibfk_1')->references('id')->on('pages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('lever2_menu_id', 'lever3_menus_ibfk_2')->references('id')->on('lever2_menus')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lever3_menus', function(Blueprint $table)
		{
			$table->dropForeign('lever3_menus_ibfk_1');
			$table->dropForeign('lever3_menus_ibfk_2');
		});
	}

}

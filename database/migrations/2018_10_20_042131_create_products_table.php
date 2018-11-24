<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('name')->nullable();
			$table->text('description', 65535)->nullable();
			$table->boolean('instock')->nullable();
			$table->integer('size_id')->nullable()->index('size_id');
			$table->integer('category_type_id')->nullable()->index('category_type_id');
			$table->string('guarantee')->nullable();
			$table->integer('brand_id')->nullable()->index('brand_id');
			$table->string('benefits')->nullable();
			$table->string('specifications')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
			$table->increments('id_prod');
			$table->string('sku');
			$table->string('name_prod');
			$table->string('price_prod');
			$table->string('des_prod');
			$table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('categories');
			$table->string('path_file');

            $table->timestamps();
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

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commandes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('id_prod')->unsigned();;
            $table->foreign('id_prod')->references('id_prod')->on('products');

            $table->integer('pros_id')->unsigned();;
            $table->foreign('pros_id')->references('pros_id')->on('prospects');


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
		Schema::drop('commandes');
	}

}

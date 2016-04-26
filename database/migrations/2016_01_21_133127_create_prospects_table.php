<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prospects', function(Blueprint $table)
		{
			$table->increments('pros_id');
			$table->string('name_pros');
			$table->string('email');
			$table->date('date');

			$table->string('ref1');
			$table->string('ref2');
			$table->string('ref3');
			$table->string('ref4');
			$table->string('ref5');

			$table->string('pays');
			$table->string('ville');
			$table->string('emploi');
			$table->integer('age');
			$table->integer('code_postal');
			$table->string('numero');
			$table->boolean('isWinner');


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
		Schema::drop('prospects');
	}

}

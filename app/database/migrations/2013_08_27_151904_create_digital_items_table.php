<?php

use Illuminate\Database\Migrations\Migration;

class CreateDigitalItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('digital_items', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('format');
			$table->integer('size');
			$table->decimal('price', 8, 2);
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
		Schema::drop('digital_items');
	}

}
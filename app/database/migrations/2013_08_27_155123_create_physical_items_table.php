<?php

use Illuminate\Database\Migrations\Migration;

class CreatePhysicalItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('physical_items', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('stock');
			$table->decimal('weight', 3, 2);
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
		Schema::drop('physical_items');
	}

}
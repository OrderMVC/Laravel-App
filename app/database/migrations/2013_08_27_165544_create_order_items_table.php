<?php

use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_items', function($table)
		{
			$table->increments('id');
			$table->integer('order_id');
			$table->integer('item_id');
			$table->decimal('price', 8, 2);
			$table->integer('amount');
			$table->string('item_type');
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
		Schema::drop('order_items');
	}

}
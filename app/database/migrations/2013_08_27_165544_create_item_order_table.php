<?php

use Illuminate\Database\Migrations\Migration;

class CreateItemOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_order', function($table)
		{
			$table->integer('order_id');
			$table->integer('item_id');
			$table->string('item_type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('item_order');
	}

}
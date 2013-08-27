<?php

class PhysicalItemsSeeder extends Seeder {

    public function run()
    {
        DB::table('physical_items')->truncate();

        $physical_items = array(
        	array(
        		'name'		=> 'SmackBook Noob',
				'weight'	=> 3.8,
				'stock'		=> 119,
				'price'		=> 1999.95,
        	),
        	array(
        		'name'		=> 'SmackBook Oxygen',
				'weight'	=> 1.9,
				'stock'		=> 94,
				'price'		=> 999.95,
        	),
        );

        foreach ($physical_items as $item) {
        	PhysicalItem::create($item);
        }
    }

}
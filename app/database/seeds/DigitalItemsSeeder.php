<?php

class DigitalItemsSeeder extends Seeder {

    public function run()
    {
        DB::table('digital_items')->truncate();

        $digital_items = array(
        	array(
        		'name'		=> 'Coaser Boss',
				'size'		=> 1028,
				'format'	=> 'dmg',
				'price'		=> 19.95,
        	),
        	array(
        		'name'		=> 'Life Crasher',
				'size'		=> 4096,
				'format'	=> 'exe',
				'price'		=> 49.99,
        	),
        );

        foreach ($digital_items as $item) {
        	DigitalItem::create($item);
        }
    }

}
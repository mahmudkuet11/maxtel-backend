<?php

class ItemsSeeder extends Seeder{

	public function run(){

		DB::table('items')->insert(array(
				'name'	=>	'symphony b30',
				'qty'	=>	10,
				'p_price'	=>	2500,
				's_price'	=>	3000
			));

		DB::table('items')->insert(array(
				'name'	=>	'symphony b40',
				'qty'	=>	20,
				'p_price'	=>	3500,
				's_price'	=>	4000
			));

	}

}
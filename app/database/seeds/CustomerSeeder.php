<?php

class CustomerSeeder extends Seeder{
	public function run(){
		DB::table('customers')->insert(array(
				'name'	=>	'customer 1',
				'phone'	=>	'01682103738',
				'address'	=>	'kuet',
				'balance'	=>	200.00
			));
		DB::table('customers')->insert(array(
				'name'	=>	'customer 2',
				'phone'	=>	'01682103739',
				'address'	=>	'kuet2',
				'balance'	=>	300.00
			));
	}
}
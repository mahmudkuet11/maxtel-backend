<?php

class SupplierSeeder extends Seeder{
	public function run(){
		DB::table('suppliers')->insert(array(
				'name'	=>	'supplier 1',
				'phone'	=>	'01682103738',
				'address'	=>	'kuet',
				'balance'	=>	200.00
			));
		DB::table('suppliers')->insert(array(
				'name'	=>	'supplier 2',
				'phone'	=>	'01682103739',
				'address'	=>	'kuet2',
				'balance'	=>	200.00
			));
	}
}
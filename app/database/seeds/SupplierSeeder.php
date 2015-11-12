<?php

class SupplierSeeder extends Seeder{
	public function run(){
		DB::table('suppliers')->insert(array(
				'name'	=>	'supplier 1',
				'phone'	=>	'01682103738',
				'address'	=>	'kuet'
			));
		DB::table('suppliers')->insert(array(
				'name'	=>	'supplier 2',
				'phone'	=>	'01682103739',
				'address'	=>	'kuet2'
			));
	}
}
<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('SupplierSeeder');
		$this->call('CustomerSeeder');
		$this->call('ItemsSeeder');
	}

}

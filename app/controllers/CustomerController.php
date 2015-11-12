<?php

class CustomerController extends BaseController{

	public function postAddCustomer(){
		$name = Input::get('name');
		$phone = Input::get('phone');
		$address = Input::get('address');

		DB::table('customers')->insert(array(
				'name'	=>	$name,
				'phone'	=>	$phone,
				'address'	=>	$address,
				'balance'	=>	0
			));
		return 'ok';
	}

	public function getAllCustomer(){
		$res = DB::table('customers')->get();
		return json_encode($res);
	}

	public function postEditCustomer(){
		$id = Input::get('id');
		$name = Input::get('name');
		$phone = Input::get('phone');
		$address = Input::get('address');

		DB::table('customers')->where('id', $id)->update(array(
				'name'	=>	$name,
				'phone'	=>	$phone,
				'address'	=>	$address
			));
		return 'ok';
	}

	public function postDeleteCustomer(){
		$id = Input::get('id');
		DB::table('customers')->where('id', $id)->delete();
		return 'ok';
	}

}
<?php

class SupplierController extends BaseController{

	public function postAddSupplier(){
		$name = Input::get('name');
		$phone = Input::get('phone');
		$address = Input::get('address');

		DB::table('suppliers')->insert(array(
				'name'	=>	$name,
				'phone'	=>	$phone,
				'address'	=>	$address
			));
		return 'ok';
	}

	public function getAllSupplier(){
		$res = DB::table('suppliers')->get();
		return json_encode($res);
	}

	public function postEditSupplier(){
		$id = Input::get('id');
		$name = Input::get('name');
		$phone = Input::get('phone');
		$address = Input::get('address');

		DB::table('suppliers')->where('id', $id)->update(array(
				'name'	=>	$name,
				'phone'	=>	$phone,
				'address'	=>	$address
			));
		return 'ok';
	}

	public function postDeleteSupplier(){
		$id = Input::get('id');
		DB::table('suppliers')->where('id', $id)->delete();
		return 'ok';
	}
}
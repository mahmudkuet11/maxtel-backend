<?php

class ItemController extends BaseController{

	public function postAddItem(){
		$name = Input::get('name');
		$qty = 0;
		$p_price = Input::get('p_price');
		$s_price = Input::get('s_price');

		DB::table('items')->insert(array(
				'name'	=>	$name,
				'qty'	=>	$qty,
				'p_price'	=>	$p_price,
				's_price'	=>	$s_price
			));
		return 'ok';
	}

	public function postEditItem(){
		$id = Input::get('id');
		$name = Input::get('name');
		$p_price = Input::get('p_price');
		$s_price = Input::get('s_price');

		DB::table('items')->where('id', $id)->update(array(
				'name'	=>	$name,
				'p_price'	=>	$p_price,
				's_price'	=>	$s_price
			));
		return 'ok';
	}

	public function postDeleteItem(){
		$id = Input::get('id');

		DB::table('items')->where('id', $id)->delete();
		return 'ok';
	}

	public function getAllItems(){
		$res = DB::table('items')->get();
		return json_encode($res);
	}

}
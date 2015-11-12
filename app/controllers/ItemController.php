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

	public function postAddStock(){
		$order_no = Input::get('order_no');
		$supplier_id = Input::get('supplier_id');
		$date = Input::get('date');
		$items_info = Input::get('items_info');
		$total_qty = Input::get('total_qty');
		$opening_balance = Input::get('opening_balance');
		$total_value = Input::get('total_value');
		$total_rcv = Input::get('total_rcv');
		$closing_balance = Input::get('closing_balance');
		$note = Input::get('note');

		DB::beginTransaction();

		try{
			DB::table('purchase_vouchers')->insert(array(
					'order_no'	=>	$order_no,
					'supplier_id'	=>	$supplier_id,
					'date'	=>	$date,
					'items_info'	=>	$items_info,
					'total_qty'	=>	$total_qty,
					'opening_balance'	=>	$opening_balance,
					'total_value'	=>	$total_value,
					'total_rcv'	=>	$total_rcv,
					'closing_balance'	=>	$closing_balance,
					'note'	=>	$note,
				));

			$items = json_decode($items_info);
			foreach ($items as $i) {
				$qty = DB::table('items')->where('id', $i->item_id)->first()->qty + $i->qty;
				DB::table('items')->where('id', $i->item_id)->update(array(
						'qty'	=>	$qty
					));
			}

			DB::commit();
			return 'ok';
		}catch(\Exception $e){
			DB::rollback();
			return $e;
		}


			
	}

}
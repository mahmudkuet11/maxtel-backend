<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseVouchersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_vouchers', function($t){
			$t->bigIncrements('id');
			$t->string('order_no');
			$t->integer('supplier_id');
			$t->date('date');
			$t->integer('total_qty');
			$t->decimal('opening_balance',15,2);
			$t->decimal('total_value',15,2);
			$t->decimal('total_rcv',15,2);
			$t->decimal('closing_balance',15,2);
			$t->text('note');
			$t->text('items_info');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('purchase_vouchers');
	}

}

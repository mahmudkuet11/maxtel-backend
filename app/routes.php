<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::post('supplier/add', array(
		'as'	=>	'postAddSupplier',
		'uses'	=>	'SupplierController@postAddSupplier'
	));

Route::get('supplier/all', array(
		'as'	=>	'getAllSupplier',
		'uses'	=>	'SupplierController@getAllSupplier'
	));

Route::post('supplier/edit', array(
		'as'	=>	'postEditSupplier',
		'uses'	=>	'SupplierController@postEditSupplier'
	));

Route::post('supplier/delete', array(
		'as'	=>	'postDeleteSupplier',
		'uses'	=>	'SupplierController@postDeleteSupplier'
	));

Route::post('customer/add', array(
		'as'	=>	'postAddCustomer',
		'uses'	=>	'CustomerController@postAddCustomer'
	));

Route::get('customer/all', array(
		'as'	=>	'getAllSupplier',
		'uses'	=>	'CustomerController@getAllCustomer'
	));

Route::post('customer/edit', array(
		'as'	=>	'postEditSupplier',
		'uses'	=>	'CustomerController@postEditCustomer'
	));

Route::post('customer/delete', array(
		'as'	=>	'postDeleteSupplier',
		'uses'	=>	'CustomerController@postDeleteCustomer'
	));
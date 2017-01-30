<?php
Route::group(['middleware' => ['web','auth','admin']], function()
{ 
Route::put('/products/{id}', 'PenjualanController@update');
Route::get('admin', 'PenjualanController@home');
Route::post('/pby','PenjualanController@nproduct');
Route::get('/products/{id}/delete', 'PenjualanController@delete');
Route::get('/newcustomer', 'PenjualanController@shown');
Route::get('/newproduct','PenjualanController@showp');
Route::get('orders', 'PenjualanController@index');
Route::get('orders/{id}/delete', 'PenjualanController@destroyorder');
Route::get('/customer/transaksi/{id}', 'PenjualanController@detail');
Route::get('customers', 'PenjualanController@customer');
Route::get('customer/{id}', 'PenjualanController@show');
Route::post('/nby','PenjualanController@ncustomer');
Route::get('/products/{id}/edit', 'PenjualanController@edit');
Route::get('payment/{id}','PenjualanController@showpayment');
Route::post('/payment/{id}/pro', 'PenjualanController@propayment');
});


Route::group(['middleware' => ['web','auth']], function()
{
Route::get('products', 'PenjualanController@product');
Route::get('products/{id}/buy', 'PenjualanController@buy');

Route::get('/result', 'FindController@find');
Route::post('/by', 'PenjualanController@buystore');
Route::get('product/cart/{id}', function($id){
	 $product = \App\product::find($id);
	 $id = $product->id_product;
	 $name = $product->nama;
	 $qty = 1;
	 $price = $product->harga;

	 $data = array('id'         => $id,
	 	           'name'       => $name,
	 	           'qty'        => $qty,
	 	           'price'      => $price,
	 	           'options'    => array('size' => 'large'));
	 Cart::add($data);

	 $cart_content = Cart::content(1);
	 return view('penjualan/productcart')->with('cart_content', $cart_content); 	           

});

Route::get('cart/delete/{id}', function($id){
	Cart::remove($id);
	return redirect('cart');
});
Route::get('cart', function(){
	$cart_content = Cart::content(1);
	return view('penjualan/productcart')->with('cart_content', $cart_content);
});
Route::get('checkout', 'PenjualanController@checkout');
Route::get('/contactus','PenjualanController@contactus');
Route::get('thanks','PenjualanController@thanks');
Route::get('/filter','FindController@saring');



});




//HERE !!!

	  












Auth::routes();
Route::group(['middleware'=> 'web'], function(){
	Route::auth();
});

Route::group(['middleware' => ['web','auth']], function()
{    
	Route::get('/home', 'HomeController@index');
	Route::get('/',function(){
		if (Auth::user()->admin == 1){
			return view('home');
		}else{
			return view('/');
		}
	});
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('oops', 'HomeController@oops');

Auth::routes();

Route::get('/home', 'HomeController@index');


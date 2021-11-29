<?php

//// ---- Store ---- ////
Route::get('/home', 'StoreController@shop');
Route::get('/', 'StoreController@index');
Route::get('/shop', 'StoreController@home');
Route::get('/shop/{category}', 'StoreController@shopByCategory');
Route::get('/product/detail/{id}', 'StoreController@detail');
Route::post('/email', 'StoreController@addEmail');
Route::post('/search', 'StoreController@search');
Route::get('/cart', 'StoreController@cart');
Route::get('/checkout', 'StoreController@checkout');
Route::post('/checkout/save', 'StoreController@saveCheckout');
Route::get('/checkout/getdata/{id}', 'StoreController@getAddress');
Route::get('/checkout/getdatakecamatan/{id}', 'StoreController@getAddressKecamatan');

// Transaction
Route::get('/checkout/get-invoice', 'StoreController@checkInvoiceNumber');
Route::post('/checkout/save-transaction', 'StoreController@saveTransaction');
Route::post('/checkout/save-address', 'StoreController@saveAddress');
Route::post('/checkout/save-detail', 'StoreController@saveDetail');
Route::get('/transaksi/checkout', 'StoreController@basket');
Route::get('/checkout/finish/{id}', 'StoreController@finishCheckout');

// Blog
Route::get('/blog', 'BlogController@index');
Route::get('/blog/single-blog', 'BlogController@singleBlog');

// Konfirmasi
Route::get('/konfirmasi-pembayaran', 'TransactionController@index');
Route::get('/konfirmasi-pembayaran/status', 'TransactionController@status');
Route::get('/tracking', 'StoreController@tracking');

// Undangan
Route::get('/undangan', 'StoreController@invitation');
Route::get('/undangan/detail', 'StoreController@detailInvitation');

// Cara Belanja
Route::get('/cara-belanja', 'StoreController@caraBelanja');



//// ---- Store ---- ////


//// Admin

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/auth/login', 'Auth\LoginController@index')->name('login');
Route::post('/auth/dologin', 'Auth\LoginController@dologin')->name('dologin');
Route::get('/auth/logout', 'Auth\LoginController@logout')->name('logout');


//Route::get('/admin/login', 'AdminController@login');
?>


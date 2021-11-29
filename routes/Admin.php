<?php

Route::middleware(['logged'])->group(function () {

    Route::get('/dashboard', 'AdminController@index');


    //-- Master --
    //Barang
    Route::get('/master/barang', 'BarangController@index');
    Route::get('/master/barang/add', 'BarangController@addBarang');
    Route::post('/master/barang/save', 'BarangController@saveBarang');
    Route::get('/master/barang/get', 'BarangController@getBarang');
    Route::get('/master/barang/delete/{id}', 'BarangController@doDelete');
    Route::get('/master/barang/edit/{id}', 'BarangController@editBarang');
    Route::post('/master/barang/update', 'BarangController@updateBarang');
    Route::get('/master/barang/detail/{id}', 'BarangController@detailBarangById');

    //Kategori
    Route::get('/master/kategori', 'KategoriController@index');
    Route::post('/master/kategori/save', 'KategoriController@doAddKategori');
    Route::get('/master/kategori/getKategori', 'KategoriController@getKategori');
    Route::get('/master/kategori/delete/{id}', 'KategoriController@doDelete');
    Route::get('/master/kategori/edit/{id}', 'KategoriController@getKategoriById');
    Route::post('/master/kategori/update', 'KategoriController@update');

    //Gambar Barang
    Route::get('/master/gambar', 'GambarController@index');
    Route::get('/master/gambar/get', 'GambarController@getBarang');
    Route::get('/master/gambar/view/{id}', 'GambarController@viewGambar');
    Route::post('/master/gambar/upload/{id}/{tag}', 'GambarController@uploadGambar');
    Route::get('/master/gambar/view/get/{id}', 'GambarController@getGambarById');
    Route::get('/master/gambar/delete/{id}/{tag}/{name}', 'GambarController@deleteGambar');

    //Size Barang
    Route::get('/master/size', 'SizeController@index');
    Route::get('/master/size/get', 'SizeController@getBarang');
    Route::get('/master/size/add/{id}', 'SizeController@addSize');
    Route::post('/master/size/save/{id}', 'SizeController@saveSize');
    Route::get('/master/size/view/{id}', 'SizeController@viewSize');
    Route::get('/master/size/get/{id}', 'SizeController@getSize');
    Route::post('/master/size/update/{id}', 'SizeController@updateSize');
    Route::get('/master/size/getOne/{id}', 'SizeController@getSizeOne');
    Route::post('/master/size/updateOne/{id}', 'SizeController@updateSizeOne');
});


?>

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'theloaitin'],function(){
		
		Route::get('danhsach','TheLoaiTinController@getDanhSach');

		Route::get('sua/{id}','TheLoaiTinController@getSua');
		Route::post('sua/{id}','TheLoaiTinController@postSua');

		Route::get('them','TheLoaiTinController@getThem');
		Route::post('them','TheLoaiTinController@postThem');

		Route::get('xoa/{id}','TheLoaiTinController@getXoa');

	});
	Route::group(['prefix'=>'loaitin'],function(){
		
		Route::get('danhsach','LoaiTinController@getDanhSach');

		Route::get('sua/{id}','LoaiTinController@getSua');
		Route::post('sua/{id}','LoaiTinController@postSua');

		Route::get('them','LoaiTinController@getThem');
		Route::post('them','LoaiTinController@postThem');

		Route::get('xoa/{id}','LoaiTinController@getXoa');

	});
});

Route::get('trangchu',function(){
	return view('layout.index');
});




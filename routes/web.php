<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');
});          
Route::group(['prefix'=>'Phim'],function(){
    Route::get('','PhimController@index')->name('admin.phim.index');

    Route::get('create','PhimController@create')->name('admin.phim.create');
    Route::post('create','PhimController@store');

    Route::get('update/{id}','PhimController@edit')->name('admin.phim.update');
    Route::post('update/{id}','PhimController@update');

    Route::get('delete/{id}','PhimController@delete')->name('admin.phim.delete');
    

}); 
Route::group(['prefix'=>'ThanhVien'],function(){
    Route::get('','ThanhVienController@index')->name('admin.thanhvien.index');


    Route::get('create','ThanhVienController@create')->name('admin.thanhvien.create');
    Route::post('create','ThanhVienController@store');

    Route::get('update/{id}','ThanhVienController@edit')->name('admin.thanhvien.update');
    Route::post('update/{id}','ThanhVienController@update');

    Route::get('delete/{id}','ThanhVienController@delete')->name('admin.thanhvien.delete');
    

}); 

Route::group(['prefix'=>'Ve'],function(){
    Route::get('','VeController@index')->name('admin.ve.index');

    Route::get('create','VeController@create')->name('admin.ve.create');
    Route::post('create','VeController@store');

    Route::get('update/{id}','VeController@edit')->name('admin.ve.update');
    Route::post('update/{id}','VeController@update');

    Route::get('delete/{id}','VeController@delete')->name('admin.ve.delete');
    

}); 

Route::group(['prefix'=>'DsVe'],function(){
    Route::get('','DsVeController@index')->name('admin.dsve.index');

    Route::get('create','DsVeController@create')->name('admin.dsve.create');
    Route::post('create','DsVeController@store');

    Route::get('update/{id}','DsVeController@edit')->name('admin.dsve.update');
    Route::post('update/{id}','DsVeController@update');

    Route::get('delete/{id}','DsVeController@delete')->name('admin.dsve.delete');
    

});


Route::group(['prefix'=>'Ghe'],function(){
    Route::get('','GheController@index')->name('admin.ghe.index');

    Route::get('create','GheController@create')->name('admin.ghe.create');
    Route::post('create','GheController@store');

    Route::get('update/{id}','GheController@edit')->name('admin.ghe.update');
    Route::post('update/{id}','GheController@update');

    Route::get('delete/{id}','GheController@delete')->name('admin.ghe.delete');
    

});

Route::group(['prefix'=>'LoaiGhe'],function(){
    Route::get('','LoaiGheController@index')->name('admin.loaighe.index');

    Route::get('create','LoaiGheController@create')->name('admin.loaighe.create');
    Route::post('create','LoaiGheController@store');

    Route::get('update/{id}','LoaiGheController@edit')->name('admin.loaighe.update');
    Route::post('update/{id}','LoaiGheController@update');

    Route::get('delete/{id}','LoaiGheController@delete')->name('admin.loaighe.delete');
    

});

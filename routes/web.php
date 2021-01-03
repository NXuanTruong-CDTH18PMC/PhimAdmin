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

Route::group(['prefix'=>'SuatChieu'],function(){
    Route::get('','SuatChieucontroller@index')->name('admin.suatchieu.index');

    Route::get('create','SuatChieucontroller@create')->name('admin.suatchieu.create');
    Route::post('create','SuatChieucontroller@store');

    Route::get('update/{id}','SuatChieucontroller@edit')->name('admin.suatchieu.update');
    Route::post('update/{id}','SuatChieucontroller@update');

    Route::get('delete/{id}','SuatChieucontroller@delete')->name('admin.suatchieu.delete');
    

});  

Route::group(['prefix'=>'Rap'],function(){
    Route::get('','Rapcontroller@index')->name('admin.rap.index');

    Route::get('create','Rapcontroller@create')->name('admin.rap.create');
    Route::post('create','Rapcontroller@store');

    Route::get('update/{id}','Rapcontroller@edit')->name('admin.rap.update');
    Route::post('update/{id}','Rapcontroller@update');

    Route::get('delete/{id}','Rapcontroller@delete')->name('admin.rap.delete');
    

});  

Route::group(['prefix'=>'Phong'],function(){
    Route::get('','Phongcontroller@index')->name('admin.phong.index');

    Route::get('create','Phongcontroller@create')->name('admin.phong.create');
    Route::post('create','Phongcontroller@store');

    Route::get('update/{id}','Phongcontroller@edit')->name('admin.phong.update');
    Route::post('update/{id}','Phongcontroller@update');

    Route::get('delete/{id}','Phongcontroller@delete')->name('admin.phong.delete');
    

});  

Route::group(['prefix'=>'NhanVien'],function(){
    Route::get('','NhanViencontroller@index')->name('admin.nhanvien.index');

    Route::get('create','NhanViencontroller@create')->name('admin.nhanvien.create');
    Route::post('create','NhanViencontroller@store');

    Route::get('update/{id}','NhanViencontroller@edit')->name('admin.nhanvien.update');
    Route::post('update/{id}','NhanViencontroller@update');

    Route::get('delete/{id}','NhanViencontroller@delete')->name('admin.nhanvien.delete');
    

});  


Route::group(['prefix'=>'Gia'],function(){
    Route::get('','Giacontroller@index')->name('admin.gia.index');

    Route::get('create','Giacontroller@create')->name('admin.gia.create');
    Route::post('create','Giacontroller@store');

    Route::get('update/{id}','Giacontroller@edit')->name('admin.gia.update');
    Route::post('update/{id}','Giacontroller@update');

    Route::get('delete/{id}','Giacontroller@delete')->name('admin.gia.delete');
    

}); 
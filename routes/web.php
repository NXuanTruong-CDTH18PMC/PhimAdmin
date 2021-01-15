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
 
Route::group(['prefix'=>'dangnhap'],function(){
    Route::get('/','AdminController@dangnhap')->name('dangnhap');
    Route::post('/','AdminController@postdangnhap')->name('dangnhap');
});
Route::group(['prefix'=>'dangky'],function(){
    Route::get('/','AdminController@dangky')->name('dangky');
    Route::post('/','AdminController@postdangky')->name('dangky');
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
Route::group(['prefix'=>'TheLoai'],function(){
    Route::get('','TheLoaicontroller@index')->name('admin.theloai.index');

    Route::get('create','TheLoaicontroller@create')->name('admin.theloai.create');
    Route::post('create','TheLoaicontroller@store');

    Route::get('update/{id}','TheLoaicontroller@edit')->name('admin.theloai.update');
    Route::post('update/{id}','TheLoaicontroller@update');

    Route::get('delete/{id}','TheLoaicontroller@delete')->name('admin.theloai.delete');
    

});

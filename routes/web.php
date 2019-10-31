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
Route::get('Trangchu', function () {
    return view('index');   
});

Route::post('Trangchu', function ($id) {
    return view('index');   
})->name('admindangnhap');

Route::get('Dangnhap', function () {
    return view('login')->name('TrangDangNhap');
});
Route::prefix('/Dangnhap')->group(function () {
    Route::get('/', "QuanTriVienController@dangnhap");
    Route::post('/',"QuanTriVienController@XuLyDangNhap")->name('xu-ly-dang-nhap');
});
Route::get('Cauhoi', 'CauHoiController@LayDataCauHoi')->name('CauHoiRoute');
Route::middleware('kiemtradangnhap');



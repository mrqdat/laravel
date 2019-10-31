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
})->name('indexpage');

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
//qua trang ql câu hỏi
Route::get('Cauhoi', 'CauHoiController@LayDataCauHoi')->name('CauHoiRoute');

//qua trang ql lĩnh vực
Route::get('LinhVuc', 'LinhVucController@LayDataLinhVuc')->name('LinhVucRoute');

//qua trang ql người chơi
Route::get('NguoiChoi','NguoiChoiController@LayDataNguoiChoi')->name('NguoiChoiRoute');

//qua trang ql gói credit
Route::get('GoiCredit','GoiCreditController@LayDataGoiCredit')->name('GoiCreditRoute');

//qua trang ql lượt chơi
Route::get('LuotChoi','LuotChoiController@LayDataLuotChoi')->name('LuotChoiRoute');

//qua trang ql lịch sử mua
Route::get('LichSuMua','LichSuMuaController@LayDataLichSuMua')->name('LichSuMuaRoute');

Route::middleware('kiemtradangnhap');



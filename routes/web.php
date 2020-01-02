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


Route::prefix('/Dangnhap')->group(function () {
    //mới sửa thêm ->middleware('guest')
    Route::get('/', "QuanTriVienController@dangnhap")->name('TrangDangNhap')->middleware('guest');
    Route::post('/',"QuanTriVienController@XuLyDangNhap")->name('xu-ly-dang-nhap');
});

Route::get('Dangxuat','QuanTriVienController@dangxuat')->name('DangXuatRoute');


Route::middleware('auth')->group(function(){

    Route::get('Trangchu', function () {
        return view('index');   
     })->name('indexpage');
    
    Route::post('Trangchu', function ($id) {
        return view('layout');   
    })->name('admindangnhap');

    //Trang profile
    Route::get('Profile/{id}', 'QuanTriVienController@inProfile')->name('Profile');




//----------------------Trang Quản lý
//-----------qua trang ql câu hỏi
Route::get('Cauhoi', 'CauHoiController@LayDataCauHoi')->name('CauHoiRoute');

    //From Thêm câu hỏi
    Route::get('ThemCauHoi','CauHoiController@FormThemCauHoi')->name('ThemCauHoiRoute');

    //Xử lí thêm mới CH
    Route::post('ThemMoiCH', 'CauHoiController@ThemDataCauHoi')->name('ThemMoiCauHoiRoute');

    //Form Sửa câu hỏi
    Route::get('SuaCauHoi/{id}','CauHoiController@TimCauHoi')->name('SuaCauHoiRoute');

    //Cập Nhật Câu hỏi
    Route::post('CapNhatCauHoi/{id}', 'CauHoiController@CapNhatCauHoi')->name('CapNhatCauHoiRoute');

    //Xoa cau hoi
    Route::get('/XoaCauHoi/{id}','CauHoiController@XoaDataCauHoi')->name('XoaCauHoi');

    //Thùng rác câu hỏi
    Route::get('ThungRacCauHoi','CauHoiController@ThungRac')->name('ThungRacCauHoiRoute');

    //Khôi phục
    Route::get('KhoiPhucCauHoi/{id}','CauHoiController@KhoiPhuc')->name('KhoiPhucCauHoiRoute');

    //Xóa vĩnh viễn
    Route::get('XoaLuonCauHoi/{id}','CauHoiController@Xoa')->name('XoaLuonCauHoiRoute');





//------------qua trang ql lĩnh vực
Route::get('LinhVuc', 'LinhVucController@LayDataLinhVuc')->name('LinhVucRoute');
    //From Thêm lĩnh vực
    Route::get('ThemLinhVuc',function(){
        return view('ThemLV'); })->name('ThemLinhVucRoute');

    //Xử lí thêm mới LV
    Route::post('ThemMoiLV', 'LinhVucController@ThemDataLinhVuc')->name('ThemMoiLinhVucRoute');

    //Form sửa linh vực
    Route::get('SuaLinhVuc/{id}', 'LinhVucController@TimLinhVuc')->name('SuaLinhVucRoute');

    //Xử lí sửa lĩnh vực
   Route::post('CapNhatLinhVuc/{id}', 'LinhVucController@CapNhatLinhVuc')->name('CapNhatLinhVucRoute'); 
   
   //Xóa Lĩnh vực
   Route::get('XoaLinhVuc/{id}','LinhVucController@XoaLinhVuc')->name('XoaLinhVucRoute');

   //Thùng rác lĩnh vực
   Route::get('ThungRacLinhVuc', 'LinhVucController@ThungRac')->name('ThungRacLVRoute');

   //Khôi phục lĩnh vực
   Route::get('KhoiPhucLinhVuc/{id}', 'LinhVucController@KhoiPhuc')->name('KhoiPhucLinhVucRoute');

   //Xóa lĩnh vực khỏi thùng rác
   Route::get('Xoa/{id}', 'LinhVucController@Xoa')->name('XoaLuonLinhVucRoute');






//qua trang ql người chơi --------------------------DAT
Route::get('NguoiChoi','NguoiChoiController@LayDataNguoiChoi')->name('NguoiChoiRoute');






//-----------qua trang ql gói credit --------------------------THIEN
Route::get('GoiCredit','GoiCreditController@LayDataGoiCredit')->name('GoiCreditRoute');

    //From thêm gói credit
    Route::get('ThemGoiCredit',function(){
        return view('ThemGoiCredit'); })->name('ThemGoiCreditRoute');

    //Xử lí thêm mới gói credit
    Route::post('ThemMoiGoiCredit','GoiCreditController@ThemDataGoiCredit')->name('ThemMoiGoiCreditRoute');

    //Hiển thị from sửa
    Route::get('SuaGoiCredit/{id}', 'GoiCreditController@TimGoiCredit')->name('SuaGoiCreditRoute');

    //Cập nhật gói credit
    Route::post('CapNhatGoiCredit/{id}', 'GoiCreditController@CapNhatGoiCredit')->name('CapNhatGoiCreditRoute');

    //Xóa gói credit
    Route::get('/Xoagoicredit/{id}','GoiCreditController@XoaDataGoiCredit')->name('XoaGoiCreditRoute');

    //Thùng rác gói credit
   Route::get('ThungRacGoiCredit', 'GoiCreditController@ThungRac')->name('ThungRacGoiCreditRoute');

   //Khôi phục gói credit
   Route::get('KhoiPhucGoiCredit/{id}', 'GoiCreditController@KhoiPhuc')->name('KhoiPhucGoiCreditRoute');

   //Xóa gói credit khỏi thùng rác
   Route::get('Xoa/{id}', 'GoiCreditController@Xoa')->name('XoaVVGoiCreditRoute');




//qua trang ql lượt chơi --------------------------DAT
Route::get('LuotChoi','LuotChoiController@LayDataLuotChoi')->name('LuotChoiRoute');





//qua trang ql lịch sử mua --------------------------THIEN
Route::get('LichSuMua','LichSuMuaController@LayDataLichSuMua')->name('LichSuMuaRoute');





//redirect -> chi tiet luot choi --------------------------DAT

Route::get('Chitietluotchoi','ChiTietLuotChoiController@LayDataChiTietLuotChoi')->name('ChiTietLuotChoiRoute');
});


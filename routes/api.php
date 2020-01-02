<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('CauHoiJson','API\CauhoiController@LayCauHoi');
Route::get('LinhVucJson', 'API\LinhVucController@LayLinhVuc');
Route::get('GoiCreditJson', 'API\GoiCreditController@LayGoiCredit');
Route::get('NguoiChoiJson', 'API\NguoiChoiController@LayNguoiChoi');
Route::get('LuotChoiJson', 'API\LuotChoiController@LayLuotChoi');
Route::get('CTLuotChoiJson', 'API\ChiTietLuotChoiController@LayCTLuotChoi');

Route::get('ThemNguoiChoi', 'API\NguoiChoiController@ThemNguoiChoi');

Route::get('ThemLuotChoi', 'API\LuotChoiController@TaoLuotChoi');
    // http://localhost:8000/api/ThemLuotChoi?user=1&socau=1&diem=2&time=2019-12-29%2017:58:32

Route::get('ThemCTLuotChoi','API\ChiTietLuotChoiController@ThemCTLuotChoi');
Route::get('MuaCredit', 'API\GoiCreditController@MuaCredit');
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quan_tri_vien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class QuanTriVienController extends Controller
{
    public function dangnhap(){
        return view('login');
    }
    public function XuLyDangNhap(Request $req)
    {
        $tenDangNhap = $req->username;
        $matKhau = $req->password;

        if(Auth::attempt(['ten_dang_nhap' => $tenDangNhap, 'password' => $matKhau])){
            echo "<script>alert('Đăng nhập thành công')</script>";
            return Redirect()->route('admindangnhap');
        }
        else{
            echo "<script>alert('Đăng nhập thất bại')</script>";
            return view('login'); 
        }
        // $qtv = quan_tri_vien::where('ten_dang_nhap', $tenDangNhap)->first();
        // if($qtv == null){
        //     echo "<script>alert('Sai tên tài khoản')</script>";
        //    return view('login'); 
        // }
        // if(!Hash::check($matKhau, $qtv->mat_khau)){
        //     echo "<script>alert('Sai mật khẩu')</script>";
        //     return view('login');
        // }
        // echo "<script>alert('Đăng nhập thành công')</script>";
        // return Redirect()->route('admindangnhap',[$tenDangNhap]);
        
    }
}

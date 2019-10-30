<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quan_tri_vien;
use Illuminate\Support\Facades\Hash;

class QuanTriVienController extends Controller
{
    public function dangnhap(){
        return view('login');
    }
    public function XuLyDangNhap(Request $req)
    {
        $tenDangNhap = $req->username;
        $matKhau = $req->password;

        $qtv = quan_tri_vien::where('ten_dang_nhap', $tenDangNhap)->first();
        if($qtv == null){
           return "<script>alert('Sai tên tài khoản')</script>"; 
        }
        if(!Hash::check($matKhau, $qtv->mat_khau)){
            return "<script>alert('Sai mật khẩu')</script>";
        }
        return "<script>alert('Đăng nhập thành công')</script>";
    }
}

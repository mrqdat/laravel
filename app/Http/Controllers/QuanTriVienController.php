<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quan_tri_vien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DangNhapRequest;

class QuanTriVienController extends Controller
{
    public function dangnhap(){
        return view('login');
    }
    public function XuLyDangNhap(DangNhapRequest $req)
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
    }
    public function dangxuat(){
        Auth::logout();
        return redirect()->route('TrangDangNhap');
    }
}

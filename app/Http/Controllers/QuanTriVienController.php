<?php

namespace App\Http\Controllers;
use App\Components\Notification;

use Illuminate\Http\Request;
use App\quan_tri_vien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DangNhapRequest;

class QuanTriVienController extends Controller
{
    use Notification;
    
    public function dangnhap(){
        return view('login');
    }
    var $name=null;
    public function XuLyDangNhap(DangNhapRequest $req)
    {
        $tenDangNhap = $req->username;
        $matKhau = $req->password;
        if(Auth::attempt(['ten_dang_nhap' => $tenDangNhap, 'password' => $matKhau])){
            self::success('Login success! Hello '.$tenDangNhap);
            return Redirect()->route('admindangnhap',['admin'=>$tenDangNhap]);
        }
        else{
            echo "<script>alert('Login failed')</script>";
            return view('login'); 
        }        
    }
    public function dangxuat(){
        Auth::logout();
        return redirect()->route('TrangDangNhap');
    }

    public function inProfile($id)
    {
        $qtv = quan_tri_vien::find($id);
                // ->where('id','=',$id)->get();
        return view('Profile',['admin'   =>  $qtv]);
    }
}

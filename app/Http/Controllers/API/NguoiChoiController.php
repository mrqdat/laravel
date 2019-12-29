<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Nguoi_choi;

class NguoiChoiController extends Controller
{
    public function LayNguoiChoi(Request $req){
        $user = $req->query('username');
        $nguoichoi = Nguoi_choi::where('ten_dang_nhap',$user)->get();
        $result = [
            'success'   =>true,
            'data'      =>$nguoichoi
        ];
        return response()->json($nguoichoi);
    }

    public function ThemNguoiChoi(Request $req)
    {
        $tdn = $req->query('tendangnhap');
        $matkhau1 = $req->query('matkhau');
        $matkhau2 = $req->query('matkhaucf');
        $email = $req->query('email');
        $hinhdaidien = $req->query('hinhdaidien');

        if($matkhau1 == $matkhau2){
            $nguoichoi = Nguoi_choi::create([
            'ten_dang_nhap' => $tdn,
            'mat_khau'      => $matkhau2,
            'Email'         => $email,
            'hinh_dai_dien' => $hinhdaidien,
            'diem_cao_nhat' =>0,
            'credit'        =>0
        ]);
        }
        else
        return response("<script>alert('khong them dc')</script>");

        
    }
}

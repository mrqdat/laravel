<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Nguoi_choi;

class NguoiChoiController extends Controller
{
    public function LayNguoiChoi(Request $req){
        //$user = $req->query('username');
        $nguoichoi = Nguoi_choi::All();
        $result = [
            'success'   =>true,
            'data'      =>$nguoichoi
        ];
        return response()->json($nguoichoi);
    }

    public function ThemNguoiChoi(Request $req)
    {
        $nguoichoi = new Nguoi_choi;
        
        $nguoichoi->ten_dang_nhap   = $req->tendangnhap;
        $nguoichoi->mat_khau        = $req->matkhau;
        $nguoichoi->Email           = $req->email;
        $nguoichoi->hinh_dai_dien   = null;
        $nguoichoi->diem_cao_nhat   =   0;
        $nguoichoi->credit          =   0;

        $nguoichoi->save();

        
    }
}

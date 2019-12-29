<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Luot_choi;
use App\Chi_tiet_luot_choi;

class ChiTietLuotChoiController extends Controller
{
    public function LayCTLuotChoi(Request $req){
        $user = $req->query('username_id');
        $ctluotchoi = Chi_tiet_luot_choi::where('luot_choi_id', $user)->get();
        $result = [
            'success'   =>true,
            'data'      =>$ctluotchoi
        ];
        return response()->json($ctluotchoi);
    }

    public function ThemCTLuotChoi(Request $req){
        $id_cauhoi    =   $req->query('cauhoi');
        $id_luotchoi  =   $req->query('luotchoi');
        $dapan      =   $req->query('dapan');
        $diem       =   $req->query('diem');

        $ctlc = 
            ['luot_choi_id'   => $id_luotchoi,
            'cau_hoi_id'    =>  $id_cauhoi,
            'phuong_an'     => $dapan,
            'diem'          =>$diem];
            Chi_tiet_luot_choi::create($ctlc);
       // return response('<script>alert("thêm thành công")</script>');
    }
}

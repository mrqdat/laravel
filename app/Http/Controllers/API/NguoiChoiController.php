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
}

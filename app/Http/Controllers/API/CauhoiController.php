<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\cau_hoi;
use App\Linh_Vuc;

class CauhoiController extends Controller
{
    public function LayCauHoi(Request $req){
        $linhvuc = $req->query('linh_vuc');
        $cauhoi = cau_hoi::where('linh_vuc_id', $linhvuc,)->get();
        $result = [
            'success'   =>true,
            'data'      =>$cauhoi
        ];
        return response()->json($cauhoi);
    }
}

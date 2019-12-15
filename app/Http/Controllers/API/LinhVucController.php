<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Linh_Vuc;

class LinhVucController extends Controller
{
    public function LayLinhVuc(Request $req){
        //$linhvuc = $req->query('linh_vuc');
        $linhvuc = Linh_Vuc::all();
        $result = [
            'success'   =>true,
            'data'      =>$linhvuc
        ];
        return response()->json($linhvuc);
    }
}

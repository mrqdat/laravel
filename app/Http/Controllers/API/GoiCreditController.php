<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Goi_Credit;

class GoiCreditController extends Controller
{
    public function LayGoiCredit(Request $req){
        //$linhvuc = $req->query('linh_vuc');
        $goicredit = Goi_Credit::all();
        $result = [
            'success'   =>true,
            'data'      =>$goicredit
        ];
        return response()->json($goicredit);
    }
}

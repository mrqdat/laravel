<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Goi_Credit;
use App\Nguoi_choi;

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
    public function MuaCredit(Request $req)
    {
        $user   = $req->query('user');
        $credit = $req->query('credit');

        $nguoichoi = Nguoi_choi::find($user);

        if($nguoichoi != null)
        $nguoichoi->update(
            ['credit'=>$credit]
        );
        else response('Error');
    }
}

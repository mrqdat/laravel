<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nguoi_choi;

class NguoiChoiController extends Controller
{
    public function LayDataNguoiChoi(){
        $listNguoiChoi = Nguoi_choi::all();

        return view('tableNguoiChoi',[
            'NguoiChoi' => $listNguoiChoi
        ]);
    }
}

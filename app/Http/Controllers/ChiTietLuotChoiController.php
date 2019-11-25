<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chi_tiet_luot_choi;

class ChiTietLuotChoiController extends Controller
{
    //
    public function LayDataChiTietLuotChoi(){
        $lstChiTietLuotChoi = Chi_tiet_luot_choi::all();

        return view('tableChiTietLuotChoi',[
            'ChiTietLuotChoi'=>$lstChiTietLuotChoi]);
    }
}

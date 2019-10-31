<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cau_hoi;

class CauHoiController extends Controller
{
    public function LayDataCauHoi(){
        $listCauHoi = cau_hoi::all();

        return view('tableCauHoi',[
            'noidung' => $listCauHoi
        ]);
    }
}

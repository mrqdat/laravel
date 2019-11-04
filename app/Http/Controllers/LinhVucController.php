<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Linh_Vuc;

class LinhVucController extends Controller
{
    public function LayDataLinhVuc(){
        $listLinhVuc = Linh_Vuc::all();

        return view('tableLinhVuc',[
            'tenLinhVuc' => $listLinhVuc
        ]);
    }
    public function ThemDataLinhVuc(Request $req){
        $tenlv = $req->TenLV;

        Linh_Vuc::create(['ten_linh_vuc'=>$tenlv]);

        return redirect()->route('LinhVucRoute');

    }
}

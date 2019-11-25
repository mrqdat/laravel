<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lich_su_mua_Credit;

class LichSuMuaController extends Controller
{
    public function LayDataLichSuMua(){
        $listLichsu = Lich_su_mua_Credit::all();
        
        return view('tableLichSuMua',[
            'lichsu' => $listLichsu
        ]);
    }
    // public function ThemDataGoiCredit(Request $req){
    //     Lich_su_mua_Credit::create(['ten_goi'=>$req->tengoi,'credit'=>$req->socredit,'so_tien'=>$req->sotien]);
    //     return redirect()->route('GoiCreditRoute');
    // }
}

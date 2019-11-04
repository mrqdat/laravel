<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goi_Credit;

class GoiCreditController extends Controller
{
    public function LayDataGoiCredit(){
        $listGoi = Goi_Credit::all();
        
        return view('tableGoiCredit',[
            'goi' => $listGoi
        ]);
    }
    public function ThemDataGoiCredit(Request $req){
        Goi_Credit::create(['ten_goi'=>$req->tengoi,'credit'=>$req->socredit,'so_tien'=>$req->sotien]);
        return redirect()->route('GoiCreditRoute');
    }
}

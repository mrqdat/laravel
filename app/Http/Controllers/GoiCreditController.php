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
}

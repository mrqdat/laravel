<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Luot_choi;


class LuotChoiController extends Controller
{
    public function LayDataLuotChoi(){
        $listLuotchoi = Luot_choi::all();
        
        return view('tableLuotChoi',[
            'luotchoi' => $listLuotchoi
        ]);
    }
    
}

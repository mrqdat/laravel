<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Luot_choi;
use Nguoi_choi;

class LuotChoiController extends Controller
{
    public function LayLuotChoi(Request $req){
        $user = $req->query('username_id');
        $luotchoi = Luot_choi::where('nguoi_choi_id', $user)->get();
        $result = [
            'success'   =>true,
            'data'      =>$luotchoi
        ];
        return response()->json($luotchoi);
    }
}

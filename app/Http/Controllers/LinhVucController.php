<?php

namespace App\Http\Controllers;
use App\Components\Notification;

use Illuminate\Http\Request;
use App\Linh_Vuc;

class LinhVucController extends Controller
{
    use Notification;

    public function LayDataLinhVuc(){
        $listLinhVuc = Linh_Vuc::all();
        return view('tableLinhVuc',['tenLinhVuc' => $listLinhVuc]);
    }

    public function ThemDataLinhVuc(Request $req){
        $tenlv = $req->TenLV;

        Linh_Vuc::create(['ten_linh_vuc'=>$tenlv]);

        return redirect()->route('LinhVucRoute');

    }

    public function TimLinhVuc($id){
        $linhvuc = Linh_Vuc::find($id);
        return view('SuaLinhVuc',['linhvucfind'=>$linhvuc]);
    }

    public function CapNhatLinhVuc($id, Request $req){
        $linhvuc = Linh_Vuc::find($id);

        if($linhvuc == null){
            self::error('Update failed');
        }
        else{
            $linhvuc->update(['ten_linh_vuc'=>$req->TenLV]);
            self::success('Update success');
            return redirect()->route('LinhVucRoute');
        }
    }
}

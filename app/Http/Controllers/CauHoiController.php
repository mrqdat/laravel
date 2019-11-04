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
    public function ThemDataCauHoi(Request $req){
        $noidung = $req->Noidung;
        $dapan = $req->Dapan;
        $idlv = $req->IdLV;
        $loai = $req->Loai;
        $pa = $req->PaA;
        $pb = $req->PaB;
        $pc = $req->PaC;
        $pd = $req->PaD;
        
        cau_hoi::create(['noi_dung'=>$noidung,'dap_an'=>$dapan,'linh_vuc_id'=>$idlv,'loai'=>$loai,
        'phuong_an_A'=>$pa,'phuong_an_B'=>$pb,'phuong_an_C'=>$pc,'phuong_an_D'=>$pd]);

        return redirect()->route('CauHoiRoute');
        
    }
}

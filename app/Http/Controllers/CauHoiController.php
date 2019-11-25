<?php

namespace App\Http\Controllers;
use App\Components\Notification;

use Illuminate\Http\Request;
use App\cau_hoi;

class CauHoiController extends Controller
{
    use Notification;
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
        
        self::success('Add success');
        return redirect()->route('CauHoiRoute');
        
    }
    
    public function XoaDataCauHoi($id){
        $cauhoi = cau_hoi::find($id);
        
        if($cauhoi == null){
            self::error('Deleted failed');
            return redirect()->route('CauHoiRoute');
        
        }
        $cauhoi->delete();
        self::success('Deleted success');
        return redirect()->route('CauHoiRoute');
    }
}

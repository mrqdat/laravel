<?php

namespace App\Http\Controllers;
use App\Components\Notification;

use Illuminate\Http\Request;
use App\Goi_Credit;

class GoiCreditController extends Controller
{
    use Notification;
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

    //Tìm Gói Credit vừa chọn hiển thị lên form
    public function TimGoiCredit($id)
    {
        $goicredit = Goi_Credit::find($id);

        return view('SuaGoiCredit',['goicreditfind'=>$goicredit]);
    }

    //Cập nhật gói credit
    public function CapNhatGoiCredit($id, Request $req){
        $goicredit = Goi_Credit::find($id);

        if($goicredit == null){
            self::error('Update failed');
        }
        else{
            $goicredit->update(['ten_linh_vuc'=>$req->tengoi,'credit'=>$req->socredit,'so_tien'=>$req->sotien]);
            self::success('Update success');
            return redirect()->route('GoiCreditRoute');
        }
    }

    //Xóa Gói Credit
    public function XoaDataGoiCredit($id){
        $goicredit = Goi_Credit::find($id);
        
        if($goicredit == null){
            self::error('Deleted failed');
            return redirect()->route('GoiCreditRoute');
        
        }
        $goicredit->delete();
        self::success('Deleted success');
        return redirect()->route('GoiCreditRoute');
    }
}

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
        self::success('Add success');
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

    //Thêm câu hỏi vừa chọn vào thùng rác
    public function XoaDataGoiCredit($id){
        $goicredit = Goi_Credit::find($id);
        
        if($goicredit == null){
            self::error('Add Cau Hoi in Recycle false!');
            return redirect()->route('GoiCreditRoute');
        
        }
        $goicredit->delete();
        self::success('+1 Cau Hoi in Recycle');
        return redirect()->route('GoiCreditRoute');
    }


    //Hiển thị các câu hỏi đã xóa
    public function ThungRac()
    {
        //Tìm Câu hỏi đã xóa
        $goicredit = Goi_Credit::onlyTrashed()
                    ->orderBy('deleted_at', 'desc')->get();

        return view('ThungRacGoiCredit',['goicreditdaxoa'=>$goicredit]);
    }

    //Khôi phục câu hỏi đã xóa
    public function KhoiPhuc($id)
    {
        $goicredit = Goi_Credit::withTrashed()
                    ->where('id','=',$id)
                    ->restore();

        self::success('Restore success');
        return redirect()->route('ThungRacGoiCreditRoute');
    }

    //Xóa vĩnh viễn
    public function Xoa($id)
    {

        $goicredit = Goi_Credit::where('id',$id)->forceDelete();
        self::success('Deleted success');
                    
        return redirect()->route('ThungRacGoiCreditRoute');
    }
}

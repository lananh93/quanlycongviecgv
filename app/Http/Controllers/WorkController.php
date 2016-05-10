<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\GDRequest;
use App\GD;
use Illuminate\Http\Request;


class WorkController extends Controller
{
    public function getAdd(){

        return view('layout.backend.lecturer.work.addlec');
    }
    public function postAdd(GDRequest $requests) {
       
        $gd = new GD;
        $gd->MaMH = $requests->txtMH;
        $gd->TenGD = $requests->txtCV;
        $gd->TgBD = $requests->tgBD;
        $gd->TgKT = $requests->tgKT;
        $gd->Trangthai = $requests->rdoLevel;
        $gd->save();
        return redirect()->route('work::getlist')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công!']);
        
    }

    public function getlist()
    {
        $data = GD::select('MaGD','MaMH','TenGD','TgBD','TgKT' , 'Trangthai')->orderBy('MaGD','DESC')->get()->toArray();
        return view ('layout.backend.lecturer.work.list',compact('data'));
    }
    
    public function getDelete($MaGD)
    {
        $work = GD::find($MaGD);
        $work->delete($MaGD);
        return redirect()->route('work::getlist')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công!']);

    }

    public function getEdit($MaGD)
    {
        $data = GD::findOrFail($MaGD)->toArray();
        return view('layout.backend.lecturer.work.edit',compact('data','MaGD'));

    }

    public function postEdit(Request $requests, $MaGD)
    {
        $this->validate($requests,
            ["txtCV" => "required"],
            ["txtCV.required" => "Vui lòng nhập tên công việc"]
            );

        $gd = GD::find($MaGD);
        $gd->MaMH = $requests->txtMH;
        $gd->TenGD = $requests->txtCV;
        $gd->TgBD = $requests->tgBD;
        $gd->TgKT = $requests->tgKT;
        $gd->Trangthai = $requests->rdoLevel;
        $gd->save();
        return redirect()->route('work::getlist')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công!']);


    }
}

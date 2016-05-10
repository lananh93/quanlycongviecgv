<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Science;
use App\Http\Requests\ScienceRequest;

class ScienceController extends Controller
{
    public function getAdd(){

        return view('layout.backend.lecturer.science.addscience');
    }
    public function postAdd(ScienceRequest $requests) {

        $science = new Science;
        $science->TenCV = $requests->txtCV;
        $science->Thoigian = $requests->txtTG;
        $science->Loai = $requests->rdoLevel;
        $science->SoluongSV = $requests->txtSL;
        $science->save();
        return redirect()->route('science::getlist')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công!']);

    }

    public function getlist()
    {
        $data = Science::select('id','TenCV','Loai','Thoigian','SoluongSV')->orderBy('id','DESC')->get()->toArray();
        return view ('layout.backend.lecturer.science.listscience',compact('data'));
    }

    public function getDelete($id)
    {
        $science = Science::find($id);
        $science->delete($id);
        return redirect()->route('science::getlist')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công!']);

    }

    public function getEdit($id)
    {
        $data = Science::findOrFail($id)->toArray();
        return view('layout.backend.lecturer.science.editscience',compact('data','id'));

    }

    public function postEdit(Request $requests, $id)
    {
        $this->validate($requests,
            ["txtCV" => "required"],
            ["txtCV.required" => "Vui lòng nhập tên công việc"]
        );

        $science = Science::find($id);
        $science->TenCV = $requests->txtCV;
        $science->Thoigian = $requests->txtTG;
        $science->Loai = $requests->rdoLevel;
        $science->SoluongSV = $requests->txtSL;
        $science->save();
        return redirect()->route('science::getlist')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công!']);


    }
}

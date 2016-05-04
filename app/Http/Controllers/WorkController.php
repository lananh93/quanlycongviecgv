<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\WorkRequest;
use App\Work;


class WorkController extends Controller
{
    public function getAdd(){
        return view('layout.backend.lecturer.work.addlec');
    }
    public function postAdd(WorkRequest $requests) {
       
        $work = new Work;
        $work->TenCV = $requests->txtCV;
        $work->Thoigian = $requests->txtTG;
        $work->Loai = $requests->rdoLevel;
        $work->SoluongSV = $requests->txtSL;
        $work->save();
        return redirect()->route('work::getlist');
        
    }

    public function getlist()
    {
        return view ('layout.backend.lecturer.work.list');
    }
}

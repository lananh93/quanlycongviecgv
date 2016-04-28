<?php
/**
 * Created by PhpStorm.
 * User: Lan Anh
 * Date: 22/04/2016
 * Time: 9:36 SA
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    public function index()
    {
        return view('layout.backend.media.index');
    }
}
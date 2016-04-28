<?php
/**
 * Created by PhpStorm.
 * User: Lan Anh
 * Date: 22/04/2016
 * Time: 9:35 SA
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('layout.backend.master');
    }
}
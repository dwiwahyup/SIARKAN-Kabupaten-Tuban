<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaerahRawanController extends Controller
{
    public function index()
    {
        return view('dashboard.daerah_rawan.index');
    }

    public function detail()
    {
        return view('dashboard.daerah_rawan.detail');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaerahRawanController extends Controller
{
    public function index()
    {
        return view('users.daerah_rawan');
    }
}

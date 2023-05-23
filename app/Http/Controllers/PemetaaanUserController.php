<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemetaaanUserController extends Controller
{
    public function index()
    {
        return view('users.pemetaan.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function dashboard()
    {
        return view("admin.dashboard");
    }

    public function siswa()
    {
        return view("admin.siswa");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;

class PresensiController extends Controller
{
    public function index()
    {
        $data = presensi::all();
        return view('presensi', compact('data'));
    }
}

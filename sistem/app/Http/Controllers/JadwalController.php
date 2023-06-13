<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $data = jadwal::all();
        return view('jadwal', compact('data'));
    }
}

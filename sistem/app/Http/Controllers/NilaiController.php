<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;

class NilaiController extends Controller
{
    public function index()
    {
        $data = nilai::all();
        return view('nilai', compact('data'));
    }
}

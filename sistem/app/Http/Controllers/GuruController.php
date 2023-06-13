<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use Redirect;

class GuruController extends Controller
{
    public function index()
    {
        $data = guru::all();
        return view('guru', compact('data'));
    }

    public function simpan(Request $request, $id)
    {
        $data = new guru();
            $data->nip = $request->nip;
            $data->nama_guru = $request->nama_guru;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->tempat_lahir = $request->tempat_lahir;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->agama = $request->agama;
            $data->alamat = $request->alamat;
            $data->jabatan_guru = $request->jabatan_guru;
            $data->jenis_guru = $request->jenis_guru;
            $data->tugas_mengajar = $request->tugas_mengajar;
            $data->keterangan = $request->keterangan;
            $data->kode_login = $request->kode_login;
        $data->save();
        Session::flash('sukses','Data berhasil ditambah');
        return Redirect('/guru');
            
    }

    public function edit(Request $request, $id)
    {
        $data = guru::where('nip',$id)->first();
        return view('guru-edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = guru::where('nip',$id)->first();
        $data->nip = $request->nip;
            $data->nama_guru = $request->nama_guru;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->tempat_lahir = $request->tempat_lahir;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->agama = $request->agama;
            $data->alamat = $request->alamat;
            $data->jabatan_guru = $request->jabatan_guru;
            $data->jenis_guru = $request->jenis_guru;
            $data->tugas_mengajar = $request->tugas_mengajar;
            $data->keterangan = $request->keterangan;
            $data->kode_login = $request->kode_login;
        $data->save();
        Session::flash('sukses','Data berhasil diupdate');
        return Redirect('/guru');
    }
}

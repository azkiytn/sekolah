@extends('layouts.app-dashboard')

@section('content')
<div class="card" style="margin: 0px 10px 0px 210px;">
    <h1 style="color: #135E69; margin-top: 50px; font-weight: bold; text-align: center;">Data Guru</h1>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="w3-modal-content w3-animate-zoom">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambah">
                        Tambah Data
                    </button>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-responsive table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">NIP</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Tempat Lahir</th>
                        <th class="text-center">Tanggal Lahir</th>
                        <th class="text-center">Agama</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Jabatan Guru</th>
                        <th class="text-center">Jenis Guru</th>
                        <th class="text-center">Tugas Mengajar</th>
                        <th class="text-center">Keterangan</th>
                        <th class="text-center">Kode Login</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $no => $value)
                    <tr>
                        <td align="center">{{$no+1}}</td>
                        <td>{{$value->nip}}</td>
                        <td>{{$value->nama_guru}}</td>
                        <td>{{$value->jenis_kelamin}}</td>
                        <td>{{$value->tempat_lahir}}</td>
                        <td>{{$value->tanggal_lahir}}</td>
                        <td>{{$value->agama}}</td>
                        <td>{{$value->alamat}}</td>
                        <td>{{$value->jabatan_guru}}</td>
                        <td>{{$value->jenis_guru}}</td>
                        <td>{{$value->tugas_mengajar}}</td>
                        <td>{{$value->keterangan}}</td>
                        <td>{{$value->kode_login}}</td>
                        <td>
                            <a href="{{url($value->nip.'/edit-guru')}}">
                                <button class="btn btn-primary">Ubah</button></a>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection
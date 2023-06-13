@extends('layouts.app-dashboard')

@section('content')
<div class="card" style="margin: 0px 10px 0px 210px;">
    <h1 style="color: #135E69; margin-top: 50px; font-weight: bold; text-align: center;">Data Jadwal Mengajar</h1>

    <div class="card_body">
        <div class="table-responsive">
            <table class="table table-responsive table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Kode Jadwal Mengajar</th>
                        <th class="text-center">Kode Kelas</th>
                        <th class="text-center">Kode Mapel</th>
                        <th class="text-center">NIP</th>
                        <th class="text-center">Mulai</th>
                        <th class="text-center">Selesai</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $no => $value)
                    <tr>
                        <td align="center">{{$no+1}}</td>
                        <td align="center">{{$value->kode_jadwal}}</td>
                        <td align="center">{{$value->kode_kelas}}</td>
                        <td align="center">{{$value->kode_mapel}}</td>
                        <td align="center">{{$value->nip}}</td>
                        <td align="center">{{$value->mulai}}</td>
                        <td align="center">{{$value->selesai}}</td>
                        <td align="center">
                            <button class="btn btn-primary">Ubah</button>
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
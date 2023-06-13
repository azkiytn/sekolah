@extends('layouts.app')

@section('content')
<div class="card" style="margin: 120px 80px 100px 80px;">
    <h1 style="color: #135E69; margin-top: 50px; font-weight: bold; text-align: center;">Halaman Berita</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card" style="margin: 20px 20px 20px 20px;">
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top" style="width: 100%; height: 200px; margin: 10px 10px 10px 10px;"
                            src="sistem\img\Berita4.jpeg" alt="Card image cap">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h4 class="card-title" style="color: #135E69; font-weight: bold;">Pelaksanaan Postest AKM
                                Kelas
                            </h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's
                                content.</p>
                            <a href="#" class="btn btn-primary">Baca selengkapnya...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="margin: 20px 20px 20px 20px;">
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top" style="width: 100%; height: 200px; margin: 10px 10px 10px 10px;"
                            src="sistem\img\Berita3.jpeg" alt="Card image cap">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h4 class="card-title" style="color: #135E69; font-weight: bold;">Pesantren Ramadhan
                            </h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's
                                content.</p>
                            <a href="#" class="btn btn-primary">Baca selengkapnya...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
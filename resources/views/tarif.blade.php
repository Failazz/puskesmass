<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{ asset('assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/fontawesome/css/brands.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/fontawesome/css/solid.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
        <title>Beta</title>
    </head>
    <body>
    @include('layouts.header')

    <!-- MAIN CONTENT -->
    <div class="container mt-5 pt-4">
        <div class="row">
            <!-- SIDEBAR -->
            <div class="col-md-3">
                <div class="sidebar">
                    <h5>Kategori</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ url('manyaran/news') }}">Berita</a></li>
                        <li class="list-group-item"><a href="{{ url('manyaran/article') }}">Artikel</a></li>
                        <li class="list-group-item"><a href="{{ url('manyaran/informasi') }}">Informasi</a></li>
                        <li class="list-group-item"><a href="{{ url('manyaran/contact') }}">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>

            <!-- MAIN CONTENT SECTION -->
            <div class="col-md-9">
                <div class="content-section tarif-pelayanan">
                    <h2>TARIF PELAYANAN</h2>
                    <div>
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Jenis Pelayanan</th>
                                    <th>Tarif</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Pelayanan Umum</td><td>Rp20.000</td></tr>
                                <tr><td>Pelayanan Kesehatan Gigi</td><td>Rp30.000</td></tr>
                                <tr><td>Pelayanan Kesehatan Ibu dan Anak</td><td>Rp15.000</td></tr>
                                <tr><td>Pelayanan Kesehatan Lansia</td><td>Rp25.000</td></tr>
                                <tr><td>Pelayanan Kesehatan Jiwa</td><td>Rp40.000</td></tr>
                                <tr><td>Pelayanan Kesehatan Reproduksi</td><td>Rp35.000</td></tr>
                                <tr><td>Pelayanan Imunisasi</td><td>Rp10.000</td></tr>
                                <tr><td>Pelayanan Laboratorium Dasar</td><td>Rp50.000</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
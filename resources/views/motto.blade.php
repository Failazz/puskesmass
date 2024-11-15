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
                <div class="content-section motto-nilai">
                    <div class="content-item">
                        <h2>MOTTO DAN TATA NILAI</h2>
                        <small class="text-muted"><strong>Ditulis:</strong> 2024-10-28 </small>
                        <div class="motto mt-2">
                            <h5>MOTTO</h5>
                            <div class="underline"></div>
                            <p>Anda Sehat Kami Senang</p>
                            </div>
                        <div class="tata-nilai">
                            <h5>TATA NILAI</h5>
                            <ul>
                                <li>Siap Melayani Tepat Waktu</li>
                                <li>Integritas Memegang Teguh Prinsip, Kejujuran Dan Nilai-Nilai Moral</li>
                                <li>Performa Penampilan Dengan Atribut Lengkap</li>
                            </ul>
                            <p> </p>
                        </div>
                        <div class="yel-yel">
                            <h5>YEL - YEL</h5>
                            <ul>
                                <li>Satu Kata Untuk Puskesmas (Siap)</li>
                                <li>Dua Kata Untuk Puskesmas (Siap, Integritas)</li>
                                <li>Tiga Kata Untuk Puskesmas (Siap, Integritas, Performa)</li>
                                <li>Puskesmas Manyaran (Sip, Gayeng Melayani Masyarakat, Matur Nuwun)</li>
                            </ul>
                        </div>
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
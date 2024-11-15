<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome/css/brands.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome/css/solid.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
    <title>Puskesmas Manyaran</title>
</head>
<body>
    @include('layouts.header')

    <!-- MAIN CONTENT -->
    <div class="container mt-5 pt-4">
        <div class="row">
            <!-- SIDEBAR -->
            <div class="col-md-3">
                <div class="sidebar">
                    <h5>Sidebar</h5>
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
                <div class="content-section pendaftaran">
                    <h2>PENDAFTARAN</h2>
                    <small class="text-muted"><strong>Ditulis:</strong> 2023-12-29 </small>
                    
                    <div>
                        <h4>A. PENDAFTARAN PUSTAKA WEB MANYARAN</h4>
                        <p class="mb-2">Pendaftaran melalui fasilitas Website PUSTAKA WEB. Fitur yang tersedia:</p>
                        <ul>
                            <li>Pendaftaran Online Rawat Jalan Pasien Baru/Pasien Lama</li>
                            <li>Pengajuan Sertifikat Imunisasi Anak</li>
                            <li>Download Kartu Berobat</li>
                        </ul>
                        <a href="#" class="btn btn-primary">DAFTAR PUSTAKA WEB MANYARAN</a>
                    </div>

                    <div>
                        <h4>B. WEB SKRINING KESEHATAN MOBILE JKN</h4>
                        <p>Skrining riwayat kesehatan sesuai FKTP melalui fasilitas Web Skrining BPJS Kesehatan di Website.</p>
                        <a href="#" class="btn btn-danger">WEB SKRINING BPJS</a>
                    </div>

                    <div>
                        <h4>C. KONSULTASI DOKTER DAN SKRINING KESEHATAN MOBILE JKN</h4>
                        <p>Konsultasi Dokter Online dan skrining riwayat kesehatan sesuai FKTP melalui fasilitas Mobile JKN di Android/Apple store.</p>
                        <a href="#" class="btn btn-danger">Play Store (Android)</a>
                        <a href="#" class="btn btn-danger">App Store (Apple)</a>
                    </div>

                    <div>
                        <h4>D. PENDAFTARAN VAKSINASI COVID-19 KOTA SEMARANG</h4>
                        <p>Pendaftaran vaksinasi Covid-19 melalui fasilitas Website VICTORI.</p>
                        <a href="#" class="btn btn-danger">DAFTAR VICTORI</a>
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
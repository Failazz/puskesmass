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
                    <div class="content-section">
                        <div class="content-item">
                            <h2>TUGAS, FUNGSI & WEWENANG</h2>
                            <small class="text-muted"><strong>Ditulis:</strong> 2024-10-28 </small>
                            <h5 class="mt-2">A. Tugas</h5>
                            <p>Melaksanakan pelayanan, pembinaan dan pengembangan upaya kesehatan secara paripurna kepada masyarakat di wilayah kerjanya.</p>
                            
                            <h5>B. Fungsi</h5>
                            <ol>
                                <li>Pelayanan Upaya Kesehatan, kesejahteraan Ibu dan Anak, KB Perbaikan Gizi, Perawatan Kesehatan Masyarakat, Pencegahan dan pemberantasan Penyakit, Imunisasi, Penyehatan Lingkungan, Penyuluhan Kesehatan Masyarakat, Upaya Kesehatan Sekolah, Pengobatan termasuk Pelayanan Darurat karena kecelakaan, Kesehatan Gigi dan Mulut, Laboratorium, Upaya Kesehatan Kerja, Usia Lanjut, Upaya Kesehatan Jiwa, Mata, Upaya Kesehatan Lainnya dan Pencatatan dan Pelaporan.</li>
                                <li>Pembinaan Upaya Kesehatan, Peran serta Masyarakat, Koordinasi semua upaya Kesehatan, sarana Pelayanan Kesehatan, Pelaksanaan Pelayanan Rujukan Medik dan Rujukan Kesehatan, Pembinaan Teknis kepada Pustu, Sarana Pelayanan Kesehatan Lainnya dan Kader Pembangunan kesehatan.</li>
                                <li>Pengembangan Upaya Kesehatan dalam hal Pembangunan Kader Pembangunan Bidang Kesehatan di Wilayah dan pengembangan kegiatan Swadaya Masyarakat.</li>
                                <li>Pelaksanaan Tugas lain yang diberikan oleh Kepala Dinas Kesehatan.</li>
                            </ol>
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
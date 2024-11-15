<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet" />
        <link href="assets/fontawesome/css/brands.css" rel="stylesheet" />
        <link href="assets/fontawesome/css/solid.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/coba.css">
        <title>Beta</title>
    </head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-2">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/puskes.svg') }}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                    <span>PUSKESMAS MANYARAN</span>
                </a>
                <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"id="navmenu">
                    <ul class="navbar-nav ms-auto nav-underline">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">PROFIL</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('manyaran/motto') }}">Motto dan Tata Nilai</a></li>
                            <li><a class="dropdown-item" href="{{ url('manyaran/peta') }}">Tugas Fungsi dan Wewenang</a></li>
                            <li><a class="dropdown-item" href="{{ url('manyaran/tugas') }}">Peta Wilayah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">LAYANAN</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('manyaran/pendaftaran') }}">Pendaftaran</a></li>
                                <li><a class="dropdown-item" href="{{ url('manyaran/ukp') }}">UKP</a></li>
                                <li><a class="dropdown-item" href="{{ url('manyaran/ukm') }}">UKM</a></li>
                                <li><a class="dropdown-item" href="{{ url('manyaran/tarif-pelayanan') }}">Tarif Pelayanan</a></li>
                                <li><a class="dropdown-item" href="{{ url('manyaran/inovasi') }}">Inovasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">GALERI</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('manyaran/dokumentasi-kegiatan') }}">Dokumentasi Kegiatan</a></li>
                            <li><a class="dropdown-item" href="{{ url('manyaran/laporan-kegiatan') }}">Laporan Kegiatan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('manyaran/wbs') }}">WBS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('manyaran/ppid') }}">PPID</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('manyaran/contact') }}">KONTAK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- HEADER -->
        <section class="bg-light">
            <div class="container">
                <div class="header">
                    <div class="text-header">
                        <h1>PROFIL PUSKESMAS</h1>
                        <p>Puskesmas Manyaran, yang terletak di Kelurahan Kembangarum, Kecamatan Semarang Barat, tepatnya di Jalan Raya Abdul Rahman Saleh No. 267, melayani tiga kelurahan binaan, 
                            yaitu Kembangarum, Krapyak, dan Manyaran, dengan layanan kesehatan rawat jalan, serta memiliki Puskesmas Pembantu di Panjangan. Luas wilayah binaan Puskesmas mencapai 448,204 hektar, 
                            dengan batas-batas wilayah meliputi Kelurahan Ngemplak Simongan dan Tambak Harjo di utara, Kalibanteng Kidul di timur, Kecamatan Ngaliyan di selatan, dan Kecamatan Tugu di barat. Wilayah 
                            geografisnya terdiri dari dataran rendah berbukit di Manyaran dan Kembangarum, serta dataran rendah setinggi 19 meter di atas permukaan laut di Krapyak.</p>
                    </div>
                    <div class="wrapper">
                        <div class="slides">
                            <span id="slide-1"></span>
                            <span id="slide-2"></span>
                            <span id="slide-3"></span>
                            <div class="images">
                                <img src="images/image.png" class=" images img-fluid" alt="gambar">
                                <img src="images/imgg.jpg" class=" images img-fluid w-100" alt="gambar">
                                <img src="images/2.jpg" class=" images img-fluid w-100" alt="gambar">
                            </div>
                        </div>
                        <!-- Navigation -->
                        <div class="navigation">
                            <a href="#slide-1">1</a>
                            <a href="#slide-2">2</a>
                            <a href="#slide-3">3</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- Pembatas Jam Operasional -->
        <section class="bg-info-subtle text-dark p-4">
            <div class="container">
                <div class="d-flex flex-column align-items-center text-center">
                    <!-- Ikon Jam -->
                    <div class="mb-2">
                        <i class="bi bi-clock-fill text-primary" style="font-size: 2rem;"></i>
                    </div>
                    <!-- Judul Jam Operasional -->
                    <h3 class="text-primary-emphasis mb-3">Jam Operasional Layanan Puskesmas</h3>
                    <!-- Garis Pemisah -->
                    <hr class="w-50 mx-auto text-primary mb-3" style="opacity: 0.8;">
                    <!-- Waktu Operasional -->
                    <p class="mb-1">Senin - Kamis: 08.00 - 16.00</p>
                    <p class="mb-1">Jumat: 08.00 - 14.00</p>
                    <p class="mb-0">Sabtu & Minggu: Tutup</p>
                </div>
            </div>
        </section>

        <!-- Content -->
        <main class="bg-light">
            <!-- Visi, Misi Instansi -->
            <section class="bg-light">
                <div class="container">
                    <div class="content">
                        <img src="images/puskes.svg" class="img-custom" alt="logo">
                        <div id="Visi" class="text-visi">
                            <h2 class="text-justify">VISI</h2>
                            <p class="text-justify">"TERWUJUDNYA KOTA SEMARANG YANG SEMAKIN HEBAT YANG BERLANDASKAN PANCASILA, DALAM BINGKAI NKRI BER-BHINNEKA TUNGGAL IKA"</p>
                            <h2 class="text-justify">MISI</h2>
                            <ul>
                                <li><a>Meningkatkan kualitas dan kapasitas sumber daya manusia yang unggul dan produktif untuk mencapai kesejahteraan dan keadilan sosial</a></li>
                                <li><a>Meningkatkan potensi ekonomi lokal yang berdaya saing dan stimulasi pembangunan industri, berlandaskan riset dan inovasi berdasar prinsip demokrasi ekonomi pancasila</a></li>
                                <li><a>Menjamin kemerdekaan masyarakat menjalankan ibadah, pemenuhan hak dasar dan perlindungan kesejahteraan sosial serta hak asasi manusia bagi masyarakat secara berkeadilan</a></li>
                                <li><a>Mewujudkan infrastruktur berkualitas yang berwawasan lingkungan untuk mendukung kemajuan kota</a></li>
                                <li><a>Menjalankan reformasi birokrasi pemerintah secara dinamis dan menyusun produk hukum yang sesuai nilai-nilai pancasila dalam kerangka negara kesatuan republik indonesia</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Artikel Card -->
            <article class="artikel">
                <div class="title-container container">
                    <h2>{{ $title ?? 'Artikel' }}</h2>
                    <div class="underline"></div>
                </div>
                <section class="container news">
                    @foreach ($article as $artikel)
                        <div class="card">
                            <div class="card-image">
                            @if(is_array($artikel->picture) && !empty($artikel->picture))
                                <img src="{{ asset('storage/admin/' . $artikel->picture[0]) }}" class="card-img-top" alt="Article Image">
                            @else
                                <img src="{{ asset('/images/default.jpg') }}" class="card-img-top" alt="Default Image"> <!-- Default image -->
                            @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $artikel['title'] }}</h5>
                                <p class="card-text">{!! Str::limit($artikel['isi'], 100) !!}</p>
                            </div>
                            <div class="link">
                                <a href="{{ url('/manyaran/article/' . $artikel['slug']) }}">
                                        <button class="btn btn-link">Selengkapnya</button>
                                </a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated {{ $artikel['tanggal'] }}</small>
                            </div>
                        </div>
                    @endforeach
                </section>
                <div class="pagination-container container">
                    <div class="paginate">
                        {{ $article->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </article>
            <!-- Berita Card -->
            <article class="berita">
                <div class="title-container container">
                    <h2>{{ $title ?? 'Berita' }}</h2> <!-- Membuat judul dinamis -->
                    <div class="underline"></div>
                </div>
                <section class="container news">
                    @foreach ($utama as $news)
                        <div class="card">
                            <div class="card-image">
                            @if(is_array($news->picture) && !empty($news->picture))
                                <img src="{{ asset('storage/admin/' . $news->picture[0]) }}" class="card-img-top" alt="News Image">
                            @else
                                <img src="{{ asset('/images/default.jpg') }}" class="card-img-top" alt="Default Image"> <!-- Default image -->
                            @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $news['title'] }}</h5>
                                <p class="card-text">{!! Str::limit($news['isi'], 100) !!}</p>
                            </div>
                            <div class="link">
                                <a href="{{ url('/manyaran/news/' . $news['slug']) }}">
                                    <button class="btn btn-link">Selengkapnya</button>
                                </a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated {{ $news['tanggal'] }}</small>
                            </div>
                        </div>
                    @endforeach
                </section>
                <div class="pagination-container container">
                    <div class="paginate">
                        {{ $utama->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </article>
            <!-- Information Card -->
            <article class="info">
                <div class="title-container container">
                    <h2>{{ $title ?? 'Informasi' }}</h2> <!-- Membuat judul dinamis -->
                    <div class="underline"></div>
                </div>
                <section class="container news">
                    @foreach ($information as $info)
                        <div class="card">
                            <div class="card-image">
                            @if(is_array($info->picture) && !empty($info->picture))
                                <img src="{{ asset('storage/admin/' . $info->picture[0]) }}" class="card-img-top" alt="Information Image">
                            @else
                                <img src="{{ asset('/images/default.jpg') }}" class="card-img-top" alt="Default Image"> <!-- Default image -->
                            @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $info['title'] }}</h5>
                                <p class="card-text">{!! Str::limit($info['isi'], 100) !!}</p>
                            </div>
                            <div class="link">
                                <a href="{{ url('/manyaran/information/' . $info['slug']) }}">
                                    <button class="btn btn-link">Selengkapnya</button>
                                </a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated {{ $info['tanggal'] }}</small>
                            </div>
                        </div>
                    @endforeach
                </section>
                <div class="pagination-container container">
                    <div class="paginate">
                        {{ $information->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </article>
        </main>

        <!-- Footer -->
        <div class="footer ">
            <footer class="text-white text-center text-lg-start">
                <div class="container p-4">
                <div class="row mt-4">
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h4 class="text-uppercase mb-4">Puskesmas Manyaran</h4>
                    <p class="fs-6">
                    Puskesmas Manyaran terletak di Kelurahan Kembangarum Kecamatan Semarang Barat 
                    </p>

                    <p class="fs-6">
                    Puskesmas Manyaran mempunyai Puskesmas Pembantu yaitu 
                    Pustu Panjangan yang terletak di Kelurahan Manyaran.
                    </p>
                    <div class="mt-4">
                        <!-- Facebook -->
                        <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
                        <!-- Instagram -->
                        <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-instagram"></i></a>
                        <!-- Twitter -->
                        <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
                        <!-- Whatsapp -->
                        <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <div class="text-uppercas mb-4">
                            <h5>DINAS KESEHATAN KOTA SEMARANG</h5>
                        </div>
                        <div class="form-outline form-white mb-4">
                            <ul class="fa-ul" style="margin-left: 1.65em;">
                                <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Jl. Abdulrahman Saleh No.267, Kembangarum, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50183</span>
                                </li>
                                <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">puskesmas.manyaran@yahoo.com</span>
                                </li>
                                <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">(024) 7601883</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Jam Operasional</h5>
                    <table class="table text-center text-white">
                        <tbody class="fw-normal">
                        <tr>
                            <td>Senin - Kamis:</td>
                            <td>08.00 - 16.00</td>
                        </tr>
                        <tr>
                            <td>Jumat:</td>
                            <td>08.00 - 14.00</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://dinkes.semarangkota.go.id/">DKK Kota Semarang</a>
                </div>
            </footer>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
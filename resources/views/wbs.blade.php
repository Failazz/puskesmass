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
                <div class="content-section wbs">
                    <h2 class="text-center text-title mb-4">Whistleblowing System (WBS)</h2>
                    <small class="text-muted"><strong>Ditulis:</strong> 2024-04-03 </small>
                    
                    <h4 class="text-head">WHISTLEBLOWING SYSTEM UPTD PUSKESMAS MANYARAN</h4>
                    <p class="lead">
                        Jika Anda melihat atau mengetahui dugaan Tindak Pidana Korupsi atau bentuk pelanggaran lainnya yang dilakukan pegawai UPTD Puskesmas Manyaran, silahkan melapor ke Inspektorat UPTD Puskesmas Manyaran. Jika laporan Anda memenuhi syarat/kriteria, maka laporan Anda akan diproses lebih lanjut.
                    </p>

                    <div class="mt-4">
                        <h5 class="text">WHAT</h5>
                        <p>Apa perbuatan berindikasi Tindak Pidana Korupsi/pelanggaran yang diketahui.</p>
                    </div>

                    <div class="mt-3">
                        <h5 class="text">WHO</h5>
                        <p>Siapa yang bertanggungjawab/terlibat dan terkait dalam perbuatan tersebut.</p>
                    </div>

                    <div class="mt-3">
                        <h5 class="text">WHERE</h5>
                        <p>Dimana tempat terjadinya perbuatan tersebut dilakukan.</p>
                    </div>

                    <div class="mt-3">
                        <h5 class="text">WHEN</h5>
                        <p>Kapan waktu perbuatan tersebut dilakukan.</p>
                    </div>

                    <div class="mt-3">
                        <h5 class="text">HOW</h5>
                        <p>Bagaimana cara perbuatan tersebut dilakukan (modus, cara, dan sebagainya).</p>
                    </div>

                    <div class="mt-3">
                        <h5 class="text">EVIDENCE</h5>
                        <p>Dilengkapi dengan bukti permulaan (data, dokumen, gambar, dan rekaman) yang mendukung.</p>
                    </div>

                    <div class="mt-4 bg-light p-4 rounded">
                        <p class="fw-bold text-dark">Anda tidak perlu khawatir terungkapnya identitas diri Anda karena UPTD Puskesmas Manyaran akan <span class="text-danger">MERAHASIAKAN</span> dan <span class="text-danger">MELINDUNGI</span> identitas Anda sebagai whistleblower.</p>
                        <p>UPTD Puskesmas Manyaran sangat menghargai informasi yang Anda laporkan. Fokus kami kepada materi informasi yang Anda laporkan.</p>
                        <p><strong>Komitmen Kami:</strong> Sebagai bentuk terima kasih kami terhadap laporan yang Anda kirim, kami berkomitmen untuk merespon laporan Anda selambat-lambatnya 7 (tujuh) hari kerja sejak laporan Anda dikirim.</p>
                    </div>

                    <div class="text-center mt-5">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeM3Zt1RZ2GeIvnsr_WOgibVAjGdCXH8ZoQBwW3KQwKj_BuNw/viewform?embedded=true" class="btn btn-primary btn-lg">LAPOR WBS</a>
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
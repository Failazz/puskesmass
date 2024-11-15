<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome/css/brands.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome/css/solid.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/content.css') }}">
    <title>Beta</title>
</head>
<body>
    @include('layouts.header')

    <!-- Content -->
    <main class="container">
        <div class="row">
            <!-- Sidebar -->
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

            <!-- Main Content -->
            <div class="col-md-9">
                <section class="informasi news">
                    @foreach ($article as $artikel)
                        <article class="text-content flex-container"> 
                            <div class="text-content news-item">
                                <h3>{{ $artikel['title'] }}</h3>
                                <p class="text-muted mb-0">Ditulis {{ $artikel['tanggal'] }}</p>
                                <p>{{ Str::limit(strip_tags($artikel['isi']), 250) }}</p>
                                <a href="{{ url('/manyaran/article/' . $artikel['slug']) }}" class="read-more">Selengkapnya</a>
                            </div>
                        </article>
                    @endforeach
                    <div class="pagination">
                        {{ $article->links('pagination::bootstrap-4') }}
                    </div>
                </section>
            </div>
        </div>
    </main>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

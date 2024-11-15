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
                <!-- main -->
                <section class="content col-md-9">
                    <article class="news text-content flex-container"> 
                        <div class="text-content">
                            <h2 class="my-2">{{ $post['title'] }}</h2>
                            <small class="text-muted">Ditulis {{ $post->updated_at->diffForHumans() }}</small>
                        </div>

                        <?php $post_image = $post['picture']; ?>
                        @if (!empty($post_image) && count($post_image) > 0)
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                    
                                    @foreach ($post_image as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                            <img src="{{ asset('storage/admin/' . $image) }}" class="image d-block" alt="gambar">
                                        </div>
                                    @endforeach
                                </div>
                                
                                <!-- Navigation buttons -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        @else
                            <p class="text-center">   </p>
                        @endif

                        
                        <div class="text">
                            <p>
                            {!! $post['isi'] !!}
                            </p>
                            <a href="/" class="text-decoration-none">&laquo; Kembali</a>
                        </div>
                    </article>
                </section>
            </div>
        </main>
    @include('layouts.footer')
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
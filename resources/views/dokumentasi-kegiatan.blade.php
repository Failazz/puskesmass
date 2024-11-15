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

            <!-- PHOTO GALLERY -->
            <div class="col-md-9">
                <div class="photo-container">
                    <!-- Foto 1 -->
                    <div class="photo-item" style="background-image: url('images/image.png');">
                        <a href="images/image.png" class="icon" data-bs-toggle="modal" data-bs-target="#imageModal1">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc">
                            <h2><a href="work-single.html">SKRINING GRATIS</a></h2>
                        </div>
                    </div>

                    <!-- Foto 2 -->
                    <div class="photo-item" style="background-image: url('images/image.png');">
                        <a href="images/image.png" class="icon" data-bs-toggle="modal" data-bs-target="#imageModal2">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc">
                            <h2><a href="work-single.html">Cek Kesehatan</a></h2>
                        </div>
                    </div>

                    <!-- Foto 3 -->
                    <div class="photo-item" style="background-image: url('images/image.png');">
                        <a href="images/image.png" class="icon" data-bs-toggle="modal" data-bs-target="#imageModal3">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc">
                            <h2><a href="work-single.html">Vaksin</a></h2>
                        </div>
                    </div>

                    <!-- Foto 4 -->
                    <div class="photo-item" style="background-image: url('images/image.png');">
                        <a href="images/image.png" class="icon" data-bs-toggle="modal" data-bs-target="#imageModal4">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc">
                            <h2><a href="work-single.html">Imunisasir</a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Lightbox -->
            <div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="images/image.png" alt="Image 1" class="img-fluid">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel2" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="images/image.png" alt="Image 2" class="img-fluid">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="imageModal3" tabindex="-1" aria-labelledby="imageModalLabel3" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="images/image.png" alt="Image 3" class="img-fluid">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="imageModal4" tabindex="-1" aria-labelledby="imageModalLabel4" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="images/image.png" alt="Image 4" class="img-fluid">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                    <span class="page-link">2</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    @include('layouts.footer')
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
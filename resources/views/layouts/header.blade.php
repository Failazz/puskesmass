
<link href="{{ asset('assets/fontawesome/css/brands.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/fontawesome/css/solid.css') }}" rel="stylesheet" />
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
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">PROFILE</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('manyaran/motto') }}">Motto dan Tata Nilai</a></li>
                                <li><a class="dropdown-item" href="{{ url('manyaran/tugas') }}">Tugas Fungsi dan Wewenang</a></li>
                                <li><a class="dropdown-item" href="{{ url('manyaran/peta') }}">Peta Wilayah</a></li>
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
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">GALERY</a>
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
                            <a class="nav-link" href="{{ url('manyaran/contact') }}">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
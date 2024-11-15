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
                <div class="content-section ukm-services">
                    <h2>UPAYA KESEHATAN MASYARAKAT (UKM)</h2>
                    <small class="text-muted"><strong>Ditulis:</strong> 2024-10-28 </small>
                    <div>
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>UKM Esensial</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>1</td><td>Pendampingan ibu hamil dan nifas</td></tr>
                                <tr><td>2</td><td>Kelas ibu hamil</td></tr>
                                <tr><td>3</td><td>Pemantauan neonatus dan bayi</td></tr>
                                <tr><td>4</td><td>Kelas balita</td></tr>
                                <tr><td>5</td><td>SDIDTK</td></tr>
                                <tr><td>6</td><td>Pemeriksaan kesehatan remaja dan pemberian tablet Fe</td></tr>
                                <tr><td>7</td><td>Poksila</td></tr>
                                <tr><td>8</td><td>Pemeriksaan mental emosional dan kemandirian</td></tr>
                                <tr><td>9</td><td>Pelatihan dokter kecil</td></tr>
                                <tr><td>10</td><td>Penjaringan anak sekolah dan pemeriksaan kesehatan berkala</td></tr>
                                <tr><td>11</td><td>UKGS tahap II dan III</td></tr>
                                <tr><td>12</td><td>Pelatihan guru UKS</td></tr>
                                <tr><td>13</td><td>Posbindu dengan layanan pemeriksaan lengkap</td></tr>
                                <tr><td>14</td><td>Pelayanan gizi masyarakat</td></tr>
                                <tr><td>15</td><td>Pelayanan gizi di Posyandu</td></tr>
                                <tr><td>16</td><td>Pemantauan status gizi balita dan bumil resti</td></tr>
                                <tr><td>17</td><td>Pemantauan status gizi balita</td></tr>
                                <tr><td>18</td><td>Pemantauan kadarzi dan garam beryodium</td></tr>
                                <tr><td>19</td><td>Pengawasan dan Pengendalian Kualitas Air, TTU, TPM, dan pemukiman</td></tr>
                                <tr><td>20</td><td>Pembinaan Penyahatan Lingkungan Sehat</td></tr>
                                <tr><td>21</td><td>Kampanye PHBS</td></tr>
                                <tr><td>22</td><td>Penyuluhan Program Kesehatan</td></tr>
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
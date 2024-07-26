@extends('layouts.app')

@section('content')
<div class="container col-xxl-8 px-4">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-2">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/logoNu1.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Pencak Silat Pagar Nusa - Cabang OKI</h1>
            <p class="lead">PENCAK SILAT NAHDLATUL ULAMA PAGARNUSA adalah organisasi yang mewadahi Pencak Silat di bawah naungan Nahdlatul Ulama yang berdiri pada 22 Rabi'ul Akhir 1406 H / 03 Januari 1986 M di Pondok Pesantren Lirboyo Kediri, Jawa Timur dengan Penggagas Pertamanya adalah Drs. KH. Muhammad Nur Aziz dan Ketua Umum pertamanya adalah KH. Abdulloh Maksum Jauhari dalam rangka menyatukan dan mewadahi sejumlah perguruan silat NU yang dahulunya beragam dan berdiri sendiri-sendiri.</p>
            <!--
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
            </div>
-->
        </div>
    </div>
</div>
<div class="hero">
    <h1>Tentang Kami</h1>
    <p>PENCAK SILAT NAHDLATUL ULAMA PAGARNUSA adalah organisasi yang mewadahi Pencak Silat di bawah naungan Nahdlatul Ulama yang berdiri pada 22 Rabi'ul Akhir 1406 H / 03 Januari 1986 M di Pondok Pesantren Lirboyo Kediri, Jawa Timur dengan Penggagas Pertamanya adalah Drs. KH. Muhammad Nur Aziz dan Ketua Umum pertamanya adalah KH. Abdulloh Maksum Jauhari dalam rangka menyatukan dan mewadahi sejumlah perguruan silat NU yang dahulunya beragam dan berdiri sendiri-sendiri.[1] Hingga saat ini PSNU PAGARNUSA memiliki nama resmi "Pencak Silat Nahdlatul Ulama Pagarnusa".[2] PSNU PAGARNUSA berdiri sebagai badan otonom di bawah naungan Nahdlatul Ulama yang berbasis gerakan dalam melaksanakan kebijakan NU pada pengembangan seni, budaya, tradisi, olahraga pencak silat, pengobatan alternatif, dan pengabdian masyarakat.</p>
</div>

<div class="container">
    <div class="section text-center">
        <h2>Galeri</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="assets/logoNu1.png" class="img-fluid rounded" alt="Gallery 1">
            </div>
            <div class="col-md-4">
                <img src="assets/pencak-silat-background.jpg" class="img-fluid rounded" alt="Gallery 2">
            </div>
            <div class="col-md-4">
                <img src="assets/pencak-silat-background1.jpg" class="img-fluid rounded" alt="Gallery 3">
            </div>
            <div class="col-md-4">
                <img src="assets/pencak-silat-background.jpg" class="img-fluid rounded" alt="Gallery 2">
            </div>
            <div class="col-md-4">
                <img src="assets/pencak-silat-background1.jpg" class="img-fluid rounded" alt="Gallery 3">
            </div>
            <div class="col-md-4">
                <img src="assets/logoNu1.png" class="img-fluid rounded" alt="Gallery 1">
            </div>
            
        </div>
    </div>

    <div class="section text-center">
        <h2>Hubungi Kami</h2>
        <p>Untuk Informasi, Silahkan Email ke<a href="mailto:info@pagarnusa.com">info@pagarnusa.com</a> Atau Telepon ke +62 123 4567 890</p>
    </div>
</div>
@endsection
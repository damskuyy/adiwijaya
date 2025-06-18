@extends('fe.master')
@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Tentang Kami</h1>
                <a href="/home" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="/about" class="h5 text-white">Tentang</a>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
                        <h1 class="mb-0">Solusi Mesin Fabrikasi Terbaik dengan Pengalaman Lebih dari 10 Tahun di Industri
                        </h1>
                    </div>
                    <p class="mb-4">PT. Adiwijaya Mega Tama bergerak dibidang pengerjaan logam khususnya Machining,
                        Fabrikasi, dan Konstruksi pembuatan dan reparasi komponen mesin industri.</p>
                    <p class="mb-4">SEJARAH PERUSAHAAN, bermula dari Bengkel Bubut dan Las , yang mulai beroperasi pada tahun
                        1997. Kami bertekad untuk terus meningkatkan Kualitas, Fasilitas dan memenuhi kebutuhan Pelanggan
                        akan kebutuhan komponen dan mesin untuk industri, seiring dengan permintaan dan pertumbuhan
                        Industri yang semakin meningkat Kami ingin berupaya bisa menjadi mitra kerja dengan menjalin
                        kerjasama yang bisa mendukung proses tersebut.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Lulus Perizinan</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Karyawan Professional</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Akses Pasar Mudah</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Harga Terjangkau</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Hubungi nomor berikut untuk informasi lebih lanjut</h5>
                            <h4 class="text-primary mb-0">+62 856 4399 2099</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex flex-column align-items-center">
                    <img src="fe/img/team.png" 
                        class="rounded wow zoomIn mb-4" 
                        data-wow-delay="0.9s"
                        style="width: 800px; max-width: 100%; height: auto; display: block;">
                    <div class="d-flex justify-content-center gap-3 w-100 flex-wrap">
                        <div class="card shadow-sm mb-3" style="width: 180px; min-width: 150px;">
                            <div class="card-body p-3">
                                <h5 class="card-title text-primary fw-bold mb-2">Visi</h5>
                                <p class="card-text mb-0" style="font-size: 0.95em;">
                                    Menjadi mitra bagi industri dalam mendukung kelancaran proses produksi, kebutuhan
                                    sparepart industry, dan menjadi Perusahaan yang terpercaya yang mengedepankan
                                    kualitas dan harga yang kompetitif.
                                </p>
                            </div>
                        </div>
                        <div class="card shadow-sm mb-3" style="width: 180px; min-width: 150px;">
                            <div class="card-body p-3">
                                <h5 class="card-title text-primary fw-bold mb-2">Misi</h5>
                                <ul class="mb-0 ps-3" style="font-size: 0.95em;">
                                    <li>Menjadi pemasok kebutuhan Teknik & Industri Kawasan Jabodetabek dan sekitarnya, dengan terus meningkatkan QCD (quality, cost & delivery) yang handal.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
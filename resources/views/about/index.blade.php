@extends('fe.master')
@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                <a href="/home" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="/about" class="h5 text-white">About</a>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">
                            The Best Fabrication Machine Solutions with Over 10 Years of Experience in the Industry
                        </h1>
                    </div>
                    <p class="mb-4">PT. Adiwijaya Mega Tama is engaged in metalworking, particularly machining, fabrication, and construction for the manufacture and repair of industrial machine components.</p>
                    <p class="mb-4">COMPANY HISTORY, starting from a Lathe and Welding Workshop, which began operations in 1997. We are committed to continuously improving Quality, Facilities, and meeting Customer needs for components and machinery for industry, in line with increasing demand and growth in the industry. We strive to become a partner by establishing cooperation that can support this process.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Licensed</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Employee</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Easy Market Access</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Affordable Access</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Please contact the following number for further information</h5>
                            <h4 class="text-primary mb-1">
                                <a href="https://wa.me/6281128021212" target="_blank" style="text-decoration: none; color: inherit;">
                                    +62 811-2802-1212
                                </a>
                            </h4>
                            <h4 class="text-primary mb-0">
                                <a href="https://wa.me/6285643992099" target="_blank" style="text-decoration: none; color: inherit;">
                                    +62 856-4399-2099
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex flex-column align-items-center">
                    <img src="/img/team.png" 
                        class="rounded wow zoomIn mb-4" 
                        data-wow-delay="0.9s"
                        style="width: 800px; max-width: 100%; height: auto; display: block;">
                    <div class="d-flex justify-content-center gap-3 w-100 flex-wrap">
                        <div class="card shadow-sm mb-3" style="width: 180px; min-width: 150px;">
                            <div class="card-body p-3">
                                <h5 class="card-title text-primary fw-bold mb-2">Vision</h5>
                                <p class="card-text mb-0" style="font-size: 0.95em;">
                                    Becoming a partner for the industry in supporting smooth production processes, meeting industry spare part needs, and becoming a trusted company that prioritises quality and competitive prices.
                                </p>
                            </div>
                        </div>
                        <div class="card shadow-sm mb-3" style="width: 180px; min-width: 150px;">
                            <div class="card-body p-3">
                                <h5 class="card-title text-primary fw-bold mb-2">Mission</h5>
                                <ul class="mb-0 ps-3" style="font-size: 0.95em;">
                                    <li>Becoming a supplier of technical and industrial needs for the Greater Jakarta area and its surroundings, while continuously improving reliable QCD (quality, cost, and delivery).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('client')
    @include('fe.client')
    
@endsection
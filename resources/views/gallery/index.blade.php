@extends('fe.master')
@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Gallery</h1>
                <a href="/home" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="/gallery" class="h5 text-white">Gallery</a>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Gallery</h5>
            <h1 class="mb-0">Our Best Project Documentation & Fabrication Activities</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery1.png') }}" class="card-img-top" alt="Gallery 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery3.png') }}" class="card-img-top" alt="Gallery 2">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery8.png') }}" class="card-img-top" alt="Gallery 3">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery6.png') }}" class="card-img-top" alt="Gallery 4">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery4.png') }}" class="card-img-top" alt="Gallery 5">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery7.png') }}" class="card-img-top" alt="Gallery 6">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery2.png') }}" class="card-img-top" alt="Gallery 7">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery10.png') }}" class="card-img-top" alt="Gallery 8">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery14.jpg') }}" class="card-img-top" alt="Gallery 9">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery11.png') }}" class="card-img-top" alt="Gallery 10">
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery12.jpg') }}" class="card-img-top" alt="Gallery 6">
                </div>
            </div> --}}
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery9.png') }}" class="card-img-top" alt="Gallery 11">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery20.jpg') }}" class="card-img-top" alt="Gallery 12">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery18.jpg') }}" class="card-img-top" alt="Gallery 13">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery17.jpg') }}" class="card-img-top" alt="Gallery 14">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery19.jpg') }}" class="card-img-top" alt="Gallery 15">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery24.jpg') }}" class="card-img-top" alt="Gallery 16">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery21.jpg') }}" class="card-img-top" alt="Gallery 17">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery26.jpg') }}" class="card-img-top" alt="Gallery 18">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery23.jpg') }}" class="card-img-top" alt="Gallery 19">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery22.jpg') }}" class="card-img-top" alt="Gallery 20">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery25.jpg') }}" class="card-img-top" alt="Gallery 21">
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/gallery15.jpg') }}" class="card-img-top" alt="Gallery 6">
                </div>
            </div> --}}
        </div>
    </div>
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Gallery</h5>
            <h1 class="mb-0">Awards We Have Received So Far</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/sertifikat1.jpg') }}" class="card-img-top" alt="Gallery 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/sertifikat2.jpg') }}" class="card-img-top" alt="Gallery 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/sertifikat3.jpg') }}" class="card-img-top" alt="Gallery 1">
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/sertifikat5.png') }}" class="card-img-top" alt="Gallery 1">
                </div>
            </div> --}}
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/sertifikat4.png') }}" class="card-img-top" alt="Gallery 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/sertifikat6.png') }}" class="card-img-top" alt="Gallery 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('/img/sertifikat7.png') }}" class="card-img-top" alt="Gallery 1">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('client')
    @include('fe.client')
@endsection
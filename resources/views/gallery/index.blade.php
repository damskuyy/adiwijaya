@extends('fe.master')
@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Galeri</h1>
                <a href="/home" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="/gallery" class="h5 text-white">Galeri</a>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Galeri</h5>
            <h1 class="mb-0">Dokumentasi Proyek & Aktivitas Fabrikasi Terbaik Kami</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery1.png') }}" class="card-img-top" alt="Gallery 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery3.png') }}" class="card-img-top" alt="Gallery 2">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery8.png') }}" class="card-img-top" alt="Gallery 3">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery13.jpg') }}" class="card-img-top" alt="Gallery 4">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery6.png') }}" class="card-img-top" alt="Gallery 5">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery7.png') }}" class="card-img-top" alt="Gallery 6">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery2.png') }}" class="card-img-top" alt="Gallery 7">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery10.png') }}" class="card-img-top" alt="Gallery 8">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery14.jpg') }}" class="card-img-top" alt="Gallery 9">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery11.png') }}" class="card-img-top" alt="Gallery 10">
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery12.jpg') }}" class="card-img-top" alt="Gallery 6">
                </div>
            </div> --}}
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery9.png') }}" class="card-img-top" alt="Gallery 11">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery4.png') }}" class="card-img-top" alt="Gallery 12">
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('fe/img/gallery15.jpg') }}" class="card-img-top" alt="Gallery 6">
                </div>
            </div> --}}
        </div>
    </div>
@endsection
@section('client')
    @include('fe.client')
@endsection
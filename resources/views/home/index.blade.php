@extends('fe.master')
@section('carousel')
    @include('fe.carousel')
@endsection
@section('about')
    @include('fe.about')
@endsection
@section('features')
    @include('fe.features')
@endsection
@section('produk')
    <!-- Product Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Products</h5>
                <h1 class="mb-0">Superior in Function, Strong in Quality</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="/img/lift-barang.png" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Lift Barang</h4>
                            {{-- <p class="text-uppercase m-0">Designation</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="/img/mixing-tank.jpg" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Mixing tank</h4>
                            {{-- <p class="text-uppercase m-0">Designation</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="/img/mesin-oven.jpg" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Mesin Oven</h4>
                            {{-- <p class="text-uppercase m-0">Designation</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 wow slideInUp" data-wow-delay="1.2s">
                <a href="/product" class="btn btn-primary btn-lg px-5 mt-2">Find More</a>
            </div>
        </div>
    </div>
    <!-- Product End -->
@endsection
@section('client')
    @include('fe.client')
@endsection
@extends('fe.master')
@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                    <a href="/home" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="/contact" class="h5 text-white">Contact</a>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">If you have any questions, please contact us</h1>
            </div>
            <div class="row g-4 mb-5 justify-content-center">
                <div class="col-lg-4 col-md-6" >
                    <a href="https://wa.me/6281128021212" target="_blank" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 text-center p-3 hover-animate">
                            <div class="mx-auto mb-3 bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white fs-4"></i>
                            </div>
                            <h5 class="mb-2">Contact us to ask any questions</h5>
                            <h4 class="text-primary mb-0">+62 811-2802-1212</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" >
                    <a href="https://wa.me/6285643992099" target="_blank" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 text-center p-3 hover-animate">
                            <div class="mx-auto mb-3 bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white fs-4"></i>
                            </div>
                            <h5 class="mb-2">Contact us to ask any questions</h5>
                            <h4 class="text-primary mb-0">+62 856-4399-2099</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="mailto:adiwijayamegatama@gmail.com" target="_blank" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 text-center p-3 hover-animate">
                            <div class="mx-auto mb-3 bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                <i class="fa fa-envelope-open text-white fs-4"></i>
                            </div>
                            <h5 class="mb-2">Email to ask anything</h5>
                            <h4 class="text-primary mb-0">adiwijayamegatama@gmail.com</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" >
                <div class="col-lg-4 col-md-6" ></div>
                    <a href="https://maps.app.goo.gl/hPiJ73FECVgnbJqFA" target="_blank" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 text-center p-3 hover-animate" >
                            <div class="mx-auto mb-3 bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                <i class="fa fa-map-marker-alt text-white fs-4"></i>
                            </div>
                            <h5 class="mb-2">Visit our office</h5>
                            <h4 class="text-primary mb-0">Jl. Pahlawan No. 262 Sanja, Citeureup - Bogor</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    @if(session('success'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: '{{ session('success') }}',
                            confirmButtonColor: '#3085d6'
                        });
                    </script>
                    @endif
                    <form method="POST" action="{{ route('send.email') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.7443241136566!2d106.86620765483993!3d-6.505340839246589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c0fefdf1d683%3A0xe6b616d815a21b4b!2sAdiwijaya%20Teknik!5e1!3m2!1sid!2sid!4v1749885320655!5m2!1sid!2sid" style="min-height: 350px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    {{-- <form action="" id="delete" method="POST">
        @method('delete')
        @csrf 
    </form>
        
    <script>
        const body = document.getElementById('body')
        const form = document.getElementById('delete')

        function hapus(event, el){
            event.preventDefault()
            swal({
                title: "Are you sure?",
                text: "Your will delete this package permanently!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
                },
                function(){
                    form.setAttribute('action', el.getAttribute('href'))
                    form.submit()
                });
        }

        function tampil_pesan(){
            const pesan = "{{session('pesan')}}"

            if(pesan.trim() !== ''){
                swal('Good Job', pesan, 'success')
            }
        }

        body.onload = function(){
            tampil_pesan()
        }
    </script> --}}
@endsection
@section('client')
    @include('fe.client')
@endsection
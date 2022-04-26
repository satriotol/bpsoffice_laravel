@extends('layouts.main')
@section('content')
    <section id="hero">
        <div class="owl-carousel">
            @foreach ($sliders as $slider)
                <div>
                    <img class="owl-carousel-img" src="{{ $slider->image }}" alt="">
                </div>
            @endforeach
    </section>
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Unit</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('1.png') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="title">Card title</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('2.jpg') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="title">Card title</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('1.png') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="title">Card title</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('1.png') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="title">Card title</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->
    </main>
@endsection
@push('style')
    <style>
        img.owl-carousel-img {
            height: 500px;
            object-fit: cover;
            object-position: center;
        }

    </style>
@endpush
@push('scripts')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
            });
        });
    </script>
@endpush

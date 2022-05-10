@extends('layouts.main')
@push('style')
    <style>
        .jumbotron {
            background: url("{{ asset('uploads/' . $image->image_gallery) }}") rgba(0, 156, 234, 0.7);
            background-size: cover;
            background-position: center;
            background-blend-mode: multiply;
            filter: drop-shadow(0px -27px 32px black);
        }

    </style>
@endpush
@section('content')
    <main id="main" style="padding: 60px 0px">
        <div class="jumbotron jumbotron-fluid" style="padding: 120px 0px">
        </div>
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title aos-init aos-animate" data-aos="fade-up">
                    <h2>Galeri</h2>
                </div>

                <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200"
                    style="position: relative; height: 1025.96px;">
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('uploads/' . $gallery->image) }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ asset('uploads/' . $gallery->image) }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    </main>
@endsection

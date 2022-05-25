@extends('layouts.main')
@push('style')
    <style>
        .jumbotron {
            background: url("{{ asset('uploads/' . $menu->slider) }}");
            background-size: cover;
            background-position: center;
            background-blend-mode: multiply;
            filter: drop-shadow(0px -27px 32px black);
        }

        .news-box {
            background: #fff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0px 5px 15px 0 rgb(0 0 0 / 7%);
        }

        .news-content {
            padding: .5rem
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
                    <h2>{{ $menu->name }}</h2>
                </div>
                @if ($menu->type === 'GAMBAR')
                    <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200"
                        style="position: relative; height: 1025.96px;">
                        @foreach ($menu->menu_galleries as $gallery)
                            <div class="col-lg-4 col-md-6 portfolio-item">
                                <div class="portfolio-wrap">
                                    <img src="{{ asset('uploads/' . $gallery->image) }}" class="img-fluid" alt="">
                                    <div class="portfolio-links">
                                        <a href="{{ asset('uploads/' . $gallery->image) }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                                class="bx bx-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-12">
                            <div class="news-box p-4">
                                {!! $menu->menu_descriptions->first()->description ?? '' !!}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </main>
@endsection

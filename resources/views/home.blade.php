@extends('layouts.main')
@push('style')
    <style>
        .card-unit {
            box-shadow: 0 10px 29px 0 rgb(68 88 144 / 10%);
            transition: all 0.3s ease-in-out;
            border-radius: 4px;
            border-bottom: 3px solid #fff;
        }

        .card-unit:hover {
            border-color: #2282ff;
            transform: translateY(-5px);
        }

    </style>
@endpush
@section('content')
    <section id="hero">
        <div class="owl-carousel">
            @foreach ($sliders as $slider)
                <div>
                    <img class="owl-carousel-img" src="{{ asset('uploads/' . $slider->image) }}" alt="">
                </div>
            @endforeach
    </section>
    <main id="main">
        <section id="about" class="about pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 aos-init aos-animate" data-aos="zoom-in">
                        <a href="{{ asset('uploads/' . $about->image) }}" class="glightbox">
                            <img src="{{ asset('uploads/' . $about->image) }}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-contents-center aos-init aos-animate"
                        data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">
                            <h3>Tentang Kami</h3>
                            {!! $about->description !!}
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="features" class="features">
            <div class="container">
                <div class="section-title aos-init aos-animate" data-aos="fade-up">
                    <h2>Nilai Nilai Perusahaan</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
                        <ul class="nav nav-tabs flex-column">
                            @foreach ($values as $value)
                                @if ($loop->first)
                                    <li class="nav-item" data-aos="fade-up">
                                        <div class="nav-link active show" data-bs-toggle="tab"
                                            href="#tab-{{ $value->id }}">
                                            <h4>{{ $value->name }}</h4>
                                            <p>{{ $value->address }}</p>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item" data-aos="fade-up">
                                        <div class="nav-link" data-bs-toggle="tab" href="#tab-{{ $value->id }}">
                                            <h4>{{ $value->name }}</h4>
                                            <p>{{ $value->address }}</p>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
                        <div class="tab-content">
                            @foreach ($values as $value)
                                @if ($loop->first)
                                    <div class="tab-pane active show" id="tab-{{ $value->id }}">
                                        <figure>
                                            <a href="{{ asset('uploads/' . $value->image) }}" class="glightbox">
                                                <img src="{{ asset('uploads/' . $value->image) }}" alt=""
                                                    class="img-fluid">
                                            </a>
                                        </figure>
                                    </div>
                                @else
                                    <div class="tab-pane" id="tab-{{ $value->id }}">
                                        <figure>
                                            <a href="{{ asset('uploads/' . $value->image) }}" class="glightbox">
                                                <img src="{{ asset('uploads/' . $value->image) }}" alt=""
                                                    class="img-fluid">
                                            </a>
                                        </figure>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="services section-bg">
            <div class="container">
                <div class="section-title aos-init aos-animate" data-aos="fade-up">
                    <h2>Unit</h2>
                </div>
                <div class="row">
                    @foreach ($units as $unit)
                        <div class="col-md-6 col-lg-3 aos-init aos-animate mb-2" data-aos="zoom-in">
                            <div class="card" style="height:100%">
                                <a href="{{ asset('uploads/' . $unit->image) }}" class="glightbox">
                                    <img src="{{ asset('uploads/' . $unit->image) }}" class="card-img-top"
                                        style="height: 200px; width:100%;object-fit:cover; background-color: white;">
                                </a>
                                <div class="card-body card-unit">
                                    <h5 class="card-title">{{ $unit->name }}</h5>
                                    <p class="card-text">
                                        Alamat : {{ $unit->address }} <br>
                                        Telepon : {{ $unit->phone }}
                                    </p>
                                    <div class="text-center">
                                        <a href="{{ route('detail_unit', $unit->id) }}"
                                            class="btn-primary-custom">Kunjungi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="cta" class="cta">
            <div class="container">

                <div class="row aos-init aos-animate" data-aos="zoom-in">
                    <div class="col-lg-12 text-center text-lg-start">
                        <h3>INVESTASI</h3>
                        {!! $about->investation !!}
                    </div>
                </div>

            </div>
        </section>
        <section id="clients" class="clients">
            <div class="container">
                <div class="section-title aos-init aos-animate" data-aos="fade-up">
                    <h2>Partner</h2>
                </div>
                <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
                    @foreach ($partners as $partner)
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="client-logo aos-init aos-animate" data-aos="zoom-in">
                                <a href="{{ $partner->url }}" class="text-center" target="_blank">
                                    <img src="{{ asset('uploads/' . $partner->image) }}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
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
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true
            });
        });
    </script>
@endpush

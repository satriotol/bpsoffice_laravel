@extends('layouts.main')
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
                        <img src="{{ asset('uploads/' . $about->image) }}" class="img-fluid" alt="">
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
                    <h2>Unit</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
                        <ul class="nav nav-tabs flex-column">
                            @foreach ($units as $unit)
                                @if ($loop->first)
                                    <li class="nav-item" data-aos="fade-up">
                                        <div class="nav-link active show" data-bs-toggle="tab"
                                            href="#tab-{{ $unit->id }}">
                                            <h4>{{ $unit->name }}</h4>
                                            <p>{{ $unit->address }}</p>
                                            <div style="text-align: right">
                                                <a href="{{ route('detail_unit', $unit->id) }}"
                                                    class="btn-primary-custom">Kunjungi</a>
                                            </div>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item" data-aos="fade-up">
                                        <div class="nav-link" data-bs-toggle="tab" href="#tab-{{ $unit->id }}">
                                            <h4>{{ $unit->name }}</h4>
                                            <p>{{ $unit->address }}</p>
                                            <div style="text-align: right">
                                                <a href="{{ route('detail_unit', $unit->id) }}"
                                                    class="btn-primary-custom">Kunjungi</a>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
                        <div class="tab-content">
                            @foreach ($units as $unit)
                                @if ($loop->first)
                                    <div class="tab-pane active show" id="tab-{{ $unit->id }}">
                                        <figure>
                                            <img src="{{ asset('uploads/' . $unit->image) }}" alt=""
                                                class="img-fluid">
                                        </figure>
                                    </div>
                                @else
                                    <div class="tab-pane" id="tab-{{ $unit->id }}">
                                        <figure>
                                            <img src="{{ asset('uploads/' . $unit->image) }}" alt=""
                                                class="img-fluid">
                                        </figure>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
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
            });
        });
    </script>
@endpush

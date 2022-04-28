@extends('layouts.main')
@push('style')
    <style>
        .jumbotron {
            background: url("{{ asset('1.png') }}") rgba(0, 156, 234, 0.7);
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
        <section class="gallery mt-3">
            <div class="container">
                <div class="section-title aos-init aos-animate" data-aos="fade-up">
                    <h2>Galeri</h2>
                </div>
                <div class="row">
                    @foreach ($galleries as $gallery)
                        <div class="col-md-4 mb-2">
                            <a href="{{ $gallery->image }}" class="glightbox">
                                <img src="{{ $gallery->image }}" style="height: 100%"
                                    class="img-fluid aos-init aos-animate" data-aos="zoom-in">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

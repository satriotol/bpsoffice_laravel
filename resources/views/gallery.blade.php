@extends('layouts.main')
@push('style')
    <style>
        .jumbotron {
            background: url("{{ asset('1.png') }}") rgba(0, 156, 234, 0.7);
            background-size: cover;
            background-position: center;
            background-blend-mode: multiply;
        }

    </style>
@endpush
@section('content')
    <main id="main" style="padding: 60px 0px">
        <div class="jumbotron jumbotron-fluid" style="padding: 120px 0px">
            <div class="container text-center">
                <h1 class="font-weight-bold" style="color: white">Galeri</h1>
            </div>
        </div>
        <section class="gallery mt-3">
            <div class="container">
                <div class="row">
                    @foreach ($galleries as $gallery)
                        <div class="col-md-4">
                            <a href="{{ $gallery->image }}" class="glightbox">
                                <img src="{{ $gallery->image }}" style="height: 100%" class="img-fluid" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

@extends('layouts.main')
@section('content')
    <div class="owl-carousel">
        <div><img class="owl-carousel-img" src="{{ asset('1.png') }}" alt=""></div>
        <div><img class="owl-carousel-img" src="{{ asset('2.jpg') }}" alt=""></div>
    </div>
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

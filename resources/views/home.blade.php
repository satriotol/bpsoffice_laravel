@extends('layouts.main')
@section('content')
    <div class="owl-carousel">
        <div> Your Content </div>
        <div> Your Content </div>
    </div>
@endsection
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

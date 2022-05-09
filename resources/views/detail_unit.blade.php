@extends('layouts.main')
@push('style')
    <style>
        .jumbotron {
            background: url("{{ asset('uploads/' . $unit->image) }}") rgba(59, 59, 59, 0.7);
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
        <section id="features" class="features">
            <div class="container">
                <div class="section-title aos-init aos-animate" data-aos="fade-up">
                    <h2>{{ $unit->name }}</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="news-box p-4">
                            {!! $unit->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

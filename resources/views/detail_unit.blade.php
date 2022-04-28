@extends('layouts.main')
@section('content')
    <main id="main">
        <section id="features" class="features pt-0">
            <div class="container">
                <div class="section-title aos-init aos-animate" data-aos="fade-up">
                    <h2>Unit</h2>
                </div>
                {!! $unit->description !!}
            </div>
        </section>
    </main>
@endsection

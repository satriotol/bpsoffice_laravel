@extends('layouts.main')
@push('style')
    <style>
        .jumbotron {
            background: url("{{ asset('uploads/' . $image->image_contact) }}");
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
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title aos-init aos-animate" data-aos="fade-up">
                    <h2>Kontak</h2>
                </div>
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-right">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Alamat:</h4>
                                <p>{{ $about->address }}</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>{{ $about->email }}</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Phone</h4>
                                <p>{{ $about->phone }}</p>
                            </div>
                            <iframe
                                src="https://maps.google.com/maps?q={{ $about->lat }},{{ $about->lng }}&amp;output=embed"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="">
                            </iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-left">
                        <form action="{{ route('contact') }}" method="" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="form-control" id="name" required="">
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required="">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Subjek</label>
                                <input type="text" class="form-control" name="subject" id="subject" required="">
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Pesan</label>
                                <textarea class="form-control" name="message" rows="10" required=""></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
    </main>
@endsection

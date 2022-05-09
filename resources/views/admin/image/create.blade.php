@extends('admin.layouts.main')
@push('style')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <style>
        #map {
            height: 500px;
        }

    </style>
@endpush
@section('content')
    <div class="section-header">
        <h1>Gambar Menu Form</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Gambar Menu Form</h2>
        @include('admin.partials.errors')
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Gambar Menu</h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="@isset($image) {{ route('image.update', $image->id) }} @endisset @empty($image) {{ route('image.store') }} @endempty"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($image)
                                @method('PUT')
                            @endisset
                            <div class="form-group">
                                <label>Gambar Gallery</label>
                                <input type="file" name="image_gallery" class="form-control" accept="image/*">
                            </div>
                            @isset($image)
                                <img src="{{ asset('uploads/' . $image->image_gallery) }}" style="height: 100px" alt="">
                            @endisset
                            <div class="form-group">
                                <label>Gambar Kontak</label>
                                <input type="file" name="image_contact" class="form-control" accept="image/*">
                            </div>
                            @isset($image)
                                <img src="{{ asset('uploads/' . $image->image_contact) }}" style="height: 100px" alt="">
                            @endisset
                            <div class="form-group">
                                <label>Gambar Karir</label>
                                <input type="file" name="image_carrier" class="form-control" accept="image/*">
                            </div>
                            @isset($image)
                                <img src="{{ asset('uploads/' . $image->image_carrier) }}" style="height: 100px" alt="">
                            @endisset
                            <div class="text-right">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

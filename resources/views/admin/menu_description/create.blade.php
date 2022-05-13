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
        <h1>Menu Deskripsi Form</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Menu Deskripsi Form</h2>
        @include('admin.partials.errors')
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Menu Deskripsi</h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="@isset($menu_description) {{ route('menu_description.update', $menu_description->id) }} @endisset @empty($menu_description) {{ route('menu_description.store') }} @endempty"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($menu_description)
                                @method('PUT')
                            @endisset
                            <input type="text" name="menu_id" value="{{ $menu->id }}" class="d-none">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="description" class="summernote" cols="30" rows="10"
                                    required>{{ isset($menu_description) ? $menu_description->description : '' }}</textarea>
                            </div>
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

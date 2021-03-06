@extends('admin.layouts.main')
@section('content')
    <div class="section-header">
        <h1>Galeri Form</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Galeri Form</h2>
        @include('admin.partials.errors')
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Galeri</h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="@isset($gallery) {{ route('gallery.update', $gallery->id) }} @endisset @empty($gallery) {{ route('gallery.store') }} @endempty"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($gallery)
                                @method('PUT')
                            @endisset
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file"
                                    @if (isset($gallery)) name="image"    
                                    @else
                                    multiple
                                    name="image[]" @endif
                                    class="form-control" accept="image/*">
                            </div>
                            @isset($gallery)
                                <img src="{{ asset('uploads/' . $gallery->image) }}" style="height: 100px" alt="">
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

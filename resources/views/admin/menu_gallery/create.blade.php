@extends('admin.layouts.main')
@section('content')
    <div class="section-header">
        <h1>Menu Galeri Form</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Menu Galeri Form</h2>
        @include('admin.partials.errors')
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Menu Galeri</h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="@isset($menu_gallery) {{ route('menu_gallery.update', $menu_gallery->id) }} @endisset @empty($menu_gallery) {{ route('menu_gallery.store') }} @endempty"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($menu_gallery)
                                @method('PUT')
                            @endisset
                            <input type="text" name="menu_id" value="{{ $menu->id }}" class="d-none">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file"
                                    @if (isset($menu_gallery)) name="image"    
                                    @else
                                    multiple
                                    name="image[]" @endif
                                    class="form-control" accept="image/*">
                            </div>
                            @isset($menu_gallery)
                                <img src="{{ asset('uploads/' . $menu_gallery->image) }}" style="height: 100px" alt="">
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

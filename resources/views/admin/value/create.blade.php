@extends('admin.layouts.main')
@section('content')
    <div class="section-header">
        <h1>Karir Form</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Karir Form</h2>
        @include('admin.partials.errors')
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Karir</h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="@isset($value) {{ route('value.update', $value->id) }} @endisset @empty($value) {{ route('value.store') }} @endempty"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($value)
                                @method('PUT')
                            @endisset
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control"
                                    value="{{ isset($value) ? $value->name : '' }}" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>
                            @isset($value)
                                <img src="{{ asset('uploads/' . $value->image) }}" style="height: 100px" alt="">
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

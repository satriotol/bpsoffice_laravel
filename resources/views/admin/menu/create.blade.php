@extends('admin.layouts.main')
@section('content')
    <div class="section-header">
        <h1>Menu Form</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Menu Form</h2>
        @include('admin.partials.errors')
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Menu</h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="@isset($menu) {{ route('menu.update', $menu->id) }} @endisset @empty($menu) {{ route('menu.store') }} @endempty"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($menu)
                                @method('PUT')
                            @endisset
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" value="{{ isset($menu) ? $menu->name : '' }}"
                                    name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="custom-select" required name="status">
                                    <option value="">Pilih Salah Satu</option>
                                    @foreach ($statuses as $status_id => $status_name)
                                        <option value="{{ $status_id }}"
                                            @isset($menu) @if ($status_id === $menu->status) selected @endif @endisset>
                                            {{ $status_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tipe</label>
                                <select class="custom-select" required name="type">
                                    <option value="">Pilih Salah Satu</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type }}"
                                            @isset($menu) @if ($type === $menu->type) selected @endif @endisset>
                                            {{ $type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Slider</label>
                                <input type="file" name="slider" class="form-control" accept="image/*">
                            </div>
                            @isset($menu)
                                <img src="{{ asset('uploads/' . $menu->slider) }}" style="height: 100px" alt="">
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

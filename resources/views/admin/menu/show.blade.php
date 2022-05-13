@extends('admin.layouts.main')
@section('content')
    <div class="section-header">
        <h1>Menu Detail</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Menu Detail</h2>
        @include('admin.partials.errors')
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Menu</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            {{ $menu->name }}
                            <br>
                            @if ($menu->status == 1)
                                Aktif
                            @else
                                Tidak Aktif
                            @endif
                            <br>
                            {{ $menu->type }}
                            <br>
                            <img src="{{ asset('uploads/' . $menu->slider) }}" class="img-fluid" alt="">
                        </p>
                        <p>{{ $menu->date }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @if ($menu->type === 'GAMBAR')
                    <div class="card">
                        <div class="card-header">
                            <h4>Table</h4>
                            <div class="card-header-action">
                                <a href="{{ route('menu_gallery.create', $menu->id) }}"
                                    class="badge badge-primary">Create</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="myTable" class="display">
                                <thead>
                                    <th>Image</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menu->menu_galleries as $menu_gallery)
                                        <tr>
                                            <td>
                                                <a href="{{ asset('uploads/' . $menu_gallery->image) }}"
                                                    data-lightbox="roadtrip">
                                                    <img src="{{ asset('uploads/' . $menu_gallery->image) }}"
                                                        style="height: 100px" class="img-fluid">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('menu_gallery.edit', ['menu_gallery' => $menu_gallery->id, 'menu' => $menu_gallery->menu_id]) }}"
                                                    class="btn btn-warning">
                                                    Edit
                                                </a>
                                                <form action="{{ route('menu_gallery.destroy', $menu_gallery->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="card">
                        <div class="card-header">
                            <h4>Table</h4>
                            @if ($menu->menu_descriptions->count() == 0)
                                <div class="card-header-action">
                                    <a href="{{ route('menu_description.create', $menu->id) }}"
                                        class="badge badge-primary">Create</a>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <table id="myTable" class="display">
                                <thead>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menu->menu_descriptions as $menu_description)
                                        <tr>
                                            <td>
                                                {!! $menu_description->description !!}
                                            </td>
                                            <td>
                                                <a href="{{ route('menu_description.edit', ['menu_description' => $menu_description->id, 'menu' => $menu_description->menu_id]) }}"
                                                    class="btn btn-warning">
                                                    Edit
                                                </a>
                                                <form
                                                    action="{{ route('menu_description.destroy', $menu_description->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@extends('admin.layouts.main')
@section('content')
    <div class="section-header">
        <h1>Gambar Menu Form</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Gambar Menu Form</h2>
        <div class="card">
            <div class="card-header">
                <h4>Gambar Menu Table</h4>
                @if ($images->count() == 0)
                    <div class="card-header-action">
                        <a href="{{ route('image.create') }}" class="badge badge-primary">Create</a>
                    </div>
                @endif
            </div>
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <th>Galeri</th>
                        <th>Kontak</th>
                        <th>Karir</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $image)
                            <tr>
                                <td><img src="{{ $image->image_gallery }}" class="img-fluid" alt=""></td>
                                <td><img src="{{ $image->image_contact }}" class="img-fluid" alt=""></td>
                                <td><img src="{{ $image->image_carrier }}" class="img-fluid" alt=""></td>
                                <td>
                                    <a href="{{ route('image.edit', $image->id) }}" class="btn btn-warning">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

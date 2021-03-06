@extends('admin.layouts.main')
@section('content')
    <div class="section-header">
        <h1>Tentang Form</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Tentang Form</h2>
        <div class="card">
            <div class="card-header">
                <h4>Tentang Table</h4>
                @if ($abouts->count() == 0)
                    <div class="card-header-action">
                        <a href="{{ route('about.create') }}" class="badge badge-primary">Create</a>
                    </div>
                @endif
            </div>
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <th>Deskripsi</th>
                        <th>Investasi</th>
                        <th>Alamat</th>
                        <th>Telefon</th>
                        <th>Email</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)
                            <tr>
                                <td>{!! $about->description !!}</td>
                                <td>{!! $about->investation !!}</td>
                                <td>{{ $about->address }}</td>
                                <td>{{ $about->phone }}</td>
                                <td>{{ $about->email }}</td>
                                <td><img src="{{ asset('uploads/' . $about->image) }}" class="img-fluid" alt=""></td>
                                <td>
                                    <a href="{{ route('about.edit', $about->id) }}" class="btn btn-warning">
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

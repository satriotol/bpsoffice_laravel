@extends('admin.layouts.main')
@section('content')
    <div class="section-header">
        <h1>Nilai Perusahaan Table</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Nilai Perusahaan Table</h2>
        <div class="card">
            <div class="card-header">
                <h4>Nilai Perusahaan Table</h4>
                <div class="card-header-action">
                    <a href="{{ route('value.create') }}" class="badge badge-primary">Create</a>
                </div>
            </div>
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <th>Nama</th>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($values as $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>
                                    <img src="{{ asset('uploads/' . $value->image) }}" class="img-fluid"
                                        style="height: 100px" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('value.edit', $value->id) }}" class="btn btn-warning">
                                        Edit
                                    </a>
                                    <form action="{{ route('value.destroy', $value->id) }}" method="POST"
                                        class="d-inline">
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
    </div>
@endsection

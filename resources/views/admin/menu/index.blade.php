@extends('admin.layouts.main')
@section('content')
    <div class="section-header">
        <h1>Menu Table</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Menu Table</h2>

        <div class="card">
            <div class="card-header">
                <h4>Menu Table</h4>
                <div class="card-header-action">
                    <a href="{{ route('menu.create') }}" class="badge badge-primary">Create</a>
                </div>
            </div>
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <th>Date</th>
                        <th>Name</th>
                        <th>User</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr>
                                <td>{{ $menu->date }}</td>
                                <td>{{ $menu->name }}</td>
                                <td>{{ $menu->user->name ?? '' }}</td>
                                <td>
                                    <a href="{{ route('menu.show', $menu->id) }}" class="btn btn-primary">
                                        Detail
                                    </a>
                                    <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning">
                                        Edit
                                    </a>
                                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST"
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

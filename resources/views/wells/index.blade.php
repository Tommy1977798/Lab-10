@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">All Wells</h2>
    <a href="{{ route('wells.create') }}" class="btn btn-primary mb-3">+ Add New Well</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Production Rate</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($wells as $well)
                <tr>
                    <td>{{ $well->name }}</td>
                    <td>{{ $well->location }}</td>
                    <td>{{ $well->production_rate }}</td>
                    <td>{{ $well->status }}</td>
                    <td>
                        <a href="{{ route('wells.show', $well->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('wells.edit', $well->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form method="POST" action="{{ route('wells.destroy', $well->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

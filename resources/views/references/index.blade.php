@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>References</h1>
    <a href="{{ route('references.create') }}" class="btn btn-primary">Add Reference</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($references as $reference)
                <tr>
                    <td>{{ $reference->id }}</td>
                    <td>{{ $reference->title }}</td>
                    <td>
                        <a href="{{ route('references.show', $reference->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('references.edit', $reference->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('references.destroy', $reference->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

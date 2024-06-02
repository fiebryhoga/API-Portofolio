@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Project Tags</h1>
    <a href="{{ route('projectTags.create') }}" class="btn btn-primary">Add Project Tag</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Project ID</th>
                <th>Tag Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projectTags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->project_id }}</td>
                    <td>{{ $tag->nameTags }}</td>
                    <td>
                        <a href="{{ route('projectTags.show', $tag->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('projectTags.edit', $tag->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('projectTags.destroy', $tag->id) }}" method="POST" style="display:inline;">
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

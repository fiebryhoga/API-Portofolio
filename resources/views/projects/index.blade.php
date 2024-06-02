@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Projects</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary">Add Project</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->nama }}</td>
                    <td><img src="{{ asset($project->gambar) }}" alt="{{ $project->nama }}" width="50"></td>
                    <td>{{ $project->deskripsi }}</td>
                    <td>{{ $project->link }}</td>
                    <td>
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
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

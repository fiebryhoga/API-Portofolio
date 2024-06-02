@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Blogs</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add Blog</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Date</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->penulis }}</td>
                    <td>{{ $blog->tanggal }}</td>
                    <td><img src="{{ asset($blog->image) }}" alt="{{ $blog->judul }}" width="50"></td>
                    <td>{{ $blog->judul }}</td>
                    <td>{{ $blog->deskripsi }}</td>
                    <td>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
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
